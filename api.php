<?php

use Illuminate\Http\Request;

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
Route::get('reviewexpense','ReviewExpensesController@showData');
Route::post('expensedeclined/{ReviewExpense}/{id}', 'ReviewExpensesController@update');
Route::post('approvedExpense/{ReviewExpense}/{id}', 'ReviewExpensesController@approvedExpense');
