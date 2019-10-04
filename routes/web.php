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
    return view('map');
});

Route::get('/migrate', function () {
    // return view('welcome');
	Artisan::call('migrate');
});

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');
Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');
Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate');
Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');
Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback');
Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
);

Route::get('/home', 'HomeController@index');

Auth::routes();


Route::get('/demo3', function () {
    return view('demo3');
});


//Setup route example
// Route::get('/key',  function($key = null)
// {
//     if($key == "appSetup_key"){
//     // try {
//     //   echo '<br>init migrate:install...';
//     //   Artisan::call('migrate');
//     //   echo 'done migrate:install';
      
//     //   echo '<br>init with Sentry tables migrations...';
//     //   Artisan::call('migrate', [
//     //     '--package'=>'cartalyst/sentry'
//     //     ]);
//     //   echo 'done with Sentry';
//     //   echo '<br>init with app tables migrations...';
//     //   Artisan::call('migrate', [
//     //     '--path'     => "app/database/migrations"
//     //     ]);
//     //   echo '<br>done with app tables migrations';
//     //   echo '<br>init with Sentry tables seader...';
//     //   Artisan::call('db:seed');
//     //   echo '<br>done with Sentry tables seader';
//     // } catch (Exception $e) {
//     //   Response::make($e->getMessage(), 500);
//     // }
//   }else{
//     App::abort(404);
//   }
// }
// }));








Route::resource('projects', 'projectController');

Route::resource('tasks', 'taskController');