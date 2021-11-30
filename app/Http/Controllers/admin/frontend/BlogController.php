<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\ManageBlog;
use Helpers;
use Exception;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = ManageBlog::all();
        return view('admin.pages.frontend.blog.show', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.frontend.blog.create');
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
            'title'  => 'required',
            'image' => 'required',
            'detail' => 'required',
        ]);

        try {
            $imgpath= public_path('admin/allimages/');
            $image = Helpers::saveImage($request->image, $imgpath);
            ManageBlog::create([
                'title' => $request->title,
                'slug' => $request->title,
                'image' => $image,
                'detail' => $request->detail,
            ]);
            parent::successMessage("Home Setting added Successfully");
            return redirect()->route('manageblog.index');
        } catch (Exception $e) {
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
        $blog = ManageBlog::find($id);
        return view('admin.pages.frontend.blog.edit', compact('blog'));
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
            'title'  => 'required',
            'detail' => 'required',
        ]);

        try {
            $blog = ManageBlog::find($id);
            $imgpath= public_path('admin/allimages/');
            $image = Helpers::updateImage($request->image, $blog->image, $imgpath);
            $blog->update([
                'title' => $request->title,
                'slug' => $request->title,
                'image' => $image,
                'detail' => $request->detail,
            ]);
            parent::successMessage("Home Setting Updated Successfully");
            return redirect()->route('manageblog.index');
        } catch (Exception $e) {
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
            ManageBlog::find($id)->delete();
        } catch (Exception $e) {
            parent::dangerMessage($e->getMessage());
            return redirect()->back();
        }
        parent::successMessage("Home Setting deleted Successfully");
        return redirect()->back();
    }

   
}
