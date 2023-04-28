<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\sitemap;
use Illuminate\Http\Request;

class SiteMapXmlController extends Controller
{
    public function index() {
        $posts = blogs::all();
        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');




    }
}
