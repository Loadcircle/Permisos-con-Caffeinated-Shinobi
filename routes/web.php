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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes

Route::middleware(['auth',])->group(function(){
    //roles
    Route::get('roles', 'RoleController@index')->name('roles.index')
            ->middleware('permissions:roles.index');

    Route::post('roles/store', 'RoleController@store')->name('roles.store')
            ->middleware('permissions:roles.create');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
            ->middleware('permissions:roles.create');

    Route::put('roles/{roles}', 'RoleController@update')->name('roles.update')
            ->middleware('permissions:roles.edit');

    Route::get('roles/{roles}', 'RoleController@show')->name('roles.show')
            ->middleware('permissions:roles.show');

    Route::delete('roles/{roles}', 'RoleController@destroy')->name('roles.destroy')
            ->middleware('permissions:roles.destroy');

    Route::get('roles/{roles}/edit', 'RoleController@edit')->name('roles.edit')
            ->middleware('permissions:roles.edit');

    //Productos

    Route::get('products', 'ProductController@index')->name('products.index')
            ->middleware('permissions:products.index');

    Route::post('products/store', 'ProductController@store')->name('products.store')
            ->middleware('permissions:products.create');

    Route::get('products/create', 'ProductController@create')->name('products.create')
            ->middleware('permissions:products.create');

    Route::put('products/{product}', 'ProductController@update')->name('products.update')
            ->middleware('permissions:products.edit');

    Route::get('products/{product}', 'ProductController@show')->name('products.show')
            ->middleware('permissions:products.show');

    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
            ->middleware('permissions:products.destroy');

    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
            ->middleware('permissions:products.edit');
            
    //Usuarios

    Route::get('users', 'UserController@index')->name('users.index')
            ->middleware('permissions:users.index');

    Route::put('users/{users}', 'UserController@update')->name('users.update')
            ->middleware('permissions:users.edit');

    Route::get('users/{users}', 'UserController@show')->name('users.show')
            ->middleware('permissions:users.show');

    Route::delete('users/{users}', 'UserController@destroy')->name('users.destroy')
            ->middleware('permissions:users.destroy');

    Route::get('users/{users}/edit', 'UserController@edit')->name('users.edit')
            ->middleware('permissions:users.edit');
});