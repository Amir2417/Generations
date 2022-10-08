<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StartGenerationController extends Controller
{
    public function add_member(){
        return view('backend.start_generation.create');
    }
}
