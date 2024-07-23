<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DisplayPicController extends Controller
{
    public function store(Request $request){
        $name=$request->file('dp')->getClientOriginalName();
        $request->file('dp')->storeAs('public/dp/',$name);
        $user=auth()->user();
        $user->update([
            'path'=>$name,
        ]);

        return redirect()->back();
        // dd($request->file());
    }
}
