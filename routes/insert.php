<?php

use App\Http\Controllers\GoodsRecieving;
use App\Http\Controllers\ItemMaster;
use Illuminate\Support\Facades\Route;

Route::post('/InsertItem', [ItemMaster::class, 'store'])
                ->middleware('auth')
                ->name('InsertItem');


Route::post('/InsertGR', [GoodsRecieving::class, 'store'])
->middleware('auth')
->name('InsertGR');


