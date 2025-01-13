<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class l3templateController extends Controller
{
    public function index()
    {
        return view('frontend.l3-template');
    }
}
