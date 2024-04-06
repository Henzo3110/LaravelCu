<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Param;

class ParamController extends Controller
{
    public function param(int $pathInteiro, string $pathString, Request $request) {
        $param = new Param($request->query('get'), $pathInteiro, $pathString);
        return view('param')
        ->with('param', $param);
    }
}