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


/*
Route::get('/{data?}', function ($data='bar') {
    //return view('welcome');
    return $data;
});
*/

Route::get('/', [
   'as' => 'good',
    function(){
        return '제 이름은 good 입니다.';
    }

]);

Route::get('/good', function () {
    //return view('welcome');
    return redirect(route('good'));
});