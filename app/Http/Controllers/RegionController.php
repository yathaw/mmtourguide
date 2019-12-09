<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Division;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        return view('backend/region/list', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::all();
        return view('backend/region/new', compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:regions'],
            'division' => ['required']
        ]);
        if($validator)
        {
            Region::create([
                "name" => request('name'),
                "division_id"   =>  request('division')
            ]);

            return redirect('admin/region')->with("success_flashmsg", "New Region is ADDED in your data");
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validator);
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $divisions = Division::all();
        $region = Region::find($id);

        return view('backend/region/edit', compact('divisions','region'));
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
        $region=Region::find($id);
        $region->name= request('name');
        $region->division_id= request('division');

        $region->save();



        return redirect('admin/region')->with("success_flashmsg", "Existing Region is Updated in your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $region=Region::find($id);
        $region->delete();

        return redirect('region')->with("success_flashmsg", "Existing Region is Deleted in your data");
    }
}
