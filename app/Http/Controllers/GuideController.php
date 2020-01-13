<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Guide;
use App\Tourist;
use Mail;
use Carbon\Carbon;
use App\Bookingdetail;

use Illuminate\Support\Facades\Auth;
use Redirect,Response;
use Illuminate\Support\Facades\DB;


class GuideController extends Controller
{
    public function index()
    {

        $authid = Auth::id();
        $user = User::find($authid);

        $userid = $user->id;

    	$guide = Guide::where('user_id',$userid)->first();
        $licenses = json_decode($guide->licensecertificate);

    	return view('guide/profile',compact('guide', 'licenses'));
    }


    public function calendar()
    {
 
            $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
            $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');

            $id = Auth::id();
            $guide = Guide::where('user_id',$id)->first();
            $guideid = $guide->id;

            $datas = DB::table('bookingdetails')
                    ->select('bookingdetails.id as id', 'places.name as name', 'hour_startdate as hourstartdate', 'daily_startdate as startdate', 'daily_enddate as enddate', 'arrival_time as arrival_time', 'departure_time as departure_time')
                    ->where('guide_id',$guideid)
                    ->where('status','Confirm')
                    
                    ->join('places', 'bookingdetails.place_id', '=', 'places.id')
                    ->get();


        return view('guide/calendar',compact('datas'));
    }

    public function getTripevent()
    {
        $id = Auth::id();

        $guide = Guide::where('user_id',$id)->first();

        $guideid = $guide->id;

        $bookingdetails = Bookingdetail::where('guide_id',$guideid)->where('status','Confirm')->get();

        return json_encode($bookingdetails);
    }

    public function booking()
    {
        $id = Auth::id();

        $guide = Guide::where('user_id',$id)->first();

        $guideid = $guide->id;


        $bookingdetails = Bookingdetail::where('guide_id',$guideid)->get();

        return view('backend/guide/bookinglist',compact('bookingdetails'));

    }

    public function bookingdetail($id)
    {
        $bookingdetail = Bookingdetail::find($id);

        return view('backend/guide/bookingdetail',compact('bookingdetail'));

    }

    public function bookingconfirm($id)
    {
        $carbon = Carbon::now();
        $today = $carbon->format('Y-m-d');

        $status = "Confirm";

        $bookingdetail = Bookingdetail::find($id);

        // Tourist Email
        $touristemail = $bookingdetail->booking->tourist->user->email;

        // Tourist Name
        $touristname = $bookingdetail->booking->tourist->user->name;
        

        // Update Status in Bookingdetail
        $bookingdetail->hour_startdate = $bookingdetail->hour_startdate;
        $bookingdetail->numberofhours = $bookingdetail->numberofhours;
        $bookingdetail->daily_startdate = $bookingdetail->daily_startdate;
        $bookingdetail->daily_enddate = $bookingdetail->daily_enddate;
        $bookingdetail->tour_day = $bookingdetail->tour_day;
        $bookingdetail->arrival_time = $bookingdetail->arrival_time;
        $bookingdetail->departure_time = $bookingdetail->departure_time;
        $bookingdetail->numberofadult = $bookingdetail->numberofadult;
        $bookingdetail->numberofchild = $bookingdetail->numberofchild;
        $bookingdetail->requirement = $bookingdetail->requirement;
        $bookingdetail->cost = $bookingdetail->cost;
        $bookingdetail->status = $status;
        $bookingdetail->confirmdate = $today;
        $bookingdetail->finishdate = $bookingdetail->finishdate;
        $bookingdetail->guide_id = $bookingdetail->guide_id;
        $bookingdetail->place_id = $bookingdetail->place_id;
        $bookingdetail->booking_id = $bookingdetail->booking_id;
        $bookingdetail->created_at = $bookingdetail->created_at;
        $bookingdetail->updated_at = $bookingdetail->updated_at;
        $bookingdetail->save();



        return redirect('tourguide/booking')->with("success_flashmsg", 'Your Booking is confirmed.'); 


    }

    public function pricing()
    {
        return view('guide/pricing');
    }

    public function pricingstore(Request $request)
    {
        $authid = Auth::id();
        $user = User::find($authid);

        $userid = $user->id;

        $guide = Guide::where('user_id',$userid)->first();

        $hour = $request->input('hourrate');
        $daily = $request->input('dailyrate');
        $type = $request->input('type');

        $hourrate = $hour+'-'+$type;
        $dailyrate = $daily+'-'+$type;

        $guide->license = $guide->license;
        $guide->licensecertificate = $guide->licensecertificate;
        $guide->phone = $guide->phone;
        $guide->address = $guide->address;
        $guide->gender = $guide->gender;
        $guide->profile = $guide->profile;
        $guide->cv = $guide->cv;
        $guide->approveddate = $guide->approveddate;
        $guide->bio = $request->input('bio');
        $guide->hourrate = $hourrate;
        $guide->dailyrate = $dailyrate;
        $guide->guidenumber = $guide->guidenumber;
        $guide->status = $guide->status;
        $guide->user_id = $guide->user_id;
        $guide->division_id = $guide->division_id;
        $guide->save();

    }

    public function edit($id)
    {
        $guide = Guide::find($id);
        $licenses = json_decode($guide->licensecertificate);

        return view('guide/edit', compact('guide', 'licenses'));
    }

    

    

    public function show($id)
    {
        $guide = Guide::find($id);

        $licenses = json_decode($guide->licensecertificate);
            

        return view('backend/guide/detail', compact('guide','licenses'));
    }

    public function destroy($id)
    {
        $carbon = Carbon::now();
        $today = $carbon->format('Y-m-d');

        $guide = Guide::find($id);

        $guide->license = $guide->license;
        $guide->licensecertificate = $guide->licensecertificate;
        $guide->phone = $guide->phone;
        $guide->address = $guide->address;
        $guide->gender = $guide->gender;
        $guide->profile = $guide->profile;
        $guide->cv = $guide->cv;
        $guide->approveddate = $today;
        $guide->bio = $guide->bio;
        $guide->hourrate = $guide->hourrate;
        $guide->dailyrate = $guide->dailyrate;
        $guide->status = 2;
        $guide->user_id = $guide->user_id;
        $guide->division_id = $guide->division_id;
        $guide->save();

        $rejects = Guide::where('status',2)->get();

        return view('backend/guide/rejectlist', compact('rejects'))->with("success_flashmsg", "New Guide is rejected in your data");
    }
}
