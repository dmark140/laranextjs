<?php

use App\Http\Controllers\GetAllItemViewPerID;
use App\Http\Controllers\InsertItem;
use App\Http\Controllers\InventoriesController;
use App\Http\Controllers\ItemMaster as ItemMasterContoler;
use App\Models\GetAllItemViewPerID as ModelsGetAllItemViewPerID;
use App\Models\Inventories;
use App\Models\UserToken as ModelsUserToken;
use App\Models\viewRecord as ModelsViewRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['as' => 'api.'], function(){
    // Orion::resource('InventoriesGet' , InventoriesController::class);
    Orion::resource('ItemMasterGet' , ItemMasterContoler::class);
    Orion::resource('insertInventory' , InsertItem::class);
   });


Route::get('/GetAllItemView',function(){
    return ModelsViewRecord::all();
})->middleware('auth:sanctum');

Route::get('/InventoriesGet/{id}',function(string $id){
    // return Inventories::all();
    // return Inventories::where("item_id","=","1");
    return Inventories::where("item_id",'=',$id)->get();
})->middleware('auth:sanctum');


// Route::get('/GetAllItemViewPerID',function(){
//     return ModelsGetAllItemViewPerID::all();
// })->middleware('auth:sanctum');


Route::get('/UserToken',function(){
    return ModelsUserToken::all();
})->middleware('auth:sanctum');

