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
//Dashboard
Route::get('/', 'PageController@index');

Route::get('/doctor-schedule', 'PageController@doctor_schedule');
Route::get('/book-appointment', 'PageController@book_appointment');

Route::get('/add-doctor', 'PageController@add_doctor');
Route::get('/profile', 'PageController@doctor_profile');
Route::get('/doctors', 'PageController@doctors');

Route::get('/patients', 'PageController@patients');
Route::get('/add-patient', 'PageController@add_patient');
Route::get('/patient-profile', 'PageController@patient_profile');
Route::get('/patient-invoice', 'PageController@patient_invoice');

Route::get('/payments', 'PageController@payments');
Route::get('/add-payments', 'PageController@add_payments');

Route::get('/reports', 'PageController@reports');

Route::get('/widgets', 'PageController@widgets');

// Route::get('/widgets', 'PageController@widgets');


