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


Route::get('/', function () {
    return view('errors.503');

});


Route::get('/', function () {
    return view('welcome')->with(
        [
            'itemCount' => 3,
            'items' => [1,2,3]

        ]

    );

});
*/

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});

Route::get('/greeting/{name?}/{sex?}', function ($name = 'KIM', $sex = 'male') {
    $data = [
        'name' => $name,
        'sex' => $sex
    ];

    return view('greeting', $data);
})->name('names');


Route::get('/mater', function () {
    return view('welcome');

});

Route::get('/blade', function () {
    $photos = [
        [
            'path' => 'http://news20.busan.com/content/image/2016/02/01/20160201000063_0.jpg'
        ],
        [
            'path' => 'http://cfile6.uf.tistory.com/image/213A043856D08BD612B32D'
        ],
        [

        ]
    ];
    return view('home', ['photos' => $photos]);
});

Route::get('users',function(){
    $users=DB::table('users')->get();
    return view('users.index',['users' => $users]);
});

Route::get('/users/{id}',function ($userId){
    $user=DB::table('users')->where('id',$userId)->first();
    return view('users.show',['user' => $user]);
})->name('profile');

Auth::routes();

Route::get('/home', 'HomeController@index');
