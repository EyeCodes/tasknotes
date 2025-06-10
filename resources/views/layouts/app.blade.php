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
<body class="bg-[#fffcff]">
  
  <header class="h-[75px] w-screen flex flex-rol font-(family-name:Roboto) dark:bg-[#201f21] font-extrabold border-b-4 border-b-[#8f1bb5] p-4 justify-center items-center">
    <div class="grow-1"><h1 class="text-[#8f1bb5] text-[2.5rem]">TASKNOTES</h1></div>
    <div>
      <nav>
        <ul class="flex decoration-0 items-center">
          <li>
              <i class="fa-solid fa-circle-half-stroke  text-[#8f1bb5]  dark:text-[#fff387] text-2xl pr-5 pl-5" id="theme"></i>
          </li>
          <li>
              <a href="{{route('user.logout')}}"> <i class="fa-solid fa-right-from-bracket text-2xl pr-5 pl-5 text-[#8f1bb5] hover:text-[#e61d19]"></i></a>
            {{-- <i class="fa-solid fa-circle-user text-4xl pr-5 pl-5"></i> --}}
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <main class="h-[80dvh] w-screen dark:bg-[#201f21] flex flex-col gap-2 p-6">
    <div class="h-fit w-full border-2 border-white-solid dark:border-[#8f1bb5] rounded-full grid grid-cols-2 overflow-hidden">

      <button class="h-full w-full bg-[#8f1bb5] dark:text-[#f3edf5] p-2"><span class="font-bold text-white">TASK</span></button>
      <button class="h-full w-full bg-none p-2"><span class="font-bold dark:text-[#f3edf5]">GROUP TASK</span></button>
      
    </div>

    <div class="h-full w-full overflow-hidden border-2 border-black-solid dark:border-[#8f1bb5] rounded-[1em] overflow-y-scroll overflow-x-hidden no-scrollbar ">

      <div class="h-fit w-full p-4 flex flex-row bg-[#fffcff] dark:bg-[#201f21] justify-end align-middle gap-2 text-center items-center sticky top-0">
        <h2 class="h-fit font-bold flex align-middle dark:text-[#f3edf5] hover:text-[#6a198c]" id="add-task">ADD TASK<i class="fa-solid fa-square-plus text-2xl  text-center align-middle text-[#8f1bb5] pl-2"></i></h2>
      </div>
      <div class="h-fit ">
          {{--add via contents/yield --}}
          @yield('content')


      </div>
    </div>

  </main>
  <footer class="h-22 w-screen bg-[#8f1bb5]"></footer>
</body>
</html>