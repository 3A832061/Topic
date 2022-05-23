<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\ActiveController;
use App\Http\Controllers\SheetMusicController;
use App\Http\Controllers\SheetRequController;
use App\Http\Controllers\AttendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\RecruitController;
use App\Http\Controllers\AccountantController;


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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);


Route::get('/',[HomeController::class,'index'])->name('index');

Route::prefix('calendar')->group(function(){
    Route::get('',[CalendarController::class,'index'])->name('calendars.index'); //顯示行事曆
    Route::get('/create/{month?}',[CalendarController::class,'create'])->name('calendar.create')->middleware('auth');
    Route::post('/',[CalendarController::class,'store'])->name('calendar.store')->middleware('auth');
    Route::get('/{id}/edit',[CalendarController::class,'edit'])->name('calendar.edit')->middleware('auth');
    Route::post('{id}',[CalendarController::class,'update'])->name('calendar.update')->middleware('auth');
    Route::delete('/{id}',[CalendarController::class,'destroy'])->name('calendar.destroy')->middleware('auth');
});

Route::prefix('posts')->group(function(){
    Route::get('/{tag?}',[PostController::class,'index'])->name('posts.index');
    Route::get('/create',[PostController::class,'create'])->name('posts.create')->middleware('auth');
    Route::post('/',[PostController::class,'store'])->name('posts.store')->middleware('auth');
    Route::get('/{id}/edit',[PostController::class,'edit'])->name('posts.edit')->middleware('auth');
    Route::post('{id}',[PostController::class,'update'])->name('posts.update')->middleware('auth');
    Route::delete('/{id}',[PostController::class,'destroy'])->name('posts.destroy')->middleware('auth');
    Route::get('/{id}/show',[PostController::class,'show'])->name('posts.show');
});

Route::prefix('teacher')->group(function(){
    Route::get('/',[TeacherController::class,'index'])->name('teacher.show');
    Route::get('/create',[TeacherController::class,'create'])->name('teacher.create')->middleware('auth');
    Route::post('/',[TeacherController::class,'store'])->name('teacher.store')->middleware('auth');
    Route::get('{id}/edit',[TeacherController::class,'edit'])->name('teacher.edit')->middleware('auth');
    Route::post('{id}',[TeacherController::class,'update'])->name('teacher.update')->middleware('auth');
});

Route::prefix('introduction')->group(function(){
    Route::get('/',[IntroductionController::class,'index'])->name('introduction.show');
    Route::get('/create',[IntroductionController::class,'create'])->name('introduction.create')->middleware('auth');
    Route::post('/',[IntroductionController::class,'store'])->name('introduction.store')->middleware('auth');
    Route::get('{id}/edit',[IntroductionController::class,'edit'])->name('introduction.edit')->middleware('auth');
    Route::post('{id}',[IntroductionController::class,'update'])->name('introduction.update')->middleware('auth');
});

Route::prefix('award')->group(function(){
    Route::get('/',[AwardController::class,'index'])->name('award.show');
    Route::get('/create',[AwardController::class,'create'])->name('award.create')->middleware('auth');
    Route::post('/',[AwardController::class,'store'])->name('award.store')->middleware('auth');
    Route::get('{id}/edit',[AwardController::class,'edit'])->name('award.edit')->middleware('auth');
    Route::post('{id}',[AwardController::class,'update'])->name('award.update')->middleware('auth');
    Route::delete('{id}',[AwardController::class,'destroy'])->name('award.destroy')->middleware('auth');
});

Route::prefix('active')->group(function(){
    Route::get('show/{show}',[ActiveController::class,'show'])->name('active.show');
    Route::get('create',[ActiveController::class,'create'])->name('active.create')->middleware('auth');
    Route::post('/',[ActiveController::class,'store'])->name('active.store')->middleware('auth');
    Route::get('{id}/edit',[ActiveController::class,'edit'])->name('active.edit')->middleware('auth');
    Route::post('{id}',[ActiveController::class,'update'])->name('active.update')->middleware('auth');
    Route::delete('{id}',[ActiveController::class,'destroy'])->name('active.destroy')->middleware('auth');
});

Route::prefix('sheet')->group(function(){
    Route::get('/',[SheetMusicController::class,'index'])->name('sheet.show');
    Route::get('show/{show}',[SheetMusicController::class,'show'])->name('sheet.detail');
    Route::get('create',[SheetMusicController::class,'create'])->name('sheet.create');
    Route::get('{id}/edit',[SheetMusicController::class,'edit'])->name('sheet.edit');
    Route::post('{id}',[SheetMusicController::class,'update'])->name('sheet.update');
});


Route::prefix('attend')->group(function(){
    Route::get('/',[AttendController::class,'index'])->name('attends.index'); //list
    Route::get('/create',[AttendController::class,'create'])->name('attends.create');
    Route::post('/',[AttendController::class,'store'])->name('attends.store');
    Route::get('{id}/edit',[AttendController::class,'edit'])->name('attends.edit');
});

Route::prefix('member')->group(function(){
    Route::get('/',[UserController::class,'edit'])->name('user.edit');
    Route::put('/{id}',[UserController::class,'update'])->name('user.update');
    Route::put('/{id}/admin',[UserController::class,'adminUpdate'])->name('user.adminUpdate');
    Route::get('/show',[UserController::class,'show'])->name('user.show')->middleware('auth');
});

/*未完成
Route::prefix('equipment')->group(function(){
    Route::get('/',[EquipmentController::class,'index'])->name('attends.index'); //list
    Route::get('/',[EquipmentController::class,''])->name('attends.create');
    Route::get('/',[EquipmentController::class,'edit'])->name('attends.edit');
});*/

Route::prefix('recruit')->group(function(){
    Route::get('/',[RecruitController::class,'index'])->name('recruit.index');
    Route::get('/create',[RecruitController::class,'create'])->name('recruit.create')->middleware('auth');
    Route::post('/',[RecruitController::class,'store'])->name('recruit.store')->middleware('auth');
    Route::get('{id}/edit',[RecruitController::class,'edit'])->name('recruit.edit')->middleware('auth');
    Route::post('{id}',[RecruitController::class,'update'])->name('recruit.update')->middleware('auth');
    Route::get('/show',[RecruitController::class,'show'])->name('recruit.show');
    Route::get('/list',[RecruitController::class,'list'])->name('recruit.list')->middleware('auth');
});

Route::prefix('accountant')->group(function(){
    Route::get('/',[AccountantController::class,'create'])->name('accountant.create')->middleware('auth');
    Route::get('/show',[AccountantController::class,'show'])->name('accountant.show')->middleware('auth');
});

