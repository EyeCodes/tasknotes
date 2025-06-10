<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use App\Models\Tasks;

class TaskUpdate extends Component
{
    public $tasks;
    public $taskId;
    public $title;
    public $description;
    public $due_date;

    #[On('getTask')]
 public function updateForm($task=null)
    {   
        $this->taskId = $task['id'];
        // $this->tasks = Tasks::find($task['id']);
    $this->tasks = Tasks::findOrFail($task['id']);
    $this->title = $this->tasks->title;
    $this->description = $this->tasks->description;
    $this->due_date = \Carbon\Carbon::parse($this->tasks->due_date)->format('Y-m-d\TH:i');
    
    }
      public function submit()
    {

        $validated = $this->validate([
            'title' => 'required|max:50',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
        ]);
        $tasks = Tasks::findOrFail($this->taskId);

        $tasks ->update([
            'title' => $this->title,
            'user_id' => Auth::id(),
            'description' => $this->description,
            'due_date' => $this->due_date,
        ]);

        $this->dispatch('taskAdded');
        session()->flash('message', 'Task updated successfully!');
    }

    public function render()
    {
    return view('livewire.task-update');
    }
}
