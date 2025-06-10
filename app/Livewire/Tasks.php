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
