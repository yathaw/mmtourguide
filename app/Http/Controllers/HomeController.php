<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Language;
use App\Division;
use App\Region;
use App\Place;
use App\Guide;
use App\Bookingdetail;
use App\Rating;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;


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

        $place = $request->place;
        $languages = $request->language;
        
        $guides = Guide::whereHas('places', function(Builder $query) use ($place){
                $query->where('place_id', $place);
            })->whereHas('languages', function(Builder $query) use ($languages){
                $query->whereIn('language_id', $languages);
            })->get();

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

    public function guideprofile($id)
    {
        $guide = Guide::find($id);
        $touristid = Auth::id();

        // Adventurers
        $adventurers = Bookingdetail::where('guide_id', $id)
                    ->where('status', 'complete')
                    ->groupBy('place_id')
                    ->get();

        // Rating
        $rating = Rating::where('guide_id', $id)
        ->where('tourist_id', $touristid)->first();

        if ($rating) 
        {
            $star = $rating->star;  
        }
        else
        {
            $star = "";
        }

        // Rating Bar
        
        $star_5 = Rating::select('star')->where('guide_id', $id)->where('star','=',5)->sum('star');

        $star_4 = Rating::select('star')->where('guide_id', $id)->where('star','=',4)->sum('star');

        $star_3 = Rating::select('star')->where('guide_id', $id)->where('star','=',3)->sum('star');

        $star_2 = Rating::select('star')->where('guide_id', $id)->where('star','=',2)->sum('star');

        $star_1 = Rating::select('star')->where('guide_id', $id)->where('star','=',1)->sum('star');

        $ratingBar = [
            'star_1' => $star_1,
            'star_2' => $star_2,
            'star_3' => $star_3,
            'star_4' => $star_4,
            'star_5' => $star_5,
        ];

        return view('guideprofile',compact('guide', 'adventurers','star', 'ratingBar'));
    }

    public function rating()
    {
        $star = request('rating');
        $guideid = request('guideid');

        $touristid = Auth::id();

        $alreadyRating = Rating::where('guide_id', $guideid)
        ->where('tourist_id', $touristid)->first();


        if ($alreadyRating) 
        {
            $ratingid = $alreadyRating->id;

            $rating = Rating::find($ratingid);

            $rating->star = $star;
            $rating->guide_id = $rating->guide_id;
            $rating->tourist_id = $rating->tourist_id;
            $rating->save();
        }

        else
        {
            Rating::create([
                'star'           => $star,
                'guide_id'       => $guideid,
                'tourist_id'     => $touristid,
            ]);

        }

        

        echo "SUCCESS";
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
