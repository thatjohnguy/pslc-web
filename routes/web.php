<?php

use App\Http\Controllers\DisplayPicController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NoneController;
use App\Http\Controllers\VerifyController;
use App\Http\Controllers\DashController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/info', function () {
    return view('welcome');
})->name('info');
Route::get('/profile', function () {
    return view('welcome');
})->name('profile');




Route::get('/wait', function () {
    return view('wait');
});

Route::get('/dashboard',[DashController::class, 'index'])->middleware(['auth'])->name('dashboard');


// Route::get('/members', function () {
//     return view('members');
// })->name('members');
Route::get('/members',[MemberController::class, 'index'])->name('members');
Route::get('/none',[NoneController::class, 'index'])->name('none');

Route::get('/verify',[VerifyController::class,'ShowAllPending'])->name('verify')->middleware('check_admin');

Route::put('/verify/member',[VerifyController::class,'validate_member'])->name('verify.now');


Route::get('member/profile',[MemberController::class,'edit'])->middleware('auth')->name('member.edit-profile');
Route::put('member/profile',[MemberController::class,'update'])->name('member.update-profile');

Route::post('member/dp',[DisplayPicController::class,'store'])->name('member.dp');

require __DIR__.'/auth.php';
