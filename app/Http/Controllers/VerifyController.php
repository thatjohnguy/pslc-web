<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class VerifyController extends Controller
{
    public function ShowAllPending(){
        $users= User::where('verified',0)->get();
        return view('verify',compact('users'));
    }
    public function validate_member(Request $request){
        $input=[
            'verified' => 1,
        ];
        $user = User::where('service_number',(int) $request->service_number)->update($input);

        return redirect()->back();


    }
}
