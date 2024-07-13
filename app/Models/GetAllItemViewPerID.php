<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetAllItemViewPerID extends Model
{
    use HasFactory;
    protected $fillable =[
        "Quantity",
        "TransactionType",
    ];
}
