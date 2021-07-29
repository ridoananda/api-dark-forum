<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Route, Artisan};
use App\Http\Controllers\Api\{PostController, NotificationController};

Route::get('/migrate', function (Request $request) {
  Artisan::call('migrate');
  return response()->json(['message'=> 'migrated'], 200);
});
Route::get('/db-seed/{param}', function ($param) {
  Artisan::call('db:seed '.$param);
  return response()->json(['message'=> $param . ' was seeded!'], 200);
});
Route::get('/db-seed', function () {
  Artisan::call('db:seed');
  return response()->json(['message'=> 'database seeded!'], 200);
});
Route::resource('post', PostController::class);
Route::get('notification', [NotificationController::class, 'index']);
Route::delete('notification/{notification}', [NotificationController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
