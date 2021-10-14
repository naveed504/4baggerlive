<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Slider;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.pages.frontend.slider.show', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.frontend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('cover_photo')) {
            $destinationPath = public_path('admin/slider');
            $file = $request->cover_photo;
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $fileName);
            $file_name = $fileName;
        }

        Slider::create([
            'title_one' => $request->title_one,
            'title_two' => $request->title_two,
            'content' => $request->content,
            'cover_photo' => $file_name,
        ]);

        parent::successMessage("Home Slider Added Successfully");
        return redirect()->route('adminslider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.pages.frontend.slider.create', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateSlider = Slider::find($id);
        if ($request->hasFile('update_photo')) {
            if (file_exists(public_path('admin/slider/' . $updateSlider->cover_photo))) {
                unlink(public_path('admin/slider/' . $updateSlider->cover_photo));
            }
            $destinationPath = public_path('admin/slider');
            $file = $request->update_photo;
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $fileName);
            $file_name = $fileName;
        } else {
            $file_name = $updateSlider->cover_photo;
        }

        $updateSlider->update([
            'title_one' => $request->title_one,
            'title_two' => $request->title_two,
            'content' => $request->content,
            'cover_photo' => $file_name,
        ]);

        parent::successMessage("Home Slider Updated Successfully");
        return redirect()->route('adminslider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
