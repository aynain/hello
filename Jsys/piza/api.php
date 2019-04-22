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
Route::get('reviewexpense','ReviewExpenseController@showExpenseData');
Route::get('detailofexpense/{id}','ReviewExpenseController@expenseDetail');
Route::post('expensedeclined/{ReviewExpense}/{id}', 'ReviewExpenseController@declineExpense');
Route::post('approvedExpense/{ReviewExpense}/{id}', 'ReviewExpenseController@approvedExpense');
Route::get('showImage/{image}','ReviewExpenseController@showImage');
