<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashbord\adminIController;
use App\Http\Controllers\dashbord\adminContror;
use Illuminate\Routing\Route as RoutingRoute;

Route::get('/test2', function () {
    return view('dashbord.signup');
});


//******************** Admin profile */
Route::get('/blank',[adminIController::class,'adminprofile'])->name('blank');
Route::get('blank/{id}',[adminIController::class,'destroyAdmin'])->name('del');

//******************** Admin Profile**************

//Route::get('/admin',[adminIController::class,'index']);
Route::get('/admin',[adminIController::class,'show1']);
// Route::get('/n',[adminIController::class,'show2']);
//
// Route::get('/chart',[adminIController::class,'show']);
Route::get('/admindoners',[adminIController::class,'show']);
Route::get('/adminneeded',[adminIController::class,'show0']);

Route::get('admindoners/{id}',[adminIController::class,'edit'])->name('editform');
Route::get('admindoner/{id}',[adminIController::class,'edit1'])->name('dest');

Route::get('/messages',[adminIController::class,'message']);
// ******************/*To Do*/ ********************
// Route::get('/admin',[adminIController::class,'create']);
Route::post('/insert',[adminIController::class,'store'])->name('add-todo');
Route::get('delete/{id}',[adminIController::class,'destroy'])->name('destroy');
// ******************/To Do /********************



Route::get('/todotable',[adminIController::class,'show4']);



// *************************** sign up ***************************
Route::get('/signup',[adminIController::class,'createadmin'])->name('signup');
Route::post('/addAdmin',[adminIController::class,'storeAdmin'])->name('storeAdmin');
// ***************************// sign up ***************************


// *************************** LOGIN ***************************
Route::get('/loginAdmin',[adminIController::class,'showloginAdmin'])->name('loginAdmin');
Route::post('/checkAdmin',[adminIController::class,'loginAdmin'])->name('checkAdmin');
// ***************************// LOGIN ***************************


Route::get('/logoutAdmin',[adminIController::class,'logoutAdmin'])->name('logoutAdmin');



// Route::get('/test1', function () {
//     return view('dashbord.typography');
// });









// Route::get('/form',[adminIController::class,'']);
// Route::get('/button',[adminIController::class,'']);
// Route::get('/blank',[adminIController::class,'']);
// Route::get('/typography',[adminIController::class,'']);
// Route::get('/table',[adminIController::class,'']);





// Route::resource('/chart',[adminIController::class]);

// Route::resource('chart', adminIController::class);






// Route::get('/form', function () {
//     return view('dashbord.form');
// });

Route::get('/element', function () {
    return view('dashbord.element');
});



Route::get('/button', function () {
    return view('dashbord.button');
});

Route::get('/singlereport/{id}',[adminIController::class,'showreport'])->name('showreport');

Route::get('deleteneed/{id}',[adminIController::class,'deleteneed'])->name('deleteneed');




// deleteneed
// Route::get('/form', function () {
//     return view('dashbord.form');
// });
