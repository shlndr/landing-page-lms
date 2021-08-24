<?php

// otp2
// $response = file_get_contents('https://otp2.aclgateway.com/servlet/com.aclwireless.pushconnectivity.listeners.TextListener?appid=taliotp&userId=taliotp&pass=taliotp21&contenttype=1&from=TATALI&to=918130421064&text=1234 is your OTP to register at tataaiawellnessday.com. Enter the OTP to register yourself.&alert=1&selfid=true&intflag=false&language=hi"&s=1&f=1');

 // $response = file_get_contents('https://otp2.aclgateway.com/OTP_ACL_Web/OtpRequestListener?enterpriseid=taliotp&subEnterpriseid=taliotp&pusheid=taliotp&pushepwd=taliotp21&sender=TATALI&msisdn=7021436294&msgtext=1234%20is%20your%20OTP%20to%20register%20at%20tataaiawellnessday.com.%20Enter%20the%20OTP%20to%20register%20yourself.');
// tialifalrt25

// $response = file_get_contents('https://push3.aclgateway.com/servlet/com.aclwireless.pushconnectivity.listeners.TextListener?userId=tialifalrt&pass=tialifalrt25&appid=tialifalrt&subappid=tialifalrt&contenttype=1&to=917021436294&from=TATALI&text=Thank%20you%20for%20registering.%20Sehat%20Ka%20Rakshakaran%20Workshop%20by%20Tata%20AIA%20Life%20Insurance%20cares%20for%20your%20all-round%20wellness.%20You%20will%20receive%20the%20event%20link%20here.&selfid=true&alert=1&dlrreq=true&intflag=false');

$response = file_get_contents('https://push3.aclgateway.com/servlet/com.aclwireless.pushconnectivity.listeners.TextListener?userId=tialifalrt&pass=tialifalrt25&appid=tialifalrt&subappid=tialifalrt&contenttype=1&to=917021436294&from=TATALI&text=Thank%20you%20for%20registering.%20Sehat%20Ka%20Rakshakaran%20Workshop%20by%20Tata%20AIA%20Life%20Insurance%20cares%20for%20your%20all-round%20wellness.%20You%20will%20receive%20the%20event%20link%20here.&selfid=true&alert=1&dlrreq=true&intflag=false');

// $response = file_get_contents('https://push3.aclgateway.com/servlet/com.aclwireless.pushconnectivity.listeners.TextListener?userId=tialifalrt&pass=tialifalrt25&appid=tialifalrt&subappid=tialifalrt&contenttype=1&to=917021436294&from=TATALI&text=David%20Beckham%20and%20others%20will%20be%20live%20in%20just%20a%20few%20hours.%20Come%20join%20Sehat%20Ka%20Rakshakaran%20Workshop%20by%20Tata%20AIA%20Life%20Insurance%20here%3A%20https%3A%2F%2Fwww.youtube.com%2F&selfid=true&alert=1&dlrreq=true&intflag=false');
// $response = file_get_contents('https://push3.aclgateway.com/servlet/com.aclwireless.pushconnectivity.listeners.TextListener?userId=tialifalrt&pass=tialifalrt25&appid=tialifalrt&subappid=tialifalrt&contenttype=1&to=917021436294&from=TATALI&text=TATA%20AIA%20Life%20Sehat%20Ka%20Rakshakaran%20Workshop%2C%20where%20your%20loved%20stars%20discuss%20simple%20habits%20which%20keep%20them%20healthy.%20Click%20https%3A%2F%2Fwww.youtube.com%2F%20to%20view%20the%20event.&selfid=true&alert=1&dlrreq=true&intflag=false');
// $response = file_get_contents('https://push3.aclgateway.com/servlet/com.aclwireless.pushconnectivity.listeners.TextListener?userId=tialifalrt&pass=tialifalrt25&appid=tialifalrt&subappid=tialifalrt&contenttype=1&to=917021436294&from=TATALI&text=Thank%20you%20for%20being%20a%20part%20of%20the%20Sehat%20Ka%20Rakshakaran%20Workshop.%20Hope%20you%20had%20a%20great%20experience.%20For%20more%20from%20Tata%20AIA%20Life%20subscribe%20here%20https%3A%2F%2Fwww.youtube.com&selfid=true&alert=1&dlrreq=true&intflag=false');

// $response = file_get_contents('https://otp2.aclgateway.com/OTP_ACL_Web/OtpRequestListener?enterpriseid=taliotp&subEnterpriseid=taliotp&pusheid=taliotp&pushepwd=taliotp21&sender=TATALI&msisdn=7021436294&msgtext=Thank%20you%20for%20registering.%20Sehat%20Ka%20Rakshakaran%20Workshop%20by%20Tata%20AIA%20Life%20Insurance%20cares%20for%20your%20all-round%20wellness.%20You%20will%20receive%20the%20event%20link%20here.');

var_dump($response);

die('Working');
// $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://otp2.aclgateway.com/OTP_ACL_Web/OtpRequestListener?enterpriseid=taliotp&subEnterpriseid=taliotp&pusheid=taliotp&pushepwd=taliotp21&sender=TATALI&msisdn=7021436294&msgtext=1234%2520is%2520your%2520OTP%2520to%2520register%2520at%2520tataaiawellnessday.com.%2520Enter%2520the%2520OTP%2520to%2520register%2520yourself.",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 0,
//   CURLOPT_SSL_VERIFYPEER => false,
//   CURLOPT_FOLLOWLOCATION => true,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
// ));

// $response = curl_exec($curl);

// curl_close($curl);
// echo $response;

// var_dump($response);
