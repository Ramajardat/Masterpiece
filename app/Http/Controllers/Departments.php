<?php

namespace App\Http\Controllers;

use App\Models\Consultant;
use App\Models\departement;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Constant;

class Departments extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Services =  departement::all();
        return view('services', ['Services' => $Services]);
    }
    public function home()
    {
        $Services =  departement::all();
        $Cons =  Consultant::where('status', '=', 'approved')->get();;
        return view('welcome', ['Services' => $Services, 'Cons' => $Cons]);
    }

    public function getServices()
    {
        $Services =  departement::all();
        return view('admin.services', ['Services' => $Services]);
    }

    public function destroy($id)
    {
        $survey = departement::find($id);
        $survey->delete();
        return redirect('admin/services');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
        $consultant = Consultant::findOrFail($id);
        $consultant->status = 'approved';
        $consultant->save();
        return redirect()->back();
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
}
