<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('user')
    ->prefix('user')
    ->group(__DIR__ . '/UserRoute.php');

Route::name('admin')
    ->prefix('admin')
    ->group(__DIR__ . '/AdminRoute.php');

Route::name('post')
    ->prefix('post')
    ->group(__DIR__ . '/PostRoute.php');
