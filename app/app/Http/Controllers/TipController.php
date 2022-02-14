<?php

namespace App\Http\Controllers;

use App\Models\Tip;
use Illuminate\Http\Request;

class TipController extends Controller
{
    public function index() {
        $tips = \App\Models\Tip::all();
        return view('Tip.list', ['tips' => $tips]);
    }
}
