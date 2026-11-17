<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Models\ObraEntregue;
use App\Models\Showcase;

class SiteController extends Controller
{
    public function index()
    {
        $showcases = showcase::all();
        $feedbacks = Feedback::latest()->get();

        return view('site.index', compact('showcases', 'feedbacks'));
    }

    public function sobre()
    {
        return view('site.sobre');
    }

    public function portifolio()
    {
        $obras = ObraEntregue::latest()->get();

        return view('site.portifolio', compact('obras'));
    }

    public function contato()
    {
        return view('site.contato');
    }
}
