<?php

Route::get('/', ['as' => '/', 'uses' => 'FrontendController@index']);

Route::get('/my/todos', ['as' => 'my-todos', 'uses' => 'FrontendController@todos']);

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/todos', ['as' => 'todos', 'uses' => 'TodosController@index']);

	Route::post('/todo/save', ['as' => 'save-todo', 'uses' => 'TodosController@save']);

	Route::get('/todo/make/done/{id}', ['as' => 'mark-done', 'uses' => 'TodosController@markDone']);

	Route::get('/logout', function(){
	    Session::flush();
	    Auth::logout();
	    return Redirect::to("/login")
	      ->with('message', array('type' => 'success', 'text' => 'You have successfully logged out'));
	});
});



