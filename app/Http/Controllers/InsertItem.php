<?php

namespace App\Http\Controllers;

use App\Models\ItemMaster;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class InsertItem extends Controller
{
    //

    public function store(Request $request ) : Response
    {
        $request -> validate([
            'ItemCode' =>['required','string','unique','max:20'],
            'ItemName' =>['required','string','max:150'],
            'PurchasePrice' =>['required','numeric'],
            'SellingPrice' =>['required','numeric','gt:PurchasePrice'],
        ]);

         ItemMaster::create([
            'ItemCode' => $request->ItemCode,
            'ItemName' => $request->ItemName,
            'PurchasePrice' => $request->PurchasePrice,
            'SellingPrice' => $request->SellingPrice,
            'void' => 1,
        ]);

        return response()->noContent();
    }

}
