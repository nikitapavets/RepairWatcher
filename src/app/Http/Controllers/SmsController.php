<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Sms;

class SmsController extends Controller
{
	public function callback(Request $request, Sms $sms){
		/*$name = $request->input("name");
		$phone = $request->input("phone");
		$msg = "From remont.anycomp: 'I am $name, callback me $phone'";

		if ($sms->sendSms($msg, $phone)) {
			echo "ok";
		} else {
			echo "bad";
		}*/
		echo "ok";
	}
}
