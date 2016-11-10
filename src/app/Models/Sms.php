<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sms extends Model
{
	public function sendSms($msg, $phone){

		$ch = curl_init("http://sms.ru/sms/send");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_POSTFIELDS, array(

			"api_id"		=>	"E9B5E326-095D-8C06-38D4-C1482F4172AA",
			"to"			=>	$phone,
			"from"			=>	"375297175804",
			"translit" => "1",
			"text"		=>	iconv("utf-8", "windows-1251", $msg)

		));
		$body = curl_exec($ch);
		curl_close($ch);

		return $body;
	}
}
