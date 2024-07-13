<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewRecord extends Controller
{
    //
    public function index(){
        $getNOtes = DB::statement("SELECT * FROM `record_view`");
        // dump($getNOtes);
    return $getNOtes;
    }

}
