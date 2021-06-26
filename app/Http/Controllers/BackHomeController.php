<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\start_section_homepage;
use Illuminate\Support\Facades\DB;

class BackHomeController extends Controller
{
    public function backindex()
    {
       $selectsectin = DB::table('start_section_homepage')->get();
       return view('back.ContentImgAndText',['selectsectin'=>$selectsectin]);

    }
    public function ViewInsertStartSection()
    {
       return view('back.FormInsertStartSection'); 
    }
    public function PostInsertStartSection(Request $r)
    {

        $file_extension = $r->Img->getClientOriginalExtension();
        $file_name = time(). '.'.$file_extension;
        $path='img/start_section_homepage';
        $r->Img->move($path,$file_name);

            $post =[
                'img'=> $file_name,
                'term'=>$r->input('Term'),
                'strong'=>$r->input('Strong'),
                'paragraph'=>$r->input('Paragraph'),
            ];
          
        DB::table('start_section_homepage')->insert($post);
        return redirect('backindex');
    }

    public function delete(Request $r)
    {
            DB::table('start_section_homepage')->where('id', '=', $r->input('id'))->delete();
            return redirect('backindex');
    }
    public function Update(Request $r)
    {
        $id= $r->input('id');
       $start_section= DB::table('start_section_homepage')->where('id','=',$id)->first(); 
       
        return view('back.Update',['start_section'=>$start_section]);
    }
    public function PostUpdate(Request $r)
    {
        $file_extension = $r->Img->getClientOriginalExtension();
        $file_name = time(). '.'.$file_extension;
        $path='img/start_section_homepage';
        $r->Img->move($path,$file_name);
        $post =[
            'img'=> $file_name,
            'term'=>$r->input('Term'),
            'strong'=>$r->input('Strong'),
            'paragraph'=>$r->input('Paragraph'),
        ];

         DB::table('start_section_homepage')->where('id','=',$r->input('id'))->update($post);   
        return redirect('backindex');

    }







}
