<?php

namespace App\Http\Controllers;
use app\Http\Controllers\BackHomeController;
use app\Http\Controllers\WHATWECANOFFERControllerBack;
use app\Http\controllers\TRAINWITHEXPERTSController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class homeController extends Controller
{
   public function index()
   {
      $selectsectin = DB::table('start_section_homepage')->get();
      $WHATWECANOFFERslectin= DB::table('what_we_can offer')->get();
      $TRAINWITHEXPERTS =DB::table('coach_and_doctor')->get();
    return view('front.ContentHomePage',
    ['selectsectin' => $selectsectin ,
    'WHATWECANOFFERslectin' => $WHATWECANOFFERslectin,
    'TRAINWITHEXPERTS'=>$TRAINWITHEXPERTS
   ]);
       
   }
}
