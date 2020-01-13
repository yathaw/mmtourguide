<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guide;
use App\Tourist;
use App\Place;
use App\Bookingdetail;
use App\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class BookController extends Controller
{
    public function book(Request $request,$id)
    {
        $guideid = $id;
        $placeid = $request->placeid;
        $regionid = $request->regionid;
		$divisionid = $request->divisionid;

        $guide = Guide::find($guideid);

        $place = Place::find($placeid);

        return view('book',compact('guide', 'place'));


    }

    public function appointment()
    {
        return view('appointment');
    }

    public function bookingconfirm()
    {
        $carts = request('cart');
        $total = request('total');
        $tourguidecount = request('tourguidecount');

        $tokenno = strtotime(date("h:i:s"));

        $carbon = Carbon::now();
        $today = $carbon->format('Y-m-d');

        $status = 'Pending';

        $authid = Auth::id();

        $tourist = DB::table('tourists')
                ->select('id')
                ->where('user_id', $authid)
                ->first();

        $touristid = $tourist->id;
        $booking = Booking::create([
                'tokenno'           => $tokenno,
                'bookingdate'       => $today,
                'confirmdate'       => '0000-00-00',
                'finishdate'        => '0000-00-00',
                'invoicepdf'        => '',
                'total'             => $total,
                'totalguide'        => $tourguidecount,
                'status'            => $status,
                'tourist_id'        => $touristid,
            ]);

        foreach ($carts as $cart) 
        {
            $guideid = $cart['guideid'];
            $placeid = $cart['placeid'];

            $hourrate_string = $cart['hourrate'];
            $dailyrate_string = $cart['dailyrate'];

            $hourrate_array = explode(' ', $hourrate_string);
            $hourrate = $hourrate_array[0];

            $dailyrate_array = explode(' ', $dailyrate_string);
            $dailyrate = $dailyrate_array[0];

            $hour_startdate = $cart['hour_startdate'];
            $numberofhours = $cart['numberofhours'];

            $daily_startdate = new Carbon($cart['daily_startdate']);
            $daily_enddate = new Carbon($cart['daily_enddate']);
            $arrival_time = $cart['arrival_time'];
            $departure_time = $cart['departure_time'];

            $numberofadult = $cart['numberofadult'];
            $numberofchild_ls = $cart['numberofchild'];
            $requirement = $cart['requirement'];

            if ($numberofchild_ls =="") 
            {
                $numberofchild = 0;
            }

            $numberofdays = $daily_startdate->diffInDays($daily_enddate);



            if ($daily_startdate == "") 
            {
                $subtotal = $hourrate * $numberofhours;
            }

            else 
            {
                $subtotal = $dailyrate * $numberofdays;
            }

            if ($hour_startdate == "") 
            {
                $hour_startdate_in = '0000-00-00';
            }
            else
            {
                $hour_startdate_in = $hour_startdate;
            }

            if($cart['daily_startdate'])
            {
                $daily_startdate_in = $cart['daily_startdate'];
                $daily_enddate_in = $cart['daily_enddate'];

            }
            else
            {
                $daily_startdate_in = '0000-00-00';
                $daily_enddate_in = '0000-00-00';
            }

            Bookingdetail::create([
                'hour_startdate'      => $hour_startdate_in,
                'numberofhours'       => $numberofhours,
                'daily_startdate'     => $daily_startdate_in,
                'daily_enddate'       => $daily_enddate_in,
                'tour_day'            => $numberofdays,
                'arrival_time'        => $arrival_time,
                'departure_time'      => $departure_time,
                'numberofadult'       => $numberofadult,
                'numberofchild'       => $numberofchild,
                'requirement'         => $requirement,
                'cost'                => $subtotal,
                'status'              => $status,
                'confirmdate'         => '0000-00-00',
                'finishdate'          => '0000-00-00',
                'guide_id'            => $guideid,
                'place_id'            => $placeid,
                'booking_id'          => $booking->id
            ]);

        }




    }

    public function bookingsuccess()
    {
        return view('bookingsuccess');
    }

}
