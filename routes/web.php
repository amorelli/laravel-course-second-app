<?php

use Illuminate\Support\Facades\Route;

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
  return view('welcome');
});

// Route::get('/contact', function () {
//   return view('contact');
// });

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

Route::get('/reports', function () {
  return 'the secret reports';
})->middleware('can:view_reports');

Route::get('payments/create', 'PaymentsController@show')->middleware('auth');
Route::post('payments', 'PaymentsController@store')->middleware('auth');
Route::get('/notifications', 'UserNotificationsController@show')->middleware('auth');

Route::get('conversations', 'ConversationsController@index');
Route::get('conversations/{conversation}', 'ConversationsController@show');
Route::post('/best-replies/{reply}', 'ConversationsBestReplyController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
