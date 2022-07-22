<?php

namespace App\Http\Controllers\Back;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::get();
        return view('back.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($image = $request->file('image')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/banner-image/', $imageName);
            $data['image'] = URL::to('/') . '/media/banner-image/' . $imageName;
        }

        $status = Banner::create($data);

        return $status
            ? redirect()->route('banners.index')->with('success', 'Successfully Created Banner')
            : redirect()->back()->with('error', 'Error Creating Banner!, Try again later');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return $banner
        ? view('back.banner.edit', compact('banner'))
        : back()->with('error', 'Data not found!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'sometimes',
            'image' => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($image = $request->file('image')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/banner-image/', $imageName);
            $data['image'] = URL::to('/') . '/media/banner-image/' . $imageName;

            $this->unlinkImage($banner['image']);
        } else {
            unset($data['image']);
        }

        $banner->update($data);

        return $banner
            ? redirect()->route('banners.index')->with('success', 'Banner updated!')
            : back()->with('error', 'Error updating Banner, Try again later.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        if ($banner) {
            $this->unlinkImage($banner->service_image);
            //$banner->delete();
            return $banner->delete()
                ? back()->with('success', 'Banner deleted')
                : back()->with('error', 'Error Deleting Banner, Try again later.');
        } else {
            return back()->with('error', 'Data not found!');
        }
    }

    private static function unlinkImage($fileName)
    {
        $imagePath = 'media/banner-image/';
        $imageName = substr($fileName, strrpos($fileName, '/') + 1);
        $old_image = $imagePath . $imageName;

        if (file_exists($old_image)) {
            @unlink($old_image);
        }
    }
}
