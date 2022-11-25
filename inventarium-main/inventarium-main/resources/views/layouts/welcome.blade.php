<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inventarium</title>
        
        <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon" class="icon" href="{{URL::asset('img/inv.logo.png')}}">
        

    </head>
    <body>

  <div class="relative bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
      <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="#">
            <span class="sr-only">Inventarium</span>
            <img class="h-12 w-12 sm:h-12" src="{{URL::asset('img/Inventarium-removebg-preview.png')}}" alt="">
          </a>
        </div>
        <div class="-my-2 -mr-2 md:hidden">
          <a href="/dashboard" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/bars-3 -->
            <svg class="h-8 w-8" fill="#5271FF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" ><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"/></svg>
          </a>
        </div>
        <nav class="hidden space-x-10 md:flex">
        </nav>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
          <a href="/login" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Entre</a>
          <a href="/register" class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Cadastre-se</a>
        </div>
      </div>
  </div>

 
</div>

       
        @yield('content')

    </body>
</html>