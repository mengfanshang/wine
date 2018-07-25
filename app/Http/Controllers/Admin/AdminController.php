<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\models\Menu;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


}
