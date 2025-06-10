    <div class="h-full w-full absolute top-0 left-0 justify-center items-center align-middle bg-[#20212166] hidden" id="full-bg" >

        <div class="h-fit w-[30em] p-5 flex flex-col rounded-md bg-[#ffffff] dark:bg-[#201f21] tabindex=-1">

          <span class="h-[2em] w-[2em] rounded-4xl p-1 flex items-center align-middle justify-center overflow-hidden self-end"><i class="fa-solid fa-xmark w-full text-[#8f1bb5] rounded-4xl hover:text-[#e61d19] hover:bg-[#69696955] flex self-center text-center text-[1em] p-1 close-task-form" id=""></i></span>
          <form wire:submit.prevent = "submit" class="flex flex-col gap-5">
            @csrf
            <h1 class="font-bold dark:text-[#f3edf5]">ADD TASK</h1>
            <hr class="dark:text-[#f3edf5]">
            <div class="flex items-center align-middle gap-2 ">
              <label for="" class="font-bold dark:text-[#f3edf5]">TITLE:</label>
              <input type="text" name="title" wire:model='title' id="" class="h-[2em] w-full  rounded-sm dark:text-[#f3edf5] outline-[#8f1bb5] border-1 border-solid-[#8f1bb5] p-4 font-semibold" required >
            </div>
            
            <div class="flex flex-col align-middle gap-2">
              <label for="" class="font-bold dark:text-[#f3edf5]">DESCRITPION:</label>
              <textarea name="description" wire:model='description' id="" class="h-[10em] w-full  rounded-sm dark:text-[#f3edf5] outline-[#8f1bb5] border-1 border-solid-[#8f1bb5] p-4 font-semibold resize-none" ></textarea>
            </div>

            <div class="flex flex-col">
              <label for="" class=" w-full font-bold dark:text-[#f3edf5]">DUE DATE:</label>
              <input type="datetime-local" wire:model='due_date' name="due_date" id="" class="h-[2em] w-full  dark:text-[#f3edf5] rounded-sm outline-[#8f1bb5] border-1 border-solid-[#8f1bb5] p-4 font-semibold resize-none justify-self-start">
            </div>
            <input type="submit" value="ADD" class="font-bold  bg-[#8f1bb5] hover:bg-[#6a198c] p-4 rounded-sm text-[#ffffff]">

          </form>
        </div>
    </div>
