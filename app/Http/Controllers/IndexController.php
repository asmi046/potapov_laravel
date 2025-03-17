<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $siteInformation = config('lend_data');
        return view('index', ['siteInformation' => $siteInformation]);
    }
}
