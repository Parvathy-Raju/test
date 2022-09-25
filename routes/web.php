<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\InputFieldController;

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

Route::get('forms', 'FormController@index')->name('forms.index');
  
Route::get('forms/create-step-one', 'FormController@createStepOne')->name('forms.create.step.one');
Route::post('forms/create-step-one', 'FormController@postCreateStepOne')->name('forms.create.step.one.post');
  
Route::get('forms/create-step-two', 'FormController@createStepTwo')->name('forms.create.step.two');
Route::post('forms/create-step-two', 'FormController@postCreateStepTwo')->name('forms.create.step.two.post');
  
Route::get('forms/create-step-three', 'FormController@createStepThree')->name('forms.create.step.three');
Route::post('forms/create-step-three', 'FormController@postCreateStepThree')->name('forms.create.step.three.post');

Route::get('forms/input-fields', 'FormController@inputFields')->name('forms.input.fields');
Route::get('forms/input-fields', 'FormController@store')->name('forms.input.fields');


Route::get('add-remove-multiple-input-fields', [InputFieldController::class, 'index']);
Route::post('add-remove-multiple-input-fields', [InputFieldController::class, 'store']);

