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

use App\Assignment;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

            //usersProfileController
Route::resource('/profile', 'UsersProfileController');
Route::post('/profile/{profile}', 'UsersProfileController@update');
Route::post('/profile/{profile}/picture', 'UsersProfileController@picture')->name('profile.picture');



Route::resource('/result', 'ResultsController');




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
