<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showcase;

class SiteController extends Controller
{
    public function index()
    {
        $showcases = showcase::all();
        return view('site.index', compact('showcases'));
    }
}
