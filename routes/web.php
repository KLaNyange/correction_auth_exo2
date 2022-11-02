<?php

use App\Models\Role;
use App\Models\User;
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
});

Route::get('/dashboard', function () {
    $admins = User::all()->where('role_id', 1);
    return view('dashboard', compact('admins'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/roles', function (){
    $roles = Role::all();
    return view('pages.roles', compact('roles'));
})->name('roles');

Route::get('/users', function (){
    $users = User::all()->where('role_id', '!=', 1);
    return view('pages.users', compact('users'));
})->name('users');

require __DIR__.'/auth.php';
