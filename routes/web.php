<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegRequestController;
use App\Http\Controllers\CompositionController;
use App\Http\Controllers\ContestController;

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

//маршруты для заявок на регистрацию
Route::controller(RegRequestController::class)->group(function () {
    Route::post('/requestRegistration', 'createRequest');
    Route::get('/getTurnRequest', 'getTurnRequest');
    Route::post('/saveRequest', 'save');
});

//маршруты для произведений
Route::controller(CompositionController::class)->group(function (){
    Route::post('/composition', 'getArticle');
    Route::post('/compositionEdit', 'editComposition');
    Route::post('/addNewComposition', 'addComposition');
    Route::get('/getAllStyles', 'getAllStyles');
    Route::post('/deleteComposition', 'deleteComposition');
});

//маршруты для конкурсов
Route::controller(ContestController::class)->group(function (){
    Route::get('/getFormComposition', 'getFormComposition');
    Route::get('/getNameContests', 'getContestsList');
    Route::get('/getAllContests', 'getAllContests');
    Route::post('/setNewContest', 'setNewContest');
    Route::post('/reqReadyCompCont', 'reqReadyCompCont');
});

Route::get('/{vue_capture?}', function () {
    return view('app');
})->where('vue_capture', '[\/\w\.-]*');

Route::post('/connection', [\App\Http\Controllers\MailController::class,
    'send', function(Request $request){}]);
