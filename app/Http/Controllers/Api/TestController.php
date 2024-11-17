<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Test;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function Test(){
        $test = Test::collection(User::get());
        return response($test);
    }
}
