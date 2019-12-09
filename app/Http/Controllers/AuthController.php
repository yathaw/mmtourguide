<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Language;
use App\User;
use App\Guide;
use App\Place;
use App\Division;
use App\Country;
use App\Tourist;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;




class AuthController extends Controller
{
    public function tourism_view()
    {
    	$countries = Country::all();
    	return view('auth/tourism_register', compact('countries'));
    }

    public function guide_view()
    {
    	$divisions = Division::all();
    	$languages = Language::all();
    	$places = Place::all();

    	return view('auth/guide_register', compact('divisions', 'languages', 'places'));
    }

    public function divisionsearch(Request $request)
    {
    	$divisionId = request('divisionId');

    	$places = DB::table("places")
    				->select(
    					'places.id as id',
    					'places.name as name',
    					'places.photo as photo'
    				)
    				->join('regions', 'places.region_id', '=', 'regions.id')
    				->where('regions.division_id', '=', $divisionId)
    				// ->groupBy('regions.division_id')
    				->orderBy('places.name', 'ASC')
    				->get();

    	return $places;
    }

    public function countrysearch(Request $request)
    {
    	$countryId = request('countryId');

    	$countries = Country::find($countryId);

    	return $countries['passportcover'];
    }

    public function tourism_register(Request $request)
    {
    	$validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator)
        {
        	$name = $request->input('name');
        	$email = $request->input('email');
        	$password = Hash::make($request->input('password'));
        	$gender = $request->input('gender');
        	$nationality = $request->input('nationality');
        	$dob = $request->input('dob');
        	$country = $request->input('country');
        	$cardtype = $request->input('cardtype');
        	$nrc_card = $request->input('nrc_card');
        	$passport_card = $request->input('passport_card');
        	$doi = $request->input('doi');
        	$doe = $request->input('doe');

        	$cardphotos = $request->file('cardphotos');
        	$profile = $request->file('profile');



        	// USER
	        $user = User::create([
	            'name' => $name,
	            'email' => $email,
	            'password' => $password,
	        ]);
    		$user->assignRole('tourist');

		    // --------------------------------

	        // TOURIST
	        $tourist = new \App\Tourist;
	        $tourist->gender = $gender;
	        $tourist->nationality = $nationality;
	        $tourist->dob = $dob;
	        $tourist->cardtype = $cardtype;
	        
	        if($cardtype == "Passport")
        	{
	        	$tourist->passport = $passport_card;
        		$tourist->doi = $doi;
	        	$tourist->doe = $doe;
        	}
        	else
        	{
        		$tourist->passport = $nrc_card;
        		$tourist->doi = '0000-00-00';
	        	$tourist->doe = '0000-00-00';
        	}
	        $tourist->status = 0;
	        $tourist->country_id = $country;
	        $tourist->user_id = $user->id;

	        // Passportcard Photo ( Multiple Upload )
	        $multiple_path = '';
	        if($cardphotos != null)
	        {

	            foreach($cardphotos as $cardphoto)
	            {
	            	$filenamewithExt = $cardphoto->getClientOriginalName();

                	$filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                	$extension = $cardphoto->getClientOriginalExtension();

                	$fileNameToStore = rand(11111,99999).'.'.$extension;
                	$cardphoto->move(public_path().'/storage/photo/touristcard/',$fileNameToStore);

                	$multiple = '/storage/photo/touristcard/'.$fileNameToStore;

                	$data[] = $multiple; 
	            }

	            $multiple_path = json_encode($data);
                $tourist->passportcard = $multiple_path;


	        }


	        // Profile Upload
	        $image_path ='';
            if($profile != null)
            {
                // dd($request->file('newImage'));
                $filenamewithExt = $profile->getClientOriginalName();

                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
                $extension = $profile->getClientOriginalExtension();

                $fileNameToStore = rand(11111,99999).'.'.$extension;
                $profile->move(public_path().'/storage/photo/tourist/',$fileNameToStore);

                $image_path = '/storage/photo/tourist/'.$fileNameToStore;
                $tourist->image = $image_path;
            }

            $tourist->passportcard = $multiple_path;
            $tourist->image = $image_path;

            $tourist->save();   
            
            return redirect('login')->with("success_flashmsg", "Register successfully. Please Login....!");         

        }

