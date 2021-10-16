<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\RecentContentSection;
use Helpers;
use Exception;
class RecentContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recentsections = RecentContentSection::all();
        return view('admin.pages.frontend.recentcontent.show', compact('recentsections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.frontend.recentcontent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'title' => 'required',
                'image' => 'required',
                'detail' => 'required',
            ]);

            $image = Helpers::saveImage($request->image);

            RecentContentSection::create([
                'title' => $request->title,
                'image' => $image,
                'detail' => $request->detail,
            ]);
            parent::successMessage("Setting added Successfully");
            return redirect()->back();

        } catch(Exception $e) {
            dd($e->getMessage());
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
        $editcontentsection = RecentContentSection::find($id);
        return view('admin.pages.frontend.recentcontent.edit',compact('editcontentsection'));
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
        try{
            $request->validate([
                'title' => 'required',
                'detail' => 'required',
            ]);
            $updateSection = RecentContentSection::find($id);
            $image = Helpers::updateImage($request->image , $updateSection->image);
            $updateSection->update([
                'title' => $request->title,
                'image' => $image,
                'detail' => $request->detail
            ]);
            parent::successMessage("Setting Updated Successfully");
            return redirect()->back();

        } catch(Exception $e) {
            dd($e->getMessage());
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
            RecentContentSection::find($id)->delete();
        } catch (Exception $e) {
            dd($e->getMessage());
        }
        parent::successMessage("Home Setting deleted Successfully");
        return redirect()->back();
    }
}
