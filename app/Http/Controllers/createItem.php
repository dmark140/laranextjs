<?php

namespace App\Http\Controllers;

use App\Models\ItemMaster;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;

class createItem extends Controller
{
    use HasApiTokens;
    public function index(){
        $Item = new ItemMaster();
        $Item->ItemCode = "FG1";
        $Item->ItemName = "FG1";
        $Item->PurchasePrice = "FG1";
        $Item->SellingPrice = "FG1";
        $Item->void = "1";
        $Item->create();
        $Item->createToken('play');
        return view('dashboard');
    }
}
