<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
  <title>TaskNotes</title>
</head>
<body>
  
  <header class="h-[75px] w-screen flex flex-rol font-(family-name:Roboto) font-extrabold border-1 border-b-solid-[#8f1bb5] p-4 justify-center items-center">
    <div class="grow-1"><h1 class="text-[#8f1bb5] text-[2.5rem]">TASKNOTES</h1></div>
    <div>
      <nav>
        <ul class="flex decoration-0 items-center">
          <li>
              <i class="fa-solid fa-circle-half-stroke text-2xl pr-5 pl-5"></i>
          </li>
          <li>
            <i class="fa-solid fa-circle-user text-4xl pr-5 pl-5"></i>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="h-[80dvh] w-screen flex flex-col gap-2 p-6">
    <div class="h-fit w-full border-2 border-white-solid rounded-full grid grid-cols-2 overflow-hidden">
      <button class="h-full w-full bg-[#590c7a] p-2"><span class="font-bold text-white">TASK</span></button>
      <button class="h-full w-full bg-none p-2"><span class="font-bold">GROUP TASK</span></button>
      
    </div>
    <div class="h-full w-full p-2 border-2 border-white-solid rounded-[1em]">
      {{--add via contents/yield --}}
      @yield('content')
    </div>
  </main>
  <footer class="h-22 w-screen bg-[#590c7a]"></footer>
</body>
</html>