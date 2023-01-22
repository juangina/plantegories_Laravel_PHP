<?php

namespace App\Http\Controllers\Images;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index() {
        return view('dashboard.camera');
    }
}
