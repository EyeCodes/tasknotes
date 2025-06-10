<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tasks;
use Illuminate\Support\Facades\Auth;
class TaskForm extends Component
{

    public $title;
    public $description;
    public $due_date;
      public function submit()
    {
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
        
        $this->reset(['title', 'description', 'due_date']);
        $this->dispatch('taskAdded');

        session()->flash('message', 'Task added successfully!');
    }

    public function render()
    {
        return view('livewire.taskform');
    }
}
