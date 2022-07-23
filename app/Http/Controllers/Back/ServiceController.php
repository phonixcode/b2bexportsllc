<?php

namespace App\Http\Controllers\Back;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        return view('back.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.service.create');
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
            'title'         => 'required',
            'summary'       => 'required',
            'description'   => 'nullable',
            'photo'         => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->input('title'));
        $data['slug'] = $slug;

        if ($image = $request->file('photo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/service-image/', $imageName);
            $data['photo'] = URL::to('/') . '/media/service-image/' . $imageName;
        }


        $status = Service::create($data);

        return $status
            ? redirect()->route('services.index')->with('success', 'Successfully Created Service')
            : redirect()->back()->with('error', 'Error Creating Service!, Try again later');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return $service
        ? view('back.service.edit', compact('service'))
        : back()->with('error', 'Data not found!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title'         => 'sometimes',
            'summary'       => 'sometimes',
            'description'   => 'sometimes',
            'photo'         => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();
        $slug = Str::slug($request->input('title'));
        $data['slug'] = $slug;

        if ($image = $request->file('photo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/facility-image/', $imageName);
            $data['photo'] = URL::to('/') . '/media/facility-image/' . $imageName;

            $this->unlinkImage($service['photo']);
        } else {
            unset($data['photo']);
        }

        $service->update($data);

        return $service
            ? redirect()->route('services.index')->with('success', 'Service updated!')
            : back()->with('error', 'Error updating Service, Try again later.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if ($service) {
            $this->unlinkImage($service->image);
            //$banner->delete();
            return $service->delete()
                ? back()->with('success', 'Service deleted')
                : back()->with('error', 'Error Deleting Service, Try again later.');
        } else {
            return back()->with('error', 'Data not found!');
        }
    }

    private static function unlinkImage($fileName)
    {
        $imagePath = 'media/service-image/';
        $imageName = substr($fileName, strrpos($fileName, '/') + 1);
        $old_image = $imagePath . $imageName;

        if (file_exists($old_image)) {
            @unlink($old_image);
        }
    }
}
