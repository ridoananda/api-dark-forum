<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Route,Artisan};

Route::get('/migrate', function (Request $request) {
  Artisan::call('migrate');
  return response()->json(['message'=> 'oke'], 200);
});
Route::get('/post', function (Request $request) {
    return $request->user();
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
