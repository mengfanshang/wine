<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class informationController extends Controller
{
    public function index()
    {
        return view('index.newsinfo');
    }
}
