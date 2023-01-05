<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Portfolio;

class Site extends Controller
{
    public function index(){
        $sites = Portfolio::all();
        return view('index', ['sites' => $sites]);
    }
    public function formulario(){
        return view('registerSite');
    }
}
