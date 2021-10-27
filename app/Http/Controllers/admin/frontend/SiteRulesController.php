<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\General\SiteRule;
use Exception;

class SiteRulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siterules = SiteRule::all();
        return view('admin.pages.frontend.rules.show',compact('siterules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.frontend.rules.create');

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
            'rule'  => 'required',            
          ]);
          try{
                SiteRule::create([
                    'rule' => $request->rule
                ]);     
                parent::successMessage(" Site Rule Added Successfully");
                return redirect()->route('siterule.index');  
            } catch (Exception $e) {
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
        $siterule =SiteRule::find($id);
        return view('admin.pages.frontend.rules.create',compact('siterule'));

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
            'rule'  => 'required',            
          ]);

          try{
                $siteruleupdate = SiteRule::find($id);
                $siteruleupdate->update([
                    'rule' => $request->rule
                ]);     
                parent::successMessage(" Site Rule Updated Successfully");
                return redirect()->route('siterule.index');  
          } catch (Exception $e) {
              dd($e->getMessage());
          }    }

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
