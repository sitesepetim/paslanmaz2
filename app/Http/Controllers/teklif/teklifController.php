<?php

namespace App\Http\Controllers\teklif;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class teklifController extends Controller
{

    public function kasko(){

        return view('page.teklif.kasko');

    }
}
