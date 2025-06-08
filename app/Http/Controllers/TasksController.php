<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TasksController extends Controller
{

    public function index(){
        $tasks = Task::all();
        return view('layouts/app',compact('tasks'));
    }

    // public function get($id){
    //     $qry=Task::where('id', $id)->first();
    //     dd($qry);
    // }

    public function store(Request $request){

        $request -> validate([
            'title' => 'required|max:50',
        'description' => 'nullable|string',
        'completed' => 'required|boolean',
        'due_date' => 'nullable|date',
        ]);

        $qry = Task::insert([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->has('completed'),
            'due_date' => $request->due_date,
            'user_id' => $request->user_id
        ]);

        if($qry){
            return redirect(route('home'))->with('status', 'Registered Succesfully');
        }

    }
}
