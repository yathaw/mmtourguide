<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Guide;
use Mail;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;



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

    public function new()
    {
        $news = Guide::where('status',0)->get();

        return view('backend/guide/newlist',compact('news'));
    }

    public function register()
    {
        $registers = Guide::where('status',1)->get();

        return view('backend/guide/registerlist',compact('registers'));
    }

    public function reject()
    {
        $rejects = Guide::where('status',2)->get();

        return view('backend/guide/rejectlist',compact('rejects'));
    }

    public function confirm($id)
    {
        $carbon = Carbon::now();
        $today = $carbon->format('Y-m-d');

    	$guide = Guide::find($id);
    	$guide_userid = $guide->user->id;

    	$user = User::find($guide_userid);

    	$user->assignRole('guide');

        $guidenumber = 'MM'.rand(11111,99999);

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
        $guide->guidenumber = $guidenumber;
        $guide->status = 1;
        $guide->user_id = $guide->user_id;
        $guide->division_id = $guide->division_id;
        $guide->save();

  //   	$email = $user->email;
  //   	$subject = 'Confirm Your Email To Our Guide Member';
  //   	$from = "myanmaritbootcamp@gmail.com";
  //   	// dd($useremail);

  //       $username = $user->name;

  //   	$data = array(
	 //        'name' => $username,
	 //        'email' => $email
	 //    );

		// Mail::send('mail.guide_confirm', compact('data'), function ($message) use ($email,$from,$subject){

	 //        $message->from($from, 'MM Tour Guide');

	 //        $message->to($email)->subject($subject);

	 //    });

        return redirect('admin/guide/register')->with("success_flashmsg", "New Guide is ADDED in your data");
		
    	// dd($user); 
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
