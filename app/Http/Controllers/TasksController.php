<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{

    public function index(){
        $addtaskmodular = 'hidden';
        return view('layouts/app');
    }

    public function insert(Request $request){

        $request -> validate([
            'title' => 'required|max:20',
        ]);

        $qry = Task::insert([
            'title' => $request->title,
            'order' => $request->order,
            'description' => $request->description,
            'completed' => $request->completed,
            'due_date' => $request->due_date
        ]);

        if($qry){
            return $addtaskmodular = 'hidden';
        }

    }
}
