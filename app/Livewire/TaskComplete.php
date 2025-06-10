<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use App\Models\Tasks;
class TaskComplete extends Component
{
    public $tasks;
    public $taskId;

    #[On('markComplete')]
    public function completeTask($task=null){
        $this->taskId = $task['id'];
        $this->tasks = Tasks::findOrFail($task['id']);
        $this->tasks ->update([
            'title' => 'IM TIRED',
            'completed' => 1,
        ]);

        $this->dispatch('taskAdded');
        session()->flash('message', 'Task Completed!');
    }

    public function render()
    {
        return view('livewire.task-complete');
    }
}
