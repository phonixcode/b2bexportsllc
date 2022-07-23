<?php

namespace App\Http\Controllers\Back;

use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::get();
        return view('back.facility.index', compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.facility.create');
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
            'description'   => 'required',
            'photo'         => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($image = $request->file('photo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/facility-image/', $imageName);
            $data['photo'] = URL::to('/') . '/media/facility-image/' . $imageName;
        }

        $status = Facility::create($data);

        return $status
            ? redirect()->route('facilities.index')->with('success', 'Successfully Created Facility')
            : redirect()->back()->with('error', 'Error Creating Facility!, Try again later');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function show(Facility $facility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function edit(Facility $facility)
    {
        return $facility
        ? view('back.facility.edit', compact('facility'))
        : back()->with('error', 'Data not found!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        $request->validate([
            'title'         => 'sometimes',
            'description'   => 'sometimes',
            'photo'         => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($image = $request->file('photo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/facility-image/', $imageName);
            $data['photo'] = URL::to('/') . '/media/facility-image/' . $imageName;

            $this->unlinkImage($facility['photo']);
        } else {
            unset($data['photo']);
        }

        $facility->update($data);

        return $facility
            ? redirect()->route('facilities.index')->with('success', 'Facility updated!')
            : back()->with('error', 'Error updating Facility, Try again later.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facility  $facility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facility $facility)
    {
        if ($facility) {
            $this->unlinkImage($facility->service_image);
            //$banner->delete();
            return $facility->delete()
                ? back()->with('success', 'Facility deleted')
                : back()->with('error', 'Error Deleting Facility, Try again later.');
        } else {
            return back()->with('error', 'Data not found!');
        }
    }

    private static function unlinkImage($fileName)
    {
        $imagePath = 'media/facility-image/';
        $imageName = substr($fileName, strrpos($fileName, '/') + 1);
        $old_image = $imagePath . $imageName;

        if (file_exists($old_image)) {
            @unlink($old_image);
        }
    }
}
