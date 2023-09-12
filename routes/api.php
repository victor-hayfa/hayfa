<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users_level/filter', 'UserLevelController@listFilter');
Route::get('events_local/download/{id}', 'EventLocalController@download');
Route::get('showUser', 'UserController@showUser');
Route::get('update_event_description', 'EventTaskController@updateEventDescription');
Route::post('stocks/updateFile/{id}', 'StockController@updateFile');
Route::post('stocks_flowers/updateFile/{id}', 'StockFlowerController@updateFile');
Route::post('events_local/updateFile/{id}', 'EventLocalController@updateFile');

Route::apiResource('accounts', 'AccountController');
Route::apiResource('stocks', 'StockController');
Route::apiResource('stocks_flowers', 'StockFlowerController');
Route::apiResource('users', 'UserController');
Route::apiResource('users_level', 'UserLevelController');
Route::apiResource('tasks', 'TaskController');
Route::apiResource('tasks_plan', 'TaskPlanController');
Route::apiResource('tasks_plan_relationship', 'TaskPlanRelationshipController');
Route::apiResource('events', 'EventController');
Route::apiResource('events_local', 'EventLocalController');
Route::apiResource('events_tasks', 'EventTaskController');
Route::apiResource('events_tasks_comments', 'EventTaskCommentController');
Route::apiResource('events_stocks_items', 'EventStockItemController');
Route::apiResource('events_stocks_items_flowers', 'EventStockItemFlowerController');
Route::apiResource('categories', 'CategoryController');
Route::apiResource('stages', 'StageController');
