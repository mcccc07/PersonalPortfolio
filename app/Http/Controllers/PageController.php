<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($pages)
    {
        $allowedPages = ['home', 'about', 'project'];

        if (in_array($pages, $allowedPages)) {
            return view('pages.' . $pages);
        }
        abort(404);
    }
}
