<div class=" w-full p-4">

    <ul class="flex flex-col gap-5 ">
    @foreach ($tasks as $task )

        <li>
            <div class="w-full p-4 rounded-md shadow-[#8f1bb5] shadow-sm grid auto-cols-fr grid-flow-col align-middle gap-2 items-center">
                <h1 class="min-w-[10em] font-bold dark:text-[#f3edf5] ">{{$task->title}}</h1>

                <div class="flex gap-3 bg-[#8f1bb5] rounded-sm p-2 ">
                    <i class="fa-solid fa-note-sticky text-[#fffcff]"> </i><textarea name="" id="" class='h-[2em] w-full no-scrollbar text-[#fffcff] dark:text-[#f3edf5] overflow-ellipsis resize-none ' >{{$task->description}}</textarea>
                </div>

                <span class="text-center dark:text-[#f3edf5]"><i class="fa-solid fa-calendar-days text-[#8f1bb5] "></i>  Due Date: 
                @if ($task->due_date)
        @php
            $due = \Carbon\Carbon::parse($task->due_date);
        @endphp

        @if ($due->isToday())
            Today ({{ $due->format('g:i A') }})
        @elseif ($due->isTomorrow())
            Tomorrow ({{ $due->format('g:i A') }})
        @else
            {{ $due->format('F j, Y g:i A') }}
        @endif
    @else
        None
    @endif
            </span>
            
            <nav class=" flex gap-1 justify-end">
                <button onclick="updateForm(1)"
                    class="p-4 bg-[#3cbd2b] text-[#fffcff]">
                    <i class="fa-solid fa-pen"></i>
                </button>
                <button wire:click="deleteTask({{ $task->id }})" onclick="return confirm('Are you sure you want to delete this task?')"
                    class="p-4 bg-[#e61d19] text-[#fffcff]">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </nav>

            </div>
        </li>
        
        @endforeach
        
    </ul>
</div>
