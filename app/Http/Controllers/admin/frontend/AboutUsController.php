<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\AboutUs;
use Helpers;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutus = AboutUs::first();
        return view('admin.pages.frontend.aboutus.create',compact('aboutus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $countresult = AboutUs::find($request->aboutusid);
        if(empty($countresult)) {
            $this->saveAboutUs($request);
        } else {
            $this->updateAboutUs($countresult, $request);
        }
        parent::successMessage("About Us Setting Updated Successfully");
        return redirect()->route('aboutus.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function saveAboutUs($request)
    {
        $imgpath= public_path('admin/allimages/');
       $image =  Helpers::saveImage($request->image, $imgpath);
        AboutUs::create([
            'tagline' => $request->tagline,
            'image' => $image,
            'mission_statment' => $request->mission_statment,
            'content' => $request->content,
        ]);

    }

    public function updateAboutUs($dbResult , $request)
    {
        $imgpath= public_path('admin/allimages/');
        $updateImage = Helpers::updateImage($request->image ,$dbResult->image, $imgpath);
        $dbResult->update([
            'tagline' => $request->tagline,
            'image' => $updateImage,
            'mission_statment' => $request->mission_statment,
            'content' => $request->content,
        ]);


    }
}
