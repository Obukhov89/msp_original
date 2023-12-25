<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegRequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app');
});

Route::post('/login', [\App\Http\Controllers\UserController::class, 'authenticate',
    function(Request $request){ return $request->user(); }]);


Route::controller(RegRequestController::class)->group(function () {
    Route::post('/requestRegistration', 'createRequest');
    Route::get('/getTurnRequest', 'getTurnRequest');
    Route::post('/saveRequest', 'save');
});

Route::get('/{vue_capture?}', function () {
    return view('app');
})->where('vue_capture', '[\/\w\.-]*');

Route::post('/connection', [\App\Http\Controllers\MailController::class,
    'send', function(Request $request){}]);
