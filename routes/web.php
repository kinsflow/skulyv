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

use Illuminate\Support\Facades\Auth;
use skulyv\ClassName;
use skulyv\User;
use skulyv\Profile;
use skulyv\Assignment;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signup', function()
{
    $classes = ClassName::all('name', 'id');
        // dd($classes);
        return view('auth.signup' , compact('classes'));
})->name('signup');

Route::post('/registration', function(Request $request) {
     $validator =  $request->validate([
         'first_name' => ['required', 'string', 'max:255'],
         'last_name' => ['required', 'string', 'max:255'],
         'middle_name' => ['required', 'string', 'max:255'],
         'role' => ['required', 'integer', 'max:20'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'class_id' => ['required', 'integer', 'max:255'],
         'password' => ['required', 'string', 'min:8', 'confirmed'],
     ]);

    /** @var auth user $user */
    if($validator){
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'role' => $request->role,
            'email' => $request->email,
            'class_id' => $request->class_id,
            'password' => Hash::make($request->password),

        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'class_id' => $request->class_id,
        ]);

    }
            if($user && $profile)
        {
           $auth = Auth::attempt(['email' => $user->email, 'password' => $request->password]);
            if($auth)
            {
                $role = Auth::user()->role;

                // Check user role
                switch ($role) {
                    case 1:
                        return redirect('/admin');
                        break;
                    case 0:
                        return redirect('/home');
                        break;
                    default:
                        return redirect('/login');
                        break;
                }
            }else
            {
                return redirect('/login');
            }
        }

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
