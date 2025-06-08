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
  <title>Login</title>
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
            <button class="bg-[#00ff6e] hover:bg-[#4aff98] p-4 text-center rounded-full "><a href="{{route('register.form')}}">SIGN UP</a></button>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  @if ($errors->any())
      <ul>
          @foreach ($errors->all() as $error)
              <li style="color:red;">{{ $error }}</li>
          @endforeach
      </ul>
  @endif
  <main class="h-[90dvh] w-full flex justify-center align-middle dark:bg-[#201f21]">

    <div class="h-fit w-fit shadow-black shadow-md self-center   p-5 rounded-[2em]">

      <form action="{{route('user.login')}}" method="post" class="h-fit w-full flex flex-col gap-5 justify-center items-center">
        @csrf
        <div class="flex flex-col justify-center align-middle items-center"> 
            <h1 class="font-bold text-2xl dark:text-[#f3edf5]">WELCOM TO <span class="text-[#590c7a]">TASKNOTES</span></h1>
            <h2 class="font-bold text-[1.5rem] dark:text-[#f3edf5]">LOGIN</h2>
        </div>

        <div class="w-full flex relative ">
          <input type="email" name="email" required class="w-full dark:text-[#f3edf5]  border-1 border-[#590c7a]-solid p-2 font-semibold outline-[#590c7a] text-1xl"><label for="" class="bg-white dark:bg-[#201f21] dark:text-[#f3edf5] absolute top-[-6] left-4 font-semibold -translate-y-3 z-9999">EMAIL</label></div>

        <div class="w-full flex relative ">
          <input type="password" name="password" required class="w-full  dark:text-[#f3edf5] border-1 border-[#590c7a]-solid p-2 font-semibold outline-[#590c7a] text-1xl"><label for="" class="bg-white dark:bg-[#201f21] dark:text-[#f3edf5] absolute top-[-6] left-4 font-semibold -translate-y-3 z-9999">PASSWORD</label></div>

        <input type="submit" value="LOGIN" class="h-fit w-fit p-4 bg-[#590c7a] hover:bg-[#6b1c8c] rounded-2xl text-white font-bold">

      </form>
    </div>
  </main>

</body>
</html>