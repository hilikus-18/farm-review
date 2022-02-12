<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentCotroller extends Controller
{
    public function index() {
        return view('Content.list');
    }
}
