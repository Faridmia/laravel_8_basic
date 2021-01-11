<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PostsController;

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

//Route::get('testmessage/hello','MainController@sayHi');

// Route::get('/hello',function(){
//     echo "hello world";
// });
//Route::get('registration/create', 'RegistrationController@create');
//Route::get('hello/world','MainController@sayHi');
Route::get('/',[MainController::class,'main']);
Route::get('/features',[MainController::class,'features']);

Route::get('/contact',[MainController::class,'contact']);
Route::get('/allPeople',[MainController::class,'allPeople']);
Route::get('/test',[MainController::class,'testModel']);
//Route::get('/hello/{anyname}',function($anyname){
//     //echo "Your name is {$anyname}";
//     return view('info',[
//         'name' => $anyname,
//         'time' => time()
//     ]);
// });

// Route::post('/say',function(Request $request){
//     $newName = $request->post('name');
//     //$all = $request->all();
//     return view('info',[
//         'name' => $newName,
//         'time' => time()
//     ]);
// });


Route::get('/form',[FormController::class,'displayForm'])->name('form.create');
Route::post('/save',[FormController::class,'saveForm'])->name('form.save');

Route::get('/', [PostsController::class,'createPost'])->name('posts.create');
