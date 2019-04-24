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

use skulyv\Assignment;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});
//Route::post('/register', 'Auth/HomeController@passData');
Auth::routes();

            //usersProfileController
Route::resource('/profile', 'UsersProfileController');
Route::post('/profile/{profile}', 'UsersProfileController@update');
Route::post('/profile/{profile}/picture', 'UsersProfileController@picture')->name('profile.picture');
Route::resource('/admin', 'AdminUsersController');
Route::resource('/admin/library', 'AdminLibraryController');
Route::get('/admin/doc/all', 'AdminLibraryController@test')->name('indexes');
Route::post('/admin/library/{library}', 'AdminLibraryController@destroy');
Route::post('/auth/news', 'newsController@news')->name('store.news');





Route::get('/im/all', 'AllController@result')->name('results');
Route::get('/student', 'AllController@student')->name('student');


Route::resource('/result', 'ResultsController');
Route::resource('/comment', 'CommentController');
Route::get('comment/{comment}', 'CommentController@shart');
Route::post('/{id}/comment', 'CommentController@comment');




//medicalProfileController
Route::resource('/medical', 'medicalController');



//newsProfileController
Route::resource('/news', 'newsController');



Route::get('/download/{id}', function($id) {
    $check = Assignment::find($id);
//    dd($check);
    $file = public_path() . '/files/'.$check->file_path;
    $headers = array(
        'Content-Type : application.docx',

    );

    //dd(time() . $check->file_path);
    return Response::download($file, time() . $check->file_path, $headers);
})->name('download');

Route::get('/library', 'libraryController@index')->name('library.index');

Route::get('/home', 'HomeController@index')->name('home');
