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
  <title>Register</title>
</head>
<body>
  <header class="h-[75px] w-screen flex flex-rol font-(family-name:Roboto) dark:bg-[#201f21] font-extrabold border-2 border-b-solid-[#8f1bb5] p-4 justify-center items-center">
    <div class="grow-1"><h1 class="text-[#8f1bb5] text-[2.5rem]">TASKNOTES</h1></div>
    <div>
      <nav>
        <ul class="flex decoration-0 items-center">
          <li>
              <i class="fa-solid fa-circle-half-stroke dark:text-[#fff387] text-2xl pr-5 pl-5" id="theme"></i>
          </li>
          <li>
            <button class="bg-[#00ff6e] hover:bg-[#4aff98] p-4 text-center rounded-full "><a href="{{route(name: 'login.form')}}">SIGN IN</a></button>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="h-[90dvh] w-full flex justify-center align-middle dark:bg-[#201f21]">

  </main>
<script src="../../js/app.js"></script>
</body>
</html>