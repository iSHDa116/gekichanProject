<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\Models\Thread;




class ThreadsController extends Controller
{
    public function index($composer = null){

        if($composer){

            $threads = Thread::where('composer', $composer)->orderBy('id','desc')->get();
        }else{

            $threads = Thread::all();
        }

        return view("threads.index",compact("threads","composer"));
    }
}
