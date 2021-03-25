<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shoe;

class PublicController extends Controller
{
    public function index()
    {

        return view('shoes.home');
    }
}
