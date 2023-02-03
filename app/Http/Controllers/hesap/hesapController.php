<?php

namespace App\Http\Controllers\hesap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class hesapController extends Controller
{
 public function otv(){
     return view('page.hesaplama.otv');
 }
}
