<?php
use App\Http\Controllers\LikeController;

// Route::resource('/question', [QuestionController::class]);

Route::resource('/question', '\App\Http\Controllers\QuestionController');
Route::resource('/category', '\App\Http\Controllers\CategoryController');
Route::apiResource('/question/{question}/reply', '\App\Http\Controllers\ReplyController');

Route::post('/like/{reply}', [LikeController::class, 'likeIt']);
Route::delete('/like/{reply}', [LikeController::class, 'unLikeIt']);
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | is assigned the "api" middleware group. Enjoy building your API!
// |
// */

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
