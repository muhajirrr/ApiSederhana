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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', 'EmployeeApiController@index')->name('api.employee');
Route::get('/employee/{id}', 'EmployeeApiController@show')->name('api.employee.show');
Route::post('/employee', 'EmployeeApiController@store')->name('api.employee.create');
Route::put('/employee/{id}', 'EmployeeApiController@update')->name('api.employee.update');
Route::delete('/employee/{id}', 'EmployeeApiController@destroy')->name('api.employee.destroy');