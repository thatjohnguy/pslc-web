<?php

namespace App\Http\Controllers;


use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    public function index(){
        $users = User::where('verified',1)->get();
        return view('members',compact('users'));

    }
    public function edit(){
        return view('member.edit')->with('user',auth()->user());
    }
    
    public function update(UpdateProfileRequest $request){
    $cadet_number= (int) $request->cadet_number;
        $user=auth()->user();
//    return $request;
        $user->update([
            'name'=>$request->name,
            'cadet_number'=>$request->cadet_number,
            'sbc'=>$request->sbc,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);

        session()->flash('success','Profile updated successfully!');
        return redirect()->back();

        ///
    }
}
