<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tasks;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;
class TaskCompletedPage extends Component
{
    public $tasks;

     public function mount()
    {
        $this->tasks = Tasks::where('user_id', Auth::id())->where('completed', 1)->get(); // or DB::table('tasks')->get();
    }
    public function loadTasks()
{
        $this->tasks = Tasks::where('user_id', Auth::id())->where('completed', 1)->get(); // or DB::table('tasks')->get();

}
    public function render()
    {
        return view('livewire.task-completed-page');
    }
}
