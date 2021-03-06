<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\User;
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
    return view('inicio/index');
});

Route::get('/Login', function () {
    return view('inicio.login');
});

Route::get('/home', function () {
    return view('Dashboard.home');
})->name('Dashboard.home');



Route::get('students', function () {
    // $students = User::all();
	if(Auth::check())
	{
    $students = User::where('IsAlumno','1')->where('IsActivo', '1')->orderBy('created_at', 'desc')->get();
    return view('students.index', compact('students'));
	}
	else
	{
		return view('auth.login');
	}
	
})->name('students.index');





Route::get('students/create', function () {
	if(Auth::check())
	{
    return view('students.create');
	}
	else
	{
		return view('auth.login');
	}
})->name('students.create');





Route::post('students', function (Request $request ) {
    //  $request->all();
     $newStudent = new User;
     $newStudent -> name = $request -> input('name');
     $newStudent -> email = $request -> input('email');
     $newStudent -> password = Hash::make($request -> input('password'));
     $newStudent -> IsAlumno = 1;
     $newStudent -> IsActivo = true;
     $newStudent -> save();

     return redirect()->route('students.index')->with('info','Alumno creado correctamente.');
})->name('students.store');




Route::delete('students/{id}', function ($id) {
    $student = User::findOrFail($id);
    $student -> IsActivo = 0;
    $student -> save();
    return redirect()->route('students.index')->with('info','Alumno dado de baja correctamente.');
})->name('students.destroy');


Route::get('students/{id}/edit', function ($id) {
	if(Auth::check())
	{
    $student = User::findOrFail($id);
    return view('students.edit', compact('student'));
	}
	else
	{
		return view('auth.login');
	}
})->name('students.edit');

Route::put('/students/{id}', function (Request $request, $id) {
    $student = User::findOrFail($id);
    $student -> name = $request -> input('name');
    $student -> email = $request -> input('email');
    $student -> save();
    return redirect()->route('students.index')->with('info','Alumno actualizado correctamente.');
})->name('students.update');


Route::get('teachers', function () {
	if(Auth::check())
	{
    // $students = User::all();
    $teachers = User::where('IsAlumno','0')->where('IsActivo', '1')->orderBy('created_at', 'desc')->get();
    return view('teachers.index', compact('teachers'));
	}
	else
	{
		return view('auth.login');
	}
})->name('teachers.index');

Route::get('teachers/create', function () {
	if(Auth::check())
	{
    return view('teachers.create');
	}
	else
	{
		return view('auth.login');
	}
})->name('teachers.create');

Route::post('teachers', function (Request $request ) {
    //  $request->all();
     $newStudent = new User;
     $newStudent -> name = $request -> input('name');
     $newStudent -> email = $request -> input('email');
     $newStudent -> password = $request -> input('password');
     $newStudent -> IsAlumno = 0;
     $newStudent -> IsActivo = true;
     $newStudent -> save();

     return redirect()->route('teachers.index')->with('info','Profesor creado correctamente.');
})->name('teachers.store');

Route::get('/ClaseCalculo', function () {
	if(Auth::check())
	{
    return view('clases.ClaseCalculo');
	}
	else
	{
		return view('auth.login');
	}
})->name('clases.ClaseCalculo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
