<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Users\IndexController;

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
    echo phpinfo();
});

Route::get('/users', IndexController::class);

Route::get('check', function () {
    $pdo = \Illuminate\Support\Facades\DB::table('example')->get();

    dd($pdo);
});
