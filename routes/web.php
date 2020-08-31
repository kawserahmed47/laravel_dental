<?php

use Illuminate\Support\Facades\Route;

//Front Controller/Home Controller 
Route::get('/','FrontController@index')->name('index');


//About Controller
Route::get('/drProfile','AboutController@drProfile')->name('drProfile');
Route::get('/team','AboutController@team')->name('team');
Route::get('/gallery','AboutController@gallery')->name('gallery');



//Service Controller
Route::get('/allServices','ServiceController@allServices')->name('allServices');
Route::get('/serviceDetails','ServiceController@serviceDetails')->name('serviceDetails');


//Patient Controller
Route::get('/newPatient','PatientController@newPatient')->name('newPatient');
Route::get('/schedules','PatientController@schedules')->name('schedules');


//Blog Controller
Route::get('/blogs','BlogController@blogs')->name('blogs');
Route::get('/blogDetails','BlogController@blogDetails')->name('blogDetails');


//Contact Controller
Route::get('/contact','ContactController@contact')->name('contact');


//Appointment Controller

Route::post('/insertAppointment','AppointmentController@insertAppointment')->name('insertAppointment');
Route::get('/appointmentList','AppointmentController@appointmentList')->name('appointmentList');


// Admin-Dashboard
Route::get('/dashboard','DashboardController@index')->name('dashboard');
Route::get('/slider','DashboardController@slider')->name('slider');

