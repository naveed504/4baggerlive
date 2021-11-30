<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\OfficialPartner;
use Helpers;
use Exception;

class OfficialPartnerSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officialpartners =OfficialPartner::all();
        return view('admin.pages.frontend.officialpartner.show',compact('officialpartners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.frontend.officialpartner.create');
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
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'detail' => 'required',
        ]);

        try{
            $imgpath= public_path('admin/allimages/');
            $image = Helpers::saveImage($request->image, $imgpath);
            OfficialPartner::create([
                'title' => $request->title,
                'image' => $image,
                'detail' => $request->detail,
            ]);
            parent::successMessage("Home Setting added Successfully");
            return redirect()->route('officialpartner.index');

        } catch(Exception $e) {
            parent::dangerMessage($e->getMessage());
            return redirect()->back();
        }
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
        $editofficialsection = OfficialPartner::find($id);
        return view('admin.pages.frontend.officialpartner.edit',compact('editofficialsection'));
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
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
        ]);

        try{
            $updateSection = OfficialPartner::find($id);
            $imgpath= public_path('admin/allimages/');
            $image = Helpers::updateImage($request->image , $updateSection->image, $imgpath);
            $updateSection->update([
                'title' => $request->title,
                'image' => $image,
                'detail' => $request->detail
            ]);
            parent::successMessage("Setting Updated Successfully");
            return redirect()->route('officialpartner.index');

        } catch(Exception $e) {
            parent::dangerMessage($e->getMessage());
            return redirect()->back();

           
        }
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
            OfficialPartner::find($id)->delete();
        } catch (Exception $e) {
            parent::dangerMessage($e->getMessage());
            return redirect()->back();
        }
        parent::successMessage("Home Setting deleted Successfully");
        return redirect()->back();
    }
}
