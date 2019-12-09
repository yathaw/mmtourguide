<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('backend/country/list',compact('countries'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/country/new');
        
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
            'name' => ['required', 'string', 'max:255', 'unique:countries'],
        ]);
        if($validator)
        {

            $country = new  \App\Country;

            $country->name = $request->input('name');

            $imgfile = $request->file('photo');

            $path ='';
            if($imgfile != null)
            {
                // dd($request->file('newImage'));
                $filenamewithExt = $imgfile->getClientOriginalName();

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $imgfile->getClientOriginalExtension();

                $fileNameToStore = rand(11111,99999).'.'.$extension;
                $imgfile->move(public_path().'/storage/photo/passportcover/',$fileNameToStore);

                $path = '/storage/photo/passportcover/'.$fileNameToStore;
                $country->passportcover = $path;
            }

            $country->passportcover = $path;
            $country->save();

            return redirect('admin/country')->with("success_flashmsg", "New Country is ADDED in your data");
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
        $country = Country::find($id);
        return view('backend/country/edit',compact('country'));
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
        $country = Language::find($id);

        $country->name = $request->input('name');

        $imgfile = $request->file('photo');

        $path ='';
        if($imgfile != null)
        {
            // dd($request->file('newImage'));
            $filenamewithExt = $imgfile->getClientOriginalName();

            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $imgfile->getClientOriginalExtension();

            $fileNameToStore = rand(11111,99999).'.'.$extension;
            $imgfile->move(public_path().'/storage/photo/passportcover/',$fileNameToStore);

            $path = '/storage/photo/passportcover/'.$fileNameToStore;
            $country->passportcover = $path;
        }
        else
        {
            $path = $request->input('oldphoto');
            $country->passportcover = $path;
        }

        $country->passportcover = $path;
        $country->save();

        return redirect('admin/country')->with("success_flashmsg", "Exisiting Country is UPDATED in your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country=Country::find($id);
        $country->delete();

        return redirect('admin/country')->with("success_flashmsg", "Existing Country is Deleted in your data");
    }
}
