<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GalleryController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    $data = Gallery::all();
    if($data){
        return view('Admin.gallery')->with('gallery',$data);
    }
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    return view('Admin.gallery_form');
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    if(!isset($request->id)){
        $data = new Gallery();
        $file = array();
        $file = uploads_File($request, 'ref_file', 'Gallery', 'Gallery', '');

        $data->title = $request->title;
        $data->ref_file = json_encode($file);
        $data->seq_no = $request->seq_no;
        $data->created_at = date('Y-m-d');
        if ($data->save()) {
            return redirect('admin/gallery/list');
        } else {
            return back();
        }
    }else{
        $file = array();
        $data = Gallery::select('*')->where('id',$request->id)->first();
        if($data){
            $data->update([
                'title'=>$request->title
            ]);
            if($request->ref_file){
                $file = uploads_File($request, 'ref_file', 'Gallery', 'Gallery', $data->ref_file);
                $data->ref_file = json_encode($file);
                $data->save();
                return redirect('admin/gallery/list');
            }else{
                $data->ref_file=$request->old_image;
                $data->save();
                return redirect('admin/gallery/list');
            }
        }else{
            return back();
        }

    }
}
/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $data = Gallery::select('*')->where((DB::raw('md5(id)')),$id)->first();
    // dd($data);
    return view('Admin.gallery_form')->with('data',$data);
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    //
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $deleted = Gallery::where((DB::raw('md5(id)')),$id)->delete();
    if($deleted){
        return redirect('admin/gallery/list');
    }
}
}
