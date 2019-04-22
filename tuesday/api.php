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
Route::get('invoice-approval','InvoiceAwaitingApprovalController@showInvoiceData');
Route::get('invoice/{id}','InvoiceAwaitingApprovalController@showInvoiceDetail');
Route::get('item/{id}','InvoiceAwaitingApprovalController@showItem');
Route::post('invoice/{status}/{id}', 'InvoiceAwaitingApprovalController@invoiceApprovalStatusUpdate');
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
Route::get('show-all-invoice', 'CreateInvoiceController@showAllInvoice');
Route::get('draft-invoice', 'CreateInvoiceController@showDraftInvoice');
Route::get('draft-invoice-detail/{id}', 'CreateInvoiceController@showInvoiceDetail');
Route::get('delete-invoice/{id}', 'CreateInvoiceController@deleteInvoiceAndItem');
Route::post('update-invoice', 'CreateInvoiceController@updateInvoiceDetail');
