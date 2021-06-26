<?php

namespace App\Http\Controllers;
use app\Http\Controllers\BackHomeController;
use Illuminate\Http\Request;

class exercisesCotroller extends Controller
{
    public function exercises()
    {
       

        return view('front.ContentExercisesPage');
    }





}
