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

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('/', function () {
    return view('index');
})->name('index');

Route::post('/user/sentmessage',['uses'=>'UserController@message']);

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth'],function (){

   Route::get('/dashboard','HomeController@index')->name('dashboard');

    Route::get('/users','UserController@index')->name('users');

    Route::get('/skills','SkillController@index')->name('skills');

    Route::post('/skill/create','SkillController@store')->name('add.skill');

   Route::get('/user/profile',['uses'=>'ProfileController@index','as'=>'profile']);

    Route::get('/user/education',['uses'=>'ProfileController@education','as'=>'education']);

    Route::post('/user/education/addsslc',['uses'=>'ProfileController@addsslc','as'=>'add.sslc']);

    Route::patch('/user/education/updatesslc/',['uses'=>'ProfileController@updatesslc','as'=>'update.sslc']);

    Route::post('/user/education/addpu',['uses'=>'ProfileController@addpu','as'=>'add.pu']);

    Route::patch('/user/education/updatedegree',['uses'=>'ProfileController@updatedegree','as'=>'update.degree']);

    Route::post('/user/education/adddegree',['uses'=>'ProfileController@adddegree','as'=>'add.degree']);

    Route::patch('/user/education/updatepu',['uses'=>'ProfileController@updatepu','as'=>'update.pu']);

    Route::patch('/user/education/updatepg',['uses'=>'ProfileController@updatepg','as'=>'update.pg']);

    Route::post('/user/education/addpg',['uses'=>'ProfileController@addpg','as'=>'add.pg']);

   Route::patch('/user/profile/update',['uses'=>'ProfileController@update','as'=>'profile.update']);

   Route::get('/user/view/{id}',['uses'=>'ProfileController@view','as'=>'user.view']);

   Route::get('/user/remove/{id}',['uses'=>'UserController@destroy','as'=>'user.remove']);

});
