<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Route,Artisan};
use App\Http\Controllers\PostController;

Route::get('/migrate', function (Request $request) {
  Artisan::call('migrate');
  return response()->json(['message'=> 'oke'], 200);
});
Route::get('/db-seed', function (Request $request) {
  Artisan::call('db:seed');
  return response()->json(['message'=> 'oke'], 200);
});
Route::resource('post', PostController::class);

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
