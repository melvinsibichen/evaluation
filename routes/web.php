<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\facultycontroller;
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

Route::get('/signin',[userController::class , 'create' ] );
Route::post('/userview',[userController::class,'store']);

Route::get('/',[userController::class,'login'])->name('login');
Route::post('/logs',[userController::class,'logs']);
Route::get('/userlogout',[userController::class , 'logout' ] );

Route::get('/bbaevaluation',[userController::class , 'bbaevaluation' ] );
Route::get('/bcaevaluation',[userController::class , 'bcaevaluation' ] );
Route::get('/bcomevaluation',[userController::class , 'bcomevaluation' ] );
Route::get('/bswevaluation',[userController::class , 'bswevaluation' ] );
Route::get('/viewresult',[userController::class , 'viewresult' ] );

Route::post('/grade/{id}',[userController::class,'grade']);


Route::get('/admin',[adminController::class , 'create' ] );
Route::post('/addfaculty',[adminController::class,'store']);


Route::post('/alogs',[adminController::class , 'check' ] );
Route::get('/lgout',[adminController::class , 'adminlogout' ] );
Route::post('/upload',[adminController::class,'upload']);

Route::get('/adminhome',[adminController::class , 'adminhome' ] );

Route::get('/adminlogin',[adminController::class , 'adminlogin' ] );

Route::get('/facultyview',[adminController::class , 'index' ] );


Route::post('/flogs',[facultycontroller::class,'check']);
Route::get('/logout',[facultycontroller::class , 'logout' ] );

Route::get('/facultylogin',[facultycontroller::class , 'facultylogin' ] );
Route::get('/facultyh',[facultycontroller::class , 'facultyh' ] ); 

Route::get('/fdelete/{id}',[facultycontroller::class , 'fdelete' ] );

Route::get('/fedit/{id}',[facultycontroller::class , 'fedit' ] );
Route::post('/fupdate',[facultycontroller::class,'fupdate']);

Route::get('/qedit/{id}',[facultycontroller::class , 'qedit' ] );
Route::post('/qupdate',[facultycontroller::class,'qupdate']);
Route::get('/qdelete/{id}',[facultycontroller::class , 'qdelete' ] );


Route::get('/addquestion',[facultycontroller::class , 'addquestion' ] );
Route::post('/addque',[facultycontroller::class,'store']);

Route::get('/fviewquestion',[facultycontroller::class , 'fviewquestion' ] );
Route::get('/facultyhome',[facultycontroller::class , 'getfile' ] );


 


Route::get("/home",function(){
    return view("home");
});

Route::get("/signin",function(){
    return view("signin");
});

Route::get("/theme",function(){
    return view("theme");
});

Route::get("/course",function(){
    return view("course");
});

Route::get("/submitted",function(){
    return view("submitted");
});



Route::get("/resultpublish",function(){
    return view("resultpublish");
});

Route::get("/aboutus",function(){
    return view("aboutus");
});

Route::get("/contactus",function(){
    return view("contactus");
});






    




