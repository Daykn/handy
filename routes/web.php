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


Route::get('/', "IndexController@index"); //main page
Route::get('/news', 'NewsController@index'); //news page
Route::get('/projects', 'ProjectController@index'); //projects page
Route::get('/trainings', "TrainingController@index"); //trainings page
Route::get('/volunteer', "VolunteerController@index"); //volunteer page
Route::get('/education', "EducationController@index"); //edu page
Route::get('/competition', 'CompetitionController@index'); //comp page
Route::get('/reports', 'ReportController@index'); //report page
