<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;

class DashController extends Controller
{
    public function index(){
        $feeds=Feed::orderBy('id','DESC')->get();
        return view('dashboard')->with('feeds',$feeds);
    }
    
}
