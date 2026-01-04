<?php

namespace App\Http\Controllers;

use App\Models\Licens;
use Illuminate\Http\Request;

class LicensController extends Controller
{
    public function licens(){
        $rule = Licens::all();
        return $rule;
    }
}
