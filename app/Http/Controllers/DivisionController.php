<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::all();
        return view('backend/division/list', compact('divisions'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/division/new');
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
            'name' => ['required', 'string', 'max:255', 'unique:divisions'],
            'capital' => ['required'],
            'region' => ['required'],
            'type' => ['required']
        ]);
        if($validator)
        {

            $division = new  \App\Division;

            $division->name = $request->input('name');
            $division->capital = $request->input('capital');
            $division->region = $request->input('region');
            $division->type =  $request->input('type');
            $division->description = $request->input('description');

            $imgfile = $request->file('flag');

            $path ='';
            if($imgfile != null)
            {
                // dd($request->file('newImage'));
                $filenamewithExt = $imgfile->getClientOriginalName();

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $imgfile->getClientOriginalExtension();

                $fileNameToStore = rand(11111,99999).'.'.$extension;
                $imgfile->move(public_path().'/storage/photo/localflag/',$fileNameToStore);

                $path = '/storage/photo/localflag/'.$fileNameToStore;
                $division->flag = $path;
            }

            $division->flag = $path;
            $division->save();

            return redirect('admin/division')->with("success_flashmsg", "New Division is ADDED in your data");
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
        $division = Division::find($id);

        return view('backend/division/detail', compact('division'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $division = Division::find($id);

        return view('backend/division/edit', compact('division'));
        
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
        $division=Division::find($id);
        $division->name = $request->input('name');
        $division->capital = $request->input('capital');
        $division->region = $request->input('region');
        $division->type =  $request->input('type');
        $division->description = $request->input('description');

        $imgfile = $request->file('flag');

        $path ='';
            if($imgfile != null)
            {
                // dd($request->file('newImage'));
                $filenamewithExt = $imgfile->getClientOriginalName();

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $imgfile->getClientOriginalExtension();

                $fileNameToStore = rand(11111,99999).'.'.$extension;
                $imgfile->move(public_path().'/storage/photo/localflag/',$fileNameToStore);

                $path = '/storage/photo/localflag/'.$fileNameToStore;
                $division->flag = $path;
            }

            else
            {
                $path = $request->input('oldphoto');
                $division->flag = $path;
            }

            $division->flag = $path;
            $division->save();



        return redirect('admin/division')->with("success_flashmsg", "Existing Division is Updated in your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division=Division::find($id);
        $division->delete();

        return redirect('admin/division')->with("success_flashmsg", "Existing Division is Deleted in your data");
    }
}
