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
        $this->tasks = Task::where('user_id', Auth::id())->where('completed', 0)->get(); // or DB::table('tasks')->get();
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

    public function updateForm($taskId){
        $tasks = Task::find($taskId);
        $this->dispatch('getTask', $tasks);
    }

    public function markTaskComplete($taskId)
    {
        $tasks = Task::find($taskId);
        $this->dispatch('markComplete', $tasks);
    }

    #[On('taskAdded')]
    public function loadTasks()
{
    $this->tasks = Task::where('user_id', Auth::id())->where('completed', 0)->get(); // or DB::table('tasks')->get();

}
    public function render()
    {
        return view('livewire.tasks');
    }
}
