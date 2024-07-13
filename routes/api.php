<?php

use App\Http\Controllers\InsertItem;
use App\Http\Controllers\ItemMaster as ItemMasterContoler;
use App\Http\Controllers\UserToken;
use App\Models\UserToken as ModelsUserToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['as' => 'api.'], function(){
    Orion::resource('ItemMasterGet' , ItemMasterContoler::class);
    // Orion::resource('Token' , UserToken::class);
   });

// Route::group(['as' => 'ap    i.'], function(Request $request){
// Orion::resource('InsertItem' , InsertItem::class,['store']);
// Orion::resource('Token' , UserToken::class);
// });


Route::get('/UserToken',function(){
    return ModelsUserToken::all();
})->middleware('auth:sanctum');


// Route::middleware(['auth:sanctum'])->get('/token', function (Request $request) {
//     return $request->token();
// });
