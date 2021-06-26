<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class WHATWECANOFFERControllerBack extends Controller
{
  
    public function WHATWECANOFFERveiw()
    {
       $selectsectin = DB::table('what_we_can offer')->get();

        return view('back.WHATWECANOFFERSelectData',['selectsectin'=>$selectsectin]);
    }
    public function ViewInsert()
    {
        return view('back.WHATWECANOFFERInsert');
    }
    public function PostInsertWHATWECANOFFER(Request $r)
    {
        $file_extension = $r->img->getClientOriginalExtension();
        $file_name = time(). '.'.$file_extension;
        $path='img/what_we_can offer';
        $r->img->move($path,$file_name);

            $post =[
                'img'=> $file_name,
                'text'=>$r->input('text'),
                'paragraph'=>$r->input('paragraph'),
            ];
            // dd($post);
          
        DB::table('what_we_can offer')->insert($post);
        return redirect('WHATWECANOFFERSelectData');
    }
    public function WHATWECANOFFERUpdate(Request $r)
    {
        $id= $r->input('id');
       $start_section= DB::table('what_we_can offer')->where('id','=',$id)->first(); 
      
        return view('back.WHATWECANOFFERUpdate',['start_section'=>$start_section]);
    }
    public function PostUpdateWHATWECANOFFER(Request $r)
    {
        $file_extension = $r->img->getClientOriginalExtension();
        $file_name = time(). '.'.$file_extension;
        $path='img/what_we_can offer';
        $r->img->move($path,$file_name);
        $post =[
            'img'=> $file_name,
            'text'=>$r->input('text'),
            'paragraph'=>$r->input('paragraph'),
        ];

        $start_section= DB::table('what_we_can offer')->where('id','=',$r->input('id'))->update($post);   
        return redirect('WHATWECANOFFERSelectData');

    }
    public function DeleteWHATWECANOFFER(Request $r)
    {
            DB::table('what_we_can offer')->where('id', '=', $r->input('id'))->delete();
            return redirect('WHATWECANOFFERSelectData');
    }

}
