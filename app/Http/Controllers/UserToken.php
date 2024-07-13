<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserToken as CUserToken;
class UserToken extends Controller
{
    protected $model = CUserToken::class;

}
