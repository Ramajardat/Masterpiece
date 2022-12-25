<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\Appointement;
use App\Models\Appointemnet;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class AppointemnetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointment = Consultant::all();
        return view('appointment', ['user_id' => Auth::user()->id, 'conArr' => $appointment]);
    }
    public function getConApp($id)
    {
        // $availableForDepartment = Consultant::where('user_id', $id)->get();
        // return view('appointment', ['id' => $id, 'conArr' => $availableForDepartment]);
        // $user = Auth::user();
        // $consultantsArr =  User::where('role', 'Consultant')->get();

        // $conArr = Consultant::all();
        // $userCon = User::find($conArr[0]['user_id']);
        // dd($userCon);

        // $arr = Consultant::whereIn('user_id', $consultantsArr->modelKeys())->get();
        // dd($arr);


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

        $appointment = new Appointement();
        $appointment->user_id = Auth::user()->id;

        $time = explode(',', $request->appointment_time);
        // dd($request->appointment_time);
        $appointment->appointment_time  = $time[1];
        $appointment->departement = $request->departement;
        $appointment->message = $request->message;


        $appointment->consultant_id = $time[0];

        $appointment->save();
        return redirect("/")->with('mssg', 'Your appointment has been booked successfully');
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
