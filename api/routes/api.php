<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
//use App\Http\Controllers\UserController;
//use App\Http\Controllers\ArticalController;

use App\Http\Controllers\ChangeController;



// Public Routes
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::get('/students/search/{city}', [StudentController::class, 'search']);
Route::get('/students', [StudentController::class, 'searchblog']);

//Route::get('students/pagination',[ArticleController::class,'pagination']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

//protected
Route::middleware(['auth:sanctum'])->group(function(){
      
      Route::post('/students', [StudentController::class, 'store']);
      Route::put('/students/{id}', [StudentController::class, 'update']);
      Route::delete('/students/{id}', [StudentController::class, 'destroy']);
    
      Route::post('/logout', [UserController::class, 'logout']);
      Route::post('/change/change-password', [ChangeController::class, 'change_password'])->middleware('auth:sanctum');
    });

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/students', function(){
//     return 'all student info';
// });
// Public Routes
// Route::get('/students', [StudentController::class, 'index']);
// Route::get('/students/{id}', [StudentController::class, 'show']);
// Route::post('/students', [StudentController::class, 'store']);
// Route::put('/students/{id}', [StudentController::class, 'update']);
// Route::delete('/students/{id}', [StudentController::class, 'destroy']);
// Route::get('/students/search/{city}', [StudentController::class, 'search']);

//protected Routers
// Route::middleware('auth:sanctum')->get('/students', [StudentController::class, 'index']);
// Route::middleware('auth:sanctum')->get('/students/{id}', [StudentController::class, 'show']);

//Protected
// Route::middleware(['auth:sanctum'])->group(function(){
//   Route::get('/students', [StudentController::class, 'index']);
//   Route::get('/students/{id}', [StudentController::class, 'show']);
//   Route::post('/students', [StudentController::class, 'store']);
//   Route::put('/students/{id}', [StudentController::class, 'update']);
//   Route::delete('/students/{id}', [StudentController::class, 'destroy']);
//   Route::get('/students/search/{city}', [StudentController::class, 'search']);
//   Route::post('/logout', [UserController::class, 'logout']);
// });

