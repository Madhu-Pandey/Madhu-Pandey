<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailSupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request);
        $to_email = $request->email;
        $data = array();
        $data['data1'] = $request->email;
        // dd($data);
        if(Mail::send('email',$data, function ($message) use ($to_email) {
            $message->to($to_email)->subject('Thanks For Subscribing..!');
            $message->from('guruleenrpr@gmail.com', 'Test Mail');
        })){
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $enq = new Enquiry();
        $enq->name = $request->name;
        $enq->email = $request->email;
        $enq->message = $request->message;
        $enq->created_at = date('Y-m-d');
        if($enq->save()){
            $data = array();
            $to_name = $request->name;
            $data = array('name' => $request->name,'email' => $request->email,'messages' => $request->message);
            Mail::send('email_contact', $data, function ($message) use ($to_name){
                $message->to('guruleenrpr@gmail.com',$to_name)->subject('Enquriy For You!');
                $message->from('guruleenrpr@gmail.com', 'Enquiry Email');
            });
            return redirect('/contact');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}

?>
