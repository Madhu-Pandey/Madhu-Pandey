<?php

use App\Http\Controllers\AchiveController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmailSupportController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NoticeController;
use App\Models\Achievement;
use App\Models\Gallery;
use App\Models\Notice;
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




Route::post('contact/submit',[EmailSupportController::class,'create']);
Route::post('foooter/submit',[EmailSupportController::class,'index']);

Route::get('/', function () {
    $data['notice'] = Notice::all();
    $data['gallery'] = Gallery::select('*')->orderBy('seq_no','asc')->get();
    return view('index',$data);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/privacy_policy', function () {
    return view('privacy_policy');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/gallery', function () {
    $data = Gallery::select('*')->orderBy('id','desc')->get();
    if($data){
        return view('gallery')->with('gallery',$data);
    }
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/team_founders', function () {
    return view('team_founders');
});
Route::get('/achievements', function () {
    $data = Achievement::select('*')->orderBy('id','desc')->get();
    if($data){
        return view('achievements')->with('acheve',$data);
    }
});
Route::get('/programs', function () {
    return view('programs');
});
Route::get('/Physiotherapy', function () {
    return view('Physiotherapy');
});
Route::get('/email_temp', function () {
    return view('email_contact');
});
Route::get('/email_temp2', function () {
    return view('newsletter2');
});
Route::get('/notice_sample', function () {
    $data = Notice::all();
    return view('notice_carousel')->with('notice',$data);
});
Route::get('notice_view/{id}',[NoticeController::class,'show']);

Route::prefix('admin')->group( function() {
        Route::get('logout',[AdminController::class,'logout'])->middleware('checkLogin');
        Route::get('/login',[AdminController::class,'index'])->middleware('checkLogin');
        Route::post('/in',[AdminController::class,'store']);
        Route::get('register',[AdminController::class,'register'])->middleware('checkLogin');
        Route::post('/submit',[AdminController::class,'register_submit']);

    Route::middleware(['alreadyLogin'])->group(function (){

        Route::get('/dashboard',[AdminController::class,'dashboard']);
        Route::get('/profile',[AdminController::class,'account']);
        Route::prefix('enquiry')->group( function(){
            Route::get('/list',[EnquiryController::class,'index']);
            Route::get('/new',[EnquiryController::class,'create']);
            Route::get('/submit',[EnquiryController::class,'store']);
            Route::get('/update',[EnquiryController::class,'update']);
        });
        Route::prefix('gallery')->group( function(){
            Route::get('/list',[GalleryController::class,'index']);
            Route::get('/delete/{id}',[GalleryController::class,'destory']);
            Route::get('/new',[GalleryController::class,'edit']);
            Route::post('/submit',[GalleryController::class,'store']);
            Route::get('/update',[GalleryController::class,'update']);
        });
        Route::prefix('achievements')->group(function(){
            Route::get('/list',[AchiveController::class,'index']);
            Route::get('/delete/{id}',[AchiveController::class,'destory']);
            Route::get('/new',[AchiveController::class,'create']);
            Route::post('/submit',[AchiveController::class,'store']);
            Route::get('/update',[AchiveController::class,'update']);
        });
        Route::prefix('notice')->group(function(){
            Route::get('/list',[NoticeController::class,'index']);
            Route::get('/delete/{id}',[NoticeController::class,'destory']);
            Route::get('/new',[NoticeController::class,'create']);
            Route::post('/submit',[NoticeController::class,'store']);
            Route::get('/update',[NoticeController::class,'update']);
        });

    });
});
