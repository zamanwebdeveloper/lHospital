<?php

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

Route::get('/', 'PageController@index');
Route::get('/add-doctor', 'PageController@add_doctor');
Route::get('/book-appointment', 'PageController@book_appointment');
Route::get('/doctor-schedule', 'PageController@doctor_schedule');
Route::get('/profile', 'PageController@doctor_profile');
Route::get('/doctors', 'PageController@doctors');
Route::get('/patients', 'PageController@patients');

