<?php

namespace App\Http\Controllers\Back;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function settings()
    {
        return view('back.settings', ['setting' => Settings::first()]);
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'site_logo'                     =>  'sometimes|mimes:jpg,png,jpeg,gif,svg|max:256',
            'site_title'                    =>  'sometimes|string',
            'meta_description'              =>  'sometimes|string',
            'meta_keywords'                 =>  'sometimes|string',
            'about_us_summary'              =>  'sometimes|string',
            'about_us_desc'                 =>  'sometimes|string',
            'site_email'                    =>  'sometimes|email|string',
            'site_address'                  =>  'sometimes|string',
            'site_phone_number'             =>  'sometimes|string|max:14',
            'site_mission'                  =>  'sometimes|string',
            'site_vision'                   =>  'sometimes|string',
            'facebook_url'                  =>  'sometimes',
            'instagram_url'                 =>  'sometimes',
            'linkedin_url'                  =>  'sometimes',
            'youtube_url'                   =>  'sometimes',
        ]);

        $settings = $this->update($request);

        return $settings
            ? back()->with('success', 'Setting successfully updated')
            : back()->with('error', 'Something went wrong!');
    }

    private function update(Request $request)
    {
        $setting = Settings::first();

        if ($image = $request->file('site_logo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/site-image/', $imageName);
            $logo = URL::to('/') . '/media/site-image/' . $imageName;

            $this->unlinkImage($setting['site_logo']);
        } else {
            $logo = $setting['site_logo'];
        }

        if ($image = $request->file('site_favicon')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/site-image/', $imageName);
            $favicon = URL::to('/') . '/media/site-image/' . $imageName;

            $this->unlinkImage($setting['site_favicon']);
        } else {
            $favicon = $setting['site_favicon'];
        }

        $setting->update([
            'site_title' => $request->site_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'site_logo' => $logo,
            'site_favicon' => $favicon,
            'site_address' => $request->site_address,
            'site_email' => $request->site_email,
            'site_phone_number' => $request->site_phone_number,
            'site_mission' => $request->site_mission,
            'site_vision' => $request->site_vision,
            'facebook_url' => $request->facebook_url,
            'youtube_url' => $request->youtube_url,
            'instagram_url' => $request->instagram_url,
            'linkedin_url' => $request->linkedin_url,
            'about_us_summary' => $request->about_us_summary,
            'about_us_desc' => $request->about_us_desc
        ]);

        return $setting;
    }

    private static function unlinkImage($fileName)
    {
        $imagePath ='media/site-image/';
        $imageName = substr($fileName, strrpos($fileName, '/' )+1);
        $old_image = $imagePath.$imageName;

        if(file_exists($old_image)){
            @unlink($old_image);
        }
    }
}
