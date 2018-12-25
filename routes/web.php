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
    if(auth()->check()){
        return redirect()->route('home');
    }

    return redirect()->route('login');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::view('/{path?}', 'home');

Route::get('/knowledge_base','Api\KnowledgeBaseController@knwoledge_base');
Route::get('/edit_knowledge_base','Api\KnowledgeBaseController@edit');
Route::get('/knowledge_base/show/{id}','Api\KnowledgeBaseController@show');
Route::post('/add_knowledge_base','Api\KnowledgeBaseController@store');
//Route::post('/delete_knowledge_base','Api\KnowledgeBaseController@destory');

Route::get('/role','Api\RoleController@list_role');
Route::post('/add_role','Api\RoleController@store');
Route::post('/update_role','Api\RoleController@update');
Route::post('/delete_role','Api\RoleController@destory');

Route::get('/api/user','Api\UserController@list_user');
Route::get('/show_user/{id}','Api\UserController@show');
Route::post('/add_user','Api\UserController@store');
Route::post('/update_user','Api\UserController@update');
Route::post('/delete_user','Api\UserController@destory');

