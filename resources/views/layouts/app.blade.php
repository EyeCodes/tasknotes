<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="/src/app.css" rel="stylesheet">
   <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
  <title>TaskNotes</title>
</head>
<body>
  
  <header class="h-[75px] w-screen flex flex-rol font-(family-name:Roboto) dark:bg-[#201f21] font-extrabold border-1 border-b-solid-[#8f1bb5] dark:shadow-[#8f1bb5] p-4 justify-center items-center">
    <div class="grow-1"><h1 class="text-[#8f1bb5] text-[2.5rem]">TASKNOTES</h1></div>
    <div>
      <nav>
        <ul class="flex decoration-0 items-center">
          <li>
              <i class="fa-solid fa-circle-half-stroke dark:text-[#fff387] text-2xl pr-5 pl-5" id="theme"></i>
          </li>
          <li>
              <a href="{{route('user.logout')}}"> <i class="fa-solid fa-right-from-bracket text-2xl pr-5 pl-5 text-[#590c7a] hover:text-red-500"></i></a>
            {{-- <i class="fa-solid fa-circle-user text-4xl pr-5 pl-5"></i> --}}
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="h-[80dvh] w-screen dark:bg-[#201f21] flex flex-col gap-2 p-6">
    <div class="h-fit w-full border-2 border-white-solid dark:border-[#590c7a] rounded-full grid grid-cols-2 overflow-hidden">

      <button class="h-full w-full bg-[#590c7a] dark:text-[#f3edf5] p-2"><span class="font-bold text-white">TASK</span></button>
      <button class="h-full w-full bg-none p-2"><span class="font-bold dark:text-[#f3edf5]">GROUP TASK</span></button>
      
    </div>
    <div class="h-full w-full p-2 border-2 border-black-solid dark:border-[#590c7a] rounded-[1em]">
      <div class="h-fit w-full p-2 flex flex-row justify-end align-middle gap-2 text-center items-center">
        <h2 class="h-fit font-bold flex align-middle dark:text-[#f3edf5]">ADD TASK<i class="fa-solid fa-square-plus text-2xl  text-center align-middle text-[#590c7a] pl-2"></i></h2>
      </div>
      <div>
          {{--add via contents/yield --}}
          @yield('content')
      </div>
    </div>

    <div class="h-full w-full absolute top-0 left-0 flex justify-center items-center align-middle bg-[#20212166]" >
        <div class="h-fit w-[30em] p-5 rounded-md bg-[#ffffff]">

          <form action="{{route('add.task')}}" method="post" class="flex flex-col gap-5">
            @csrf
            <h1 class="font-bold">ADD TASK</h1>
            <hr>
            <div class="flex items-center align-middle gap-2">
              <label for="" class="font-bold">TITLE:</label>
              <input type="text" name="title" id="" class="h-[2em] w-full rounded-sm outline-[#590c7a] border-1 border-solid-[#590c7a] p-4 font-semibold" required >
            </div>
            
            <div class="flex flex-col align-middle gap-2">
              <label for="" class="font-bold">DESCRITPION:</label>
              <textarea name="description" id="" class="h-[10em] w-full rounded-sm outline-[#590c7a] border-1 border-solid-[#590c7a] p-4 font-semibold resize-none" ></textarea>
            </div>

            <div class="flex flex-col">
              <label for="" class=" w-full font-bold">DUE DATE:</label>
              <input type="datetime-local" name="due_date" id="" class="h-[2em] w-full rounded-sm outline-[#590c7a] border-1 border-solid-[#590c7a] p-4 font-semibold resize-none justify-self-start">
            </div>
            <input type="number" name='user_id' value="{{Auth::id()}}">
            <input type="checkbox" name="completed" id="completed">
            <input type="submit" value="ADD" class="font-bold bg-[#590c7a] hover:bg-[#6a198c] p-4 rounded-sm text-[#ffffff]">

          </form>
        </div>
    </div>


  </main>
  <footer class="h-22 w-screen bg-[#590c7a]"></footer>
</body>
</html>