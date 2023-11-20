<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;


Route::get(uri: 'front_agency', action: function(){
    return view(view: 'front-agency');
});

// Route::get(uri:'home', action: function(){
//     return view(view: 'front_home');
// });

Route::get('/',action: [FrontPageController::class,'index'])->name(name: 'front.home');
Route::get('/about',action: [FrontPageController::class,'about'])->name(name: 'front.about');
Route::get('/services',action: [FrontPageController::class,'services'])->name(name: 'front.services');
Route::get('/packages',action: [FrontPageController::class,'packages'])->name(name: 'front.packages');
Route::get('/destination',action: [FrontPageController::class,'destination'])->name(name: 'front.destination');
Route::get('/booking',action: [FrontPageController::class,'booking'])->name(name: 'front.booking');
Route::get('/guides',action: [FrontPageController::class,'guides'])->name(name: 'front.guides');
Route::get('/testimonial',action: [FrontPageController::class,'testimonial'])->name(name: 'front.testimonial');
Route::get('/page',action: [FrontPageController::class,'page'])->name(name: 'front.page');
Route::get('/contact',action: [FrontPageController::class,'contact'])->name(name: 'front.contact');
