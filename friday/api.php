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
Route::get('index', 'ExpenseAccountController@index');
Route::post('status-update/{id}/{status}', 'ExpenseAccountController@statusupdate');
Route::post('save-expense','CreateExpenseController@save');
Route::get('show-account','CreateExpenseController@showAccount');
Route::post('status-update/{id}/{status}', 'ExpenseAccountController@statusUpdate');
Route::get('delete-account/{id}', 'ExpenseAccountController@destroy');
Route::post('save-account', 'ExpenseAccountController@save');
Route::post('signup', 'SignUpController@store');
Route::get('expense', 'ExpensePaymentController@show');
Route::post('save-expense-payment','ExpensePaymentController@saveExpensePayment');
Route::get('index', 'ExpenseAccountController@index');
Route::get('show-image/{image}','ExpenseClaimProfileController@showImage');
Route::get('get-data/{id}', 'ExpensePaymentController@search');
Route::post('statusupdate', 'ExpenseAccountController@statusupdate');
Route::post('login', 'SigninController@AuthenticateUser');
Route::post('reset-password','ForgotPasswordController@resetPassword');
Route::post('forgot-password','ForgotPasswordController@sendEmail');
Route::get('review-expense','ReviewExpenseController@showExpenseData');
Route::get('detail-of-expense/{id}','ReviewExpenseController@expenseDetail');
Route::post('expense-approval/{ReviewExpense}/{id}', 'ReviewExpenseController@reviewExpenseApproval');
Route::get('show-image/{image}','ReviewExpenseController@showImage');
Route::post('create-invoice','CreateInvoiceController@addInvoice');
Route::get('invoice-payment','InvoiceAwaitingPaymentController@showInvoicePaymentData');
Route::get('pay-invoice/{id}','InvoiceAwaitingPaymentController@showInvoicePaymentDetail');
Route::post('save-invoice-payment','InvoiceAwaitingPaymentController@saveInvoicePayment');
Route::post('make-payment/{payStatus}/{id}', 'InvoiceAwaitingPaymentController@makePayment');


