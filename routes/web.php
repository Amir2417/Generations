<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StartGenerationController;

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
Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout');
Route::get('admin/profile/{id}',[AdminController::class,'profile_view'])->name('profile.view');
Route::POST('general/profile/update/{id}',[AdminController::class,'general_profile_update'])->name('general.profile.update');

//First Generation
Route::get('add/member',[StartGenerationController::class,'create'])->name('add.member');
Route::post('first_generation/store',[StartGenerationController::class,'store']);
Route::get('view_first_generation',[StartGenerationController::class,'view_first_generation']);
Route::get('first_generation/edit/{id}',[StartGenerationController::class,'edit']);
Route::post('first_generation/update/{id}',[StartGenerationController::class,'update']);
Route::get('first_generation/delete/{id}',[StartGenerationController::class,'delete']);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('backend.index',compact('user'));
    })->name('dashboard');
});
