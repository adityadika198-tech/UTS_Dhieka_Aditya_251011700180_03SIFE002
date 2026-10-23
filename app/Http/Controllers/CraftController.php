<?php

namespace App\Http\Controllers;

use App\Models\Craft;

class CraftController extends Controller
{
    public function index()
    {
        $crafts = Craft::all();

        return view('crafts.index', compact('crafts'));
    }

    public function show(Craft $craft)
    {
        return view('crafts.show', compact('craft'));
    }
}
