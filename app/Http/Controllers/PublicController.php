<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shoe;

class PublicController extends Controller
{
    public function index()
    {
        $shoes = Shoe::all();
        return view('shoes.home', compact('shoes'));
    }
}
