<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Region;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::all();
        return view('backend/place/list', compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();
        return view('backend/place/new', compact('regions'));
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
            'name' => ['required', 'string', 'max:255', 'unique:places'],
            'region' => ['required'],
        ]);
        if($validator)
        {

            $place = new  \App\Place;

            $place->name = $request->input('name');
            $place->region = $request->input('region');
            $place->description = $request->input('description');

            $imgfile = $request->file('photo');

            $path ='';
            if($imgfile != null)
            {
                // dd($request->file('newImage'));
                $filenamewithExt = $imgfile->getClientOriginalName();

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $imgfile->getClientOriginalExtension();

                $fileNameToStore = rand(11111,99999).'.'.$extension;
                $imgfile->move(public_path().'/storage/photo/places/',$fileNameToStore);

                $path = '/storage/photo/places/'.$fileNameToStore;
                $place->photo = $path;
            }

            $place->photo = $path;
            $place->save();

            return redirect('admin/place')->with("success_flashmsg", "New Place is ADDED in your data");
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
        $place = Place::find($id);
        return view('backend/place/detail', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $regions = Region::all();
        $place = Place::find($id);
        return view('backend/place/edit', compact('regions','place'));
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
        $place = Place::find($id);

        $place->name = $request->input('name');
        $place->region = $request->input('region');
        $place->description = $request->input('description');

        $imgfile = $request->file('photo');

        $path ='';
        if($imgfile != null)
        {
            // dd($request->file('newImage'));
            $filenamewithExt = $imgfile->getClientOriginalName();

            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $imgfile->getClientOriginalExtension();

            $fileNameToStore = rand(11111,99999).'.'.$extension;
            $imgfile->move(public_path().'/storage/photo/places/',$fileNameToStore);

            $path = '/storage/photo/places/'.$fileNameToStore;
            $place->photo = $path;
        }
        else
        {
            $path = $request->input('oldphoto');
            $place->photo = $path;
        }

        $place->photo = $path;
        $place->save();

        return redirect('admin/place')->with("success_flashmsg", "New Place is ADDED in your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place=Place::find($id);
        $place->delete();

        return redirect('admin/place')->with("success_flashmsg", "Existing Place is Deleted in your data");
    }
}
