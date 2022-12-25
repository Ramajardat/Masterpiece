<?php

namespace App\Http\Controllers;

use Consultants;
use App\Models\info;
use App\Models\User;
use App\Models\Consultant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Consultants as ModelsConsultants;

class Users extends Controller
{
    //
    public function getUsers()
    {
        $usersArr =   User::where('role', 'user')->get();


        return view('admin.dashboard', ['usersArr' => $usersArr]);
    }


    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();
        return redirect('admin/dashboard');
    }



    public function getConsultants()
    {
        // $user = Auth::user();
        // $consultantsArr =  User::where('role', 'Consultant')->get();

        $conArr = Consultant::all();
        // $userCon = User::find($conArr[0]['user_id']);
        // dd($userCon);

        // $arr = Consultant::whereIn('user_id', $consultantsArr->modelKeys())->get();
        // dd($arr);


        return view('admin.consultants', ['conArr' => $conArr]);
    }



    public function services()


    {
        return view('consultants.home');
    }
}
