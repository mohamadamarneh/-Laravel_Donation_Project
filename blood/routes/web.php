<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodDonerController;
use App\Http\Controllers\BloodDonerNeededController;
use App\Http\Controllers\BloodTypeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\login;
use App\Http\Controllers\RequestDonerController;
use App\Http\Controllers\catogryController;


/**********************  doner routs ************************ */
Route::resource('login', login::class);
Route::resource('doner', BloodDonerController::class);
Route::get('doneredit',[BloodDonerController::class, 'editprofile']);
Route::resource('request',RequestDonerController::class);
/**********************  doner routs ************************ */



Route::resource('patient', BloodDonerNeededController::class);

Route::resource('doner', BloodDonerController::class);
Route::resource('patient', BloodDonerNeededController::class);

Route::view('profile','registration_patient.profile_patient');











//***************** blood donor needed ********************** */
Route::get('patiantedit',[BloodDonerNeededController::class, 'edit']);
Route::view('reg2','registration_patient.register2');
Route::post('user', [BloodDonerNeededController::class, 'userLogin']);


//***************** blood donor needed end  ********************** */

//***************** catogry********************** */
Route::get('/catogryA',[catogryController::class, 'dataA']);
Route::get('/catogryAB',[catogryController::class, 'dataAB']);
Route::get('/catogryB',[catogryController::class, 'dataB']);
Route::get('/catogryO',[catogryController::class, 'dataO']);

//***************** catogry end ********************** */


//***************** home page ********************** */

Route::get('/', [BloodDonerController::class , 'alldoner'])->name('index');

//***************** home page ********************** */


Route::get('/feature', function () {
    return view('feature');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/courses', function () {
    return view('courses');
});
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/404', function () {
    return view('404');
});


//*************** contact ********************** */
Route::get('/contact',[ContactController::class,'create']);
Route::post('/contact',[ContactController::class,'store'])->name('add-store');
//*************** contact ********************** */

