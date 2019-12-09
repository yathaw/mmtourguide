<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();
        return view('backend/language/list',compact('languages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/language/new');
        
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
            'name' => ['required', 'string', 'max:255', 'unique:languages'],
        ]);
        if($validator)
        {

            $language = new  \App\Language;

            $language->name = $request->input('name');

            $imgfile = $request->file('photo');

            $path ='';
            if($imgfile != null)
            {
                // dd($request->file('newImage'));
                $filenamewithExt = $imgfile->getClientOriginalName();

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $imgfile->getClientOriginalExtension();

                $fileNameToStore = rand(11111,99999).'.'.$extension;
                $imgfile->move(public_path().'/storage/photo/globalflag/',$fileNameToStore);

                $path = '/storage/photo/globalflag/'.$fileNameToStore;
                $language->flag = $path;
            }

            $language->flag = $path;
            $language->save();

            return redirect('admin/language')->with("success_flashmsg", "New Language is ADDED in your data");
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
        $language = Language::find($id);
        return view('backend/language/edit',compact('language'));
        
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
        $language = Language::find($id);

        $language->name = $request->input('name');

        $imgfile = $request->file('photo');

        $path ='';
        if($imgfile != null)
        {
            // dd($request->file('newImage'));
            $filenamewithExt = $imgfile->getClientOriginalName();

            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            $extension = $imgfile->getClientOriginalExtension();

            $fileNameToStore = rand(11111,99999).'.'.$extension;
            $imgfile->move(public_path().'/storage/photo/globalflag/',$fileNameToStore);

            $path = '/storage/photo/globalflag/'.$fileNameToStore;
            $language->flag = $path;
        }
        else
        {
            $path = $request->input('oldphoto');
            $language->flag = $path;
        }

        $language->flag = $path;
        $language->save();

        return redirect('admin/language')->with("success_flashmsg", "Exisiting Language is UPDATED in your data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $language=Language::find($id);
        $language->delete();

        return redirect('admin/language')->with("success_flashmsg", "Existing Language is Deleted in your data");
    }
}