        else
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }


    }

    public function guide_register(Request $request)
    {
        // dd($today);

    	$validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'license'	=>	['required']
        ]);


        if($validator)
        {
        	$carbon = Carbon::now();
        	$today = $carbon->format('Y-m-d');

        	// dd($today);

        	$name = $request->input('name');
        	$license = $request->input('license');
        	$email = $request->input('email');
        	$password = Hash::make($request->input('password'));
        	$gender = $request->input('gender');
        	$address = $request->input('address');
        	$phone = $request->input('phone');
        	$division = $request->input('division');
        	$languages = $request->input('languages');
        	$places = $request->input('places');

        	// License Upload
        	$licensephotos = $request->file('licensephotos');

        	// PDF
        	$pdffile = $request->file('cv');

        	// Profile
            $imgfile = $request->file('profile');

            // USER
	        $user = User::create([
	            'name' => $name,
	            'email' => $email,
	            'password' => $password,
	            'registerdate'  => $today,
	        ]);
		    // --------------------------------

		    // GUIDE
		        $guide = new \App\Guide;
		        $guide->license = $license;
		        $guide->phone = $phone;
		        $guide->address = $address;
		        $guide->gender = $gender;
		        $guide->status = 0;
		        $guide->user_id = $user->id;
		        $guide->division_id = $division;

		        // License Photo ( Multiple Upload )
		        $multiple_path = '';
		        if($licensephotos != null)
		        {

		            foreach($licensephotos as $licensephoto)
		            {
		            	$filenamewithExt = $licensephoto->getClientOriginalName();

	                	$filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
	                	$extension = $licensephoto->getClientOriginalExtension();

	                	$fileNameToStore = rand(11111,99999).'.'.$extension;
	                	$licensephoto->move(public_path().'/storage/photo/guidelicense/',$fileNameToStore);

	                	$multiple = '/storage/photo/guidelicense/'.$fileNameToStore;

	                	$data[] = $multiple; 
		            }

		            $multiple_path = json_encode($data);
	                $guide->licensecertificate = $multiple_path;


		        }


		        // Profile Upload
		        $image_path ='';
	            if($imgfile != null)
	            {
	                // dd($request->file('newImage'));
	                $filenamewithExt = $imgfile->getClientOriginalName();

	                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
	                $extension = $imgfile->getClientOriginalExtension();

	                $fileNameToStore = rand(11111,99999).'.'.$extension;
	                $imgfile->move(public_path().'/storage/photo/guide/',$fileNameToStore);

	                $image_path = '/storage/photo/guide/'.$fileNameToStore;
	                $guide->profile = $image_path;
	            }

	            // PDF Upload
	            $pdf_path ='';
	            if($pdffile != null)
	            {
	                // dd($request->file('newImage'));
	                $filenamewithExt = $pdffile->getClientOriginalName();

	                $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
	                $extension = $pdffile->getClientOriginalExtension();

	                $fileNameToStore = rand(11111,99999).'.'.$extension;
	                $pdffile->move(public_path().'/storage/pdf/guide_cv/',$fileNameToStore);

	                $pdf_path = '/storage/pdf/guide_cv/'.$fileNameToStore;
	                $guide->cv = $pdf_path;
	            }

	            $guide->licensecertificate = $multiple_path;
		        $guide->profile = $image_path;
		        $guide->cv = $pdf_path;
		        $guide->approveddate ='';
		        $guide->bio ='';
		        $guide->hourrate = '';
		        $guide->dailyrate = '';
		        $guide->guidenumber = '';
		        $guide->save();
		    // ---------------------------------

		    // LANGUAGE

		        // Insert Guide Languages table (Relationship / attach)
		        $guide->languages()->attach($languages);

		    // --------------------------------

		    // PLACE
		       	// Insert Guide Places table (Relationship / attach)
	        	$guide->places()->attach($places);
	       	

	        return view('auth/registersuccess');

        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }


    }


}
