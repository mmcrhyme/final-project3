<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserprofileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/mentee', [UserprofileController::class, 'mentee'])->middleware(['auth'])->name('menteeprofiles');
Route::get('/mentor', [UserprofileController::class, 'mentor'])->middleware(['auth'])->name('mentorprofiles');
Route::get('/myprofile', [UserprofileController::class, 'myprofile'])->middleware(['auth'])->name('myprofiles');
// Route::get('/dashboard', [UserprofileController::class, 'mentee'])->middleware(['auth'])->name('dashboard');

//プロフィール追加 
Route::post('/userprofiles', [UserprofileController::class, "store"])->name('userprofile_store');

//プロフィール削除 
Route::delete('/userprofile/{userprofile}', [UserprofileController::class, "destroy"])->name('userprofile_destroy');

//プロフィール更新画面
Route::post('/myprofileedit/{profileId}', [UserprofileController::class, "myprofileedit"])->name('myprofileedit');

//プロフィール更新画面
Route::put('/userprofile/update/{profileId}', [UserprofileController::class, "update"])->name('userprofile_update');

/**
 * 「ログイン機能」インストールで追加されています 
 */
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
