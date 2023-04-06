<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.login');
    }

    public function dashboard(){
        return view('Admin.index');
    }

    public function register(){
        return view('Admin.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Admin::where('email',$request->email)->first();
        // dd($data);
        $pass = $request->login['password'];
        if($data){
            // dd(Hash::check($pass,$data->password));
            if(Hash::check($request->login['password'],$data->password)){
                session()->put('loginId', $data->id);
                session()->put('name', $data->name);
                return redirect('admin/dashboard');
            }
        }else{
            abort('Something want wrong..!!');
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
        //
    }

    public function logout(){
        session()->forget('loginId');
        session()->forget('name');
        return redirect('admin/login');
    }

    public function account(){
        $data = Admin::select('*')->where('id',session()->get('loginId'))->first();
        return view('Admin.account')->with('data',$data);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function register_submit(Request $request)
    {
        $data = new Admin();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->login['password']);
        $data->created_at = date('Y-m-d');
        if($data->save()){
            return redirect('admin/login');
        }
    }

    public function update(Request $request, $id){
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
        //
    }
}
