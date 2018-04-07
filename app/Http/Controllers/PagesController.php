<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function teamgym()
    {
        $title = 'Teamgym';
        return view('fields.teamgym', compact('title'));
    }
}
