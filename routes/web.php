<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AssetController;
use App\Http\Controllers\AuthController;

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

// Authentication
Route::controller(AuthController::class)->group(function() {
    // Login
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'loginStore');

    // Register
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerStore');

    // Logout
    Route::post('/logout', 'logout')->name('logout');
})->middleware('guest');

Route::middleware(['auth'])->group(function ()
{
    // Asset
    Route::resource('asset', AssetController::class, [
        'names' => [
            'index'   => 'asset.index',
            'store'   => 'asset.store',
            'update'  => 'asset.update',
            'destroy' => 'asset.delete'
        ]
    ]);
});

Route::get('/', function()
{
    return redirect('/asset');
});

