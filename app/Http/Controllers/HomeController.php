<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\Division;
use App\Region;
use App\Place;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function search(Request $request)
    {
        $search = $request->place;

        $searchlanguages = $request->language;

        
        $guides=array();

        for ($i=0; $i < count($searchlanguages); $i++) 
        { 
            $language = $searchlanguages[$i];


            $searchresult =   DB::table("guides")
                    ->select(
                            'users.id as user_id',
                            'guides.id as guide_id',
                            'users.name as guide_name',
                            'users.email as guide_email',
                            'guides.license as guide_license',
                            'guides.licensecertificate as guide_licensecertificate',
                            'guides.phone as guide_phone',
                            'guides.address as guide_address',
                            'guides.gender as guide_gender',
                            'guides.profile as guide_profile',
                            'guides.bio as guide_bio',
                            'guides.hourrate as guide_hourrate',
                            'guides.dailyrate as guide_dailyrate',
                            'guides.guidenumber as guide_guidenumber',
                            'regions.name as region_name',
                            'divisions.name as division_name',
                            'places.name as place_name',
                            DB::raw('GROUP_CONCAT(languages.id) AS language_id'),
                            DB::raw('GROUP_CONCAT(languages.name) AS language_name'),

                        )
                    ->join('users', 'guides.user_id', '=', 'users.id')
                    ->join('divisions', 'guides.division_id', '=', 'divisions.id')
                    ->join('regions', 'divisions.id', '=', 'regions.division_id')


                    ->join('guide_place', 'guides.id', '=', 'guide_place.guide_id')
                    ->join('places', 'guide_place.place_id', '=', 'places.id')

                    ->join('guide_language', 'guides.id', '=', 'guide_language.guide_id')
                    ->join('languages', 'guide_language.language_id', '=', 'languages.id')

                    ->where('guide_place.place_id', 'LIKE', "%{$search}%")
            
                    ->where('guide_language.language_id', 'LIKE', "%{$language}%")
                    ->groupBy('guide_language.language_id')
                    ->groupBy('guide_language.guide_id')
                    ->groupBy('guides.id')

                    ->orderBy('users.name', 'asc')
                    ->first();
            if ($searchresult != null) 
            {
                array_push($guides, $searchresult);
                
            }

        }

        // dd($guides);

        $location = DB::table('places')
                    ->select(
                        'places.name as place_name',
                        'places.id as place_id',
                        'regions.name as region_name',
                        'regions.id as region_id',
                        'divisions.name as division_name',
                        'divisions.id as division_id'
                    )
                    ->join('regions','places.region_id', '=', 'regions.id')
                    ->join('divisions', 'regions.division_id', '=', 'divisions.id')
                    ->where('places.id','=',$search)
                    ->first();

        return view('searchresult',compact('guides','location'));

    }

    public function skill(Request $request)
    {
        $data = request('query');

        $languages = Language::where('name','LIKE',"%{$data}%")
                ->get();

        $name = [];
        $id = [];

        foreach($languages as $language)
        {
            $name[] = $language->name;
            $id[] = $language->id;
        }

        $response=array('name'=>$name,'id'=>$id);
        return response()->json($response,200);
        // echo json_encode($name, $id, 128);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function howitworks()
    {
        return view('home');
    }

    public function about()
    {
        return view('home');
    }
}
