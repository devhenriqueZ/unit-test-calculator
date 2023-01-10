<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function sum($x, $y){
        $result = $x + $y;
        return $result;
    }

    public function sub($x, $y){
        $result = $x - $y;
        return $result;
    }

    public function mult($x, $y){
        $result = $x * $y;
        return $result;
    }

    public function div($x, $y){
        $result = $x / $y;
        return $result;
    }
}
