<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\Appointement;
use App\Models\Appointemnet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function showuserpage()
    {
        $profileappoin = Appointement::all();


        return view('profile', ['user_id' => Auth::user()->id, 'appointments' => $profileappoin]);
    }

    public function showAppoin()
    {
        $profileappoin = Appointement::all();


        return view('admin.appointement', ['appointments' => $profileappoin]);
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
