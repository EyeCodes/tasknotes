<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Tasks;

class TaskUpdate extends Component
{
    
    public $title;
    public $description;
    public $due_date;
    
    public function update($taskId){

        $task = Tasks::find($taskId);

        if ($task && $task->user_id === Auth::id()){}
           $validated = $this->validate([
            'title' => 'required|max:50',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
        ]);

        
        $qry = Tasks::create([
            'title' => $this->title,
            'user_id' => Auth::id(),
            'description' => $this->description,
            'due_date' => $this->due_date,
        ]);
        

    }

    public function render()
    {
        return view('livewire.task-update');
    }
}
