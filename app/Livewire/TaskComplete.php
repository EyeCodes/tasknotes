<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
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
            'completed' => 1,
            'due_date' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        $this->dispatch('taskAdded');
        session()->flash('message', 'Task Completed!');
    }

    public function render()
    {
        return view('livewire.task-complete');
    }
}
