<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/thank-you', function () {
//     return view('thankyou');
// });

// Route::get('/sehat', function () {
//     return view('sehat');
// });

Route::get('/sehat', function () {
    return view('sehat-live');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/terms-conditions', function () {
    return view('tnc');
});

Route::get('/thank-you', 'LeadController@thankyou')->name('sendMail');
// Route::get('/fireside', function () {
//     return view('fireside');
// });



Route::group(['prefix' => 'admin'], function () {

    Auth::routes();

});

// Route::get('send-mail', function () {
   
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
   
//     \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
//     dd("Email is Sent.");
// });
Route::get('/', 'LeadController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/send-mail', 'LeadController@sendMail')->name('sendMail');
// Route::get('/send-mail-check', 'LeadController@sendMailCheck')->name('sendMailCheck');
// Route::get('/thank-you', 'LeadController@thankyou')->name('thankyou');
Route::post('/get-leads', 'HomeController@getLeads')->name('getLeads');
Route::get('/all-leads', 'HomeController@allLeads')->name('allLeads');
Route::post('/save', 'LeadController@store')->name('store');
Route::get('/export', 'HomeController@export')->name('export');
// Route::post('/check-code', 'LeadController@validateCode')->name('validateCode');
// Route::post('/validate-pincode', 'LeadController@validatePincode')->name('validatePincode');
// Route::post('/send-sms', 'LeadController@sendSMS')->name('sendSMS');
// Route::get('/unsubscribe', 'LeadController@unsubscribe')->name('unsubscribe');
// Route::get('/{uuid}', 'LeadController@uuid')->name('uuid');
//Savings Account
//Brand Performance
// Route::resource('leads','LeadController');