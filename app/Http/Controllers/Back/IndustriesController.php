<?php

namespace App\Http\Controllers\Back;

use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;

class IndustriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industries = Industry::get();
        return view('back.industry.index', compact('industries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.industry.create');
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
            'sub_title'       => 'required',
            'information'   => 'nullable',
            'photo'         => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($image = $request->file('photo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/industry-image/', $imageName);
            $data['photo'] = URL::to('/') . '/media/industry-image/' . $imageName;
        }


        $status = Industry::create($data);

        return $status
            ? redirect()->route('industries.index')->with('success', 'Successfully Created Industry')
            : redirect()->back()->with('error', 'Error Creating Industry!, Try again later');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function show(Industry $industry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function edit(Industry $industry)
    {
        return $industry
        ? view('back.industry.edit', compact('industry'))
        : back()->with('error', 'Data not found!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Industry $industry)
    {
        $request->validate([
            'title'         => 'sometimes',
            'sub_title'     => 'sometimes',
            'information'   => 'sometimes',
            'photo'         => 'sometimes|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($image = $request->file('photo')) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('media/industry-image/', $imageName);
            $data['photo'] = URL::to('/') . '/media/industry-image/' . $imageName;

            $this->unlinkImage($industry['photo']);
        } else {
            unset($data['photo']);
        }

        $industry->update($data);

        return $industry
            ? redirect()->route('industries.index')->with('success', 'Industry updated!')
            : back()->with('error', 'Error updating Industry, Try again later.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Industry $industry)
    {
        if ($industry) {
            $this->unlinkImage($industry->image);
            //$banner->delete();
            return $industry->delete()
                ? back()->with('success', 'Industry deleted')
                : back()->with('error', 'Error Deleting Industry, Try again later.');
        } else {
            return back()->with('error', 'Data not found!');
        }
    }

    private static function unlinkImage($fileName)
    {
        $imagePath = 'media/industry-image/';
        $imageName = substr($fileName, strrpos($fileName, '/') + 1);
        $old_image = $imagePath . $imageName;

        if (file_exists($old_image)) {
            @unlink($old_image);
        }
    }
}
