<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasks;


class TasksController extends Controller
{

    public function index(){
        $tasks = Tasks::all();
        return view('pages/taskpage',compact('tasks'));
    }

    // public function get($id){
    //     $qry=Task::where('id', $id)->first();
    //     dd($qry);
    // }

}
