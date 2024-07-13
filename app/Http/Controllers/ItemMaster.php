<?php

namespace App\Http\Controllers;

use App\Models\ItemMaster as ModelsItemMaster;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Orion\Http\Controllers\Controller;
use Illuminate\Http\Response;
class ItemMaster extends Controller
{

    public function store(Request $request )
    {
        $request->validate([
            'ItemCode' =>['required','string' ,'unique:item_masters'],
            'ItemName' =>['required','string'],
            'PurchasePrice' =>['required','numeric','min:0.01'],
            'SellingPrice' =>['required','numeric','gt:PurchasePrice','min:0.01'],
        ]);
        echo $request;
        ModelsItemMaster::create([
            'ItemCode' => $request->ItemCode,
            'ItemName' => $request->ItemName,
            'PurchasePrice' => $request->PurchasePrice,
            'SellingPrice' => $request->SellingPrice,
            'void' => 1,
        ]);

        // return '';
    }

    protected $model = ModelsItemMaster::class;
    public function filterableBy(): array{
        return ['ItemCode','ItemName'];
    }  public function searchableBy():  array{
        return ['ItemCode','ItemName'];
    }


}
