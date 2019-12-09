<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book(Request $request)
    {
        $guideid = $request->guideid;
        $guidename = $request->guidename;
        $placeid = $request->placeid;
        $placename = $request->placename;
        $regionid = $request->regionid;
        $regionname = $request->regionname;
		$divisionid = $request->divisionid;
		$divisionname = $request->divisionname;

		echo "Guide ID => ".$guideid."<br>";
		echo "Guide Name => ".$guidename."<br";
		echo "Place ID => ".$placeid."<br>";
		echo "Place Name =>".$placename."<br>";
		echo "Region ID => ".$regionid."<br>";
		echo "Reion Name => ".$regionname."<br>";
		echo "Division ID => ".$divisionid."<br>";
		echo "Division Name => ".$divisionname."<br>";


    }
}
