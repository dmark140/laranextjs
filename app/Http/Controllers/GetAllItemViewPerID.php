<?php

namespace App\Http\Controllers;

use App\Models\GetAllItemViewPerID as ModelsGetAllItemViewPerID;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetAllItemViewPerID extends Controller
{

    // protected $model = ModelsItemMaster::class;


    protected $model = ModelsGetAllItemViewPerID::class;
    public function filterableBy(): array{
        return ['Item_id',];
    }  public function searchableBy():  array{
        return ['Item_id',];
    }

}
