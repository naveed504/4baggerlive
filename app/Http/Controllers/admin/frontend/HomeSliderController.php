<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\Slider;
use Exception;
use Helpers;

class HomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders =Slider::all();
        return view('admin.pages.frontend.slider.show',compact('sliders'));
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
        $imgpath= public_path('admin/allimages/');   
        $sliderimage = Helpers::saveImage($request->cover_photo, $imgpath);
        Slider::create([
            'title_one' => $request->title_one,
            'title_two' => $request->title_two,
            'content' => $request->content,
            'cover_photo' => $sliderimage,
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
        $slider =Slider::find($id);
        return view('admin.pages.frontend.slider.create',compact('slider'));
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
        $updateSlider =Slider::find($id);
        $imgpath= public_path('admin/allimages/');
        $updateSliderImage= Helpers::updateImage($request->update_photo, $updateSlider->cover_photo,$imgpath);
        $updateSlider->update([
            'title_one' => $request->title_one,
            'title_two' => $request->title_two,
            'content' => $request->content,
            'cover_photo' => $updateSliderImage,
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
        try {
            Slider::find($id)->delete();
        } catch (Exception $e) {
            parent::dangerMessage($e->getMessage());
            return redirect()->back();
        }
        return redirect()->route('adminslider.index');
    }
}
