<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthyController extends Controller
{
     public function healthy()
     {
         return view('front.ContentHealthyPage');
     }
}
