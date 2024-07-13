<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class GoodsRecieving extends Controller
{

    public function store(Request $r){

        $r->validate([
            'Quantity'=>['required','min:0.001'],
        ]);

        Inventory::create([
            'Quantity' => $r->Quantity,
            'TransactionType' => 'in',
            'void' => 1,
        ]);

        // return
    }

}
