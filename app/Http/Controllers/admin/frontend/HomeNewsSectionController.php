<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\ManageNews;

class HomeNewsSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.pages.frontend.newssection.show');
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = ManageNews::first();
        return view('admin.pages.frontend.newssection.create',compact('news'));
        
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
            'heading_one' =>  'required',
            'heading_two' =>  'required',
            'content' =>  'required',
        ]);

        try {            
            $newsid =ManageNews::where('id', '=',$request->news_id)->first();
            if(empty($newsid)) {
                $this->createNews($request);
            } else {
                $this->updateNews($request);
            }  
        } catch (Exception $e) {
            parent::dangerMessage($e->getMessage());
            return redirect()->back();
        }       
        parent::successMessage("Home News Updated Successfully");
        return redirect()->back();
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

    public function createNews($request)
    {
        ManageNews::create([
            'heading_one' => $request->heading_one,
            'heading_two' => $request->heading_two,
            'content' => $request->content,
        ]);

    }

    public function updateNews($request)
    {
       $newsidresult =  ManageNews::find($request->news_id);
       
        $newsidresult->update([
            'heading_one' => $request->heading_one,
            'heading_two' => $request->heading_two,
            'content' => $request->content,

        ]);
    }
}
