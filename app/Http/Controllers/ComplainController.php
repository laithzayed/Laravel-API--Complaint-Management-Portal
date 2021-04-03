<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $complaint = Complaint::latest();
    //    return view('home', compact('complaint'));
    // return DB::select("select * from complaints");
        //  $data = Complaint::all();
        //  return view('home',['complaints'=>$data]);
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'            => 'required',
            'subject'         => 'required',
            'complaintsText'  => 'required',
            'case'            => 'required',
            'sms'             => 'required',
        ]);

        Complaint::create($request->all());
        return view('form');

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
    public function edit(Request $request, $id)
    {
        $complaintEdit = Complaint::find($id);
        return view ('edit', compact('complaintEdit'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data=Complaint::find($request->id);
        $data->status=$request->status;
        $data->save();
        return redirect('home');
//        $complaintEdit = Complaint::find($id);
//        $complaintEdit->update($request->all());
//        return $complaintEdit;
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
    public function viewHome()
    {
        // $user_id = Auth::user()->id;
        // $user = User::find($user_id);
        // ->with('complaints', $user)

//        return ('hi');

        $data = Complaint::all();
        return view('home',['complaints'=>$data]);


        // $user_id = auth()->user('id');
        // $user = User::find($user_id);
        // return view('home')->with('complaint', $user->complaints);

//         $complaint = Complaint::latest();
//         return view('home');
    }

}
