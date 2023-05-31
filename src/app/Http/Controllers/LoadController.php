<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Load;

class LoadController extends Controller
{
    public function index() {
        $latest = Load::all();
        // ddd($latest);
        return view('loads.index', [
            'header' => 'Avaialbe Loads',
            'loads' => $latest,
        ]);
    }
}
