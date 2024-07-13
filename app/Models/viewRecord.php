<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viewRecord extends Model
{
    use HasFactory;
    protected $fillable =[
        "ItemCode",
        "ItemName",
        "PurchasePrice",
        "SellingPrice",
        "TotalQuantity",
    ];
}
