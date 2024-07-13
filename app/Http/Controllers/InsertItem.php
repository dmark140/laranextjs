<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class InsertItem extends Controller
{
    //

    public function store(Request $request ) : Response
    {
        $request -> validate([
            'Quantity' =>['required','integer','min:0.001'],
        ]);

        Inventory::create([
            'item_id' => $request->item_id,
            'Quantity' => $request->Quantity,
            'TransactionType' => $request->TransactionType,
            'void' => 1,
        ]);

        return response()->noContent();
    }

}
