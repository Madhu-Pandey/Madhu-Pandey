<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Notice::all();
        return view('Admin.notice_list')->with('notice',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.notice_form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = new Notice();
        $file = array();
        $file = uploads_File($request, 'ref_file', 'Notice', 'Notice', '');

        $data->title = $request->title;
        $data->descr = $request->descr;
        $data->ref_file = json_encode($file);
        $data->created_at = date('Y-m-d');
        if ($data->save()) {
            return redirect('admin/notice/list');
        } else {
            return back();
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
        // $data = Notice::select('*')->where((DB::raw('md5(id)')), $id)->first();
        // dd($data);
         $data = Notice::all();
        return view('notice_view')->with('notice', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $deleted = Notice::where((DB::raw('md5(id)')),$id)->delete();
        if($deleted){
            return redirect('admin/notice/list');
        }
    }
}
