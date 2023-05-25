<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Load;

class LoadController extends Controller
{
    public function index() {
        return view('loads.index', [
            'header' => 'Welcome',
        ]);
    }
}
