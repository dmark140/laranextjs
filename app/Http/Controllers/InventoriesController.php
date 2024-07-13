<?php

namespace App\Http\Controllers;

use App\Models\inventories as Modelinventories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoriesController extends Controller
{

    public function index(){
        $getNOtes = DB::statement('Select * from inventories;');
        return $getNOtes;
    }

    protected $model = ItemMaster::class;
    public function filterableBy(): array{
        return ['ItemCode','ItemName'];
    }  public function searchableBy():  array{
        return ['ItemCode','ItemName'];
    }
}
