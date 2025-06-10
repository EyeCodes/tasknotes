<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tasks as Task;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;
class Tasks extends Component
{
    public $tasks;

    public function mount()
    {
        $this->tasks = Task::where('user_id', Auth::id())->get(); // or DB::table('tasks')->get();
    }

    public function deleteTask($taskId)
    {
        $task = Task::find($taskId);

        if ($task && $task->user_id === Auth::id()) {
            $task->delete();
            $this->loadTasks();
            session()->flash('message', 'Task deleted successfully!');
        } else {
            session()->flash('error', 'Task not found or unauthorized.');
        }
    }

    #[On('taskAdded')]
    public function loadTasks()
{
    $this->tasks = Task::where('user_id', Auth::id())->get();
}
    public function render()
    {
        return view('livewire.tasks');
    }
}
