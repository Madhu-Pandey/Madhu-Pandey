<?php

use App\Models\Achievement;
use App\Models\Enquiry;
use App\Models\Gallery;
use Illuminate\Http\Request;


function uploads_File(Request $request, $File,$path,$prefix = '',$ref_file = ''){
    // dd($request->file($File));
    $file_path=array();
    if($request->hasFile($File)){
        foreach($request->file($File) as $new){
            $ext = $new->getClientOriginalExtension();
            if($prefix != ''){
            $filename = $new->storeAs($path,$prefix.'_'.uniqid().mt_rand(0,999999999).'.'.$ext,['disk'=>'uploads']);
            }else{$filename = $new->storeAs($path,uniqid().mt_rand(0,999999999).'.'.$ext,['disk'=>'uploads']);}
            array_push($file_path,$filename);
        }
        // dd($file_path);
        if($ref_file!='' && $ref_file!=NULL && $ref_file!=[]){
            if(count($file_path)>0){
                if(is_array($ref_file)){
                    foreach($ref_file as $pf){
                        if((file_exists('uploads/'.$pf))){
                            unlink('uploads/'.$pf);
                        }
                    }
                }else{
                    foreach(json_decode($ref_file) as $pf){
                        if((file_exists('uploads/'.$pf))){
                            unlink('uploads/'.$pf);
                        }
                    }
                }
            }
        }
    }else{
        if($request->file($File)) {
            foreach($request->file($File) as $new){
                $file = $new;
                $file_path = $prefix.'_'.uniqid().mt_rand(0,999999999);
                $file->move('uploads'.$file_path, $file->getClientOriginalName());
                // dd($file);
            }
        }
    }
    return $file_path;
}

function is_image(string $filename) {
    $f = explode(".", $filename);
    $ext = strtolower(end($f));
    if (($ext == "jpg") || ($ext == "jpeg") || ($ext == "png"))
        return true;
    return false;
}

function is_pdf(string $filename) {
    $f = explode(".", $filename);
    $ext = strtolower(end($f));
    if($ext == "pdf")
        return true;
    return false;
}

function getCount_Enquiry(){
    $data = Enquiry::select('*')->get()->count();
    return $data;
}

function getCount_gallery(){
    $data = Gallery::select('*')->get()->count();
    return $data;
}

function getCount_acheve(){
    $data = Achievement::select('*')->get()->count();
    return $data;
}

?>


