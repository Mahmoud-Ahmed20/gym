<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TRAINWITHEXPERTSController extends Controller
{
    public function TRAINWITHEXPERTS()
    {
        $selectsectin = DB::table('coach_and_doctor')->get();
        return view('back.TRAINWITHEXPERTSview',['selectsectin'=>$selectsectin]);
    }
    public function TRAINWITHEXPERTSInsertView()
    {
        return view('back.TTRAINWITHEXPERTSInsertView');
    }

    public function PostInsertTRAINWITHEXPERTS(Request $r)
    {

        $file_extension = $r->img->getClientOriginalExtension();
        $file_name = time(). '.'.$file_extension;
        $path='img/TTRAIN_WITH_EXPERTS';
        $r->img->move($path,$file_name);

            $post =[
                'img'=> $file_name,
                'name'=>$r->input('name'),
                'Job_title'=>$r->input('Job'),
                
            ];
        DB::table('coach_and_doctor')->insert($post);
        return redirect('TRAINWITHEXPERTS');
    }
    public function TRAINWITHEXPERTSUpdateView(Request $r)
    {
        $id= $r->input('id');
       $start_section= DB::table('coach_and_doctor')->where('id','=',$id)->first(); 
       
        return view('back.TRAINWITHEXPERTSUpdateView',['start_section'=>$start_section]);
    }
    public function PostUpdate(Request $r)
    {
        $file_extension = $r->img->getClientOriginalExtension();
        $file_name = time(). '.'.$file_extension;
        $path='img/TTRAIN_WITH_EXPERTS';
        $r->img->move($path,$file_name);

            $post =[
                'img'=> $file_name,
                'name'=>$r->input('name'),
                'Job_title'=>$r->input('Job'),
                
            ];
         DB::table('coach_and_doctor')->where('id','=',$r->input('id'))->update($post);   
        return redirect('TRAINWITHEXPERTS');

    }
    
    public function Delete(Request $r)
    {
        
            DB::table('coach_and_doctor')->where('id', '=', $r->input('id'))->delete();
            return redirect('TRAINWITHEXPERTS');
    }


}
