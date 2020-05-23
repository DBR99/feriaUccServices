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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('visitor','VisitorController@getVisitors')->name('getVisitors');
Route::get('formationLevel','FormationLevelController@getFormationLevels')->name('getFormationLevels');
Route::get('program','ProgramController@getPrograms')->name('getPrograms');

Route::post('visitor','VisitorController@add')->name('addVisitor');
Route::post('formationLevel','FormationLevelController@add')->name('addFormationLevel');
Route::post('program','ProgramController@add')->name('addProgram');

Route::get('formationLevel/{id}','FormationLevelController@get')->name('getFormationLevel');
