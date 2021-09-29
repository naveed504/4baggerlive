<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\ManageBlog;
use Helpers;

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
        return view('admin.pages.frontend.blog.show',compact('blogs'));
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
        try{   

            $image = Helpers::saveImage($request->image);   
          
            ManageBlog::create([
                'title' => $request->title,
                'slug' => $request->title,
                'image' => $image,                             
                'detail' => $request->detail,
            ]);
            parent::successMessage("Home Setting added Successfully");
            return redirect()->route('manageblog.index');      

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
        $blog =ManageBlog::find($id);

        return view('admin.pages.frontend.blog.edit' ,compact('blog'));
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
            $blog = ManageBlog::find($id);

            $image = Helpers::updateImage($request->image , $blog->image);   
            $blog->update([
                'title' => $request->title,
                'slug' => $request->title,
                'image' => $image,
                'detail' => $request->detail,
            ]);
            parent::successMessage("Home Setting Updated Successfully");
           return redirect()->route('manageblog.index');   

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
        //
    }
}
