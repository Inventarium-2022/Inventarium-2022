<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inventarium</title>
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="icon"  class="icon" href="{{URL::asset('img/inv.logo.png')}}">
        <script src="https://www.gstatic.com/charts/loader.js"></script>
    </head>
    <body class="min-h-screen">
      

    <div class="relative bg-white min-h-screen">
        <div class="mx-auto max-w-7xl px-4 sm:px-6">
      <div class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="/dashboard">
            <span class="sr-only">Inventarium</span>
            <img class="h-12 w-12 sm:h-12" src="{{URL::asset('img/Inventarium-removebg-preview.png')}}" alt="">
          </a>
        </div>
        <div class="-my-2 -mr-2 md:hidden">
          <a href="/login" class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/bars-3 -->
            <svg class="h-8 w-8" fill="#5271FF" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" ><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M497 273L329 441c-15 15-41 4.5-41-17v-96H152c-13.3 0-24-10.7-24-24v-96c0-13.3 10.7-24 24-24h136V88c0-21.4 25.9-32 41-17l168 168c9.3 9.4 9.3 24.6 0 34zM192 436v-40c0-6.6-5.4-12-12-12H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h84c6.6 0 12-5.4 12-12V76c0-6.6-5.4-12-12-12H96c-53 0-96 43-96 96v192c0 53 43 96 96 96h84c6.6 0 12-5.4 12-12z"/></svg>
          </a>
        </div>
        <nav class="hidden space-x-10 md:flex">
            <a href="/dashboard" class="text-base font-medium text-gray-500 hover:text-gray-900">Página Inicial</a>
            <a href="{{ route('admin.products') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Produtos</a>
            <a href="{{ route('relatorios') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Relatórios</a>
        </nav>
        <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
            <form class="logout" method="POST" action="{{ route('logout') }}">
                @csrf
                <a  class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700" href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                            {{ __('Sair') }}
                </a>
            </form>
        </div>
      </div>
  </div>



@yield('content')

<footer class="text-gray-600 mt-128 absolute bottom-0 h-24 w-full">
    <div class="border-t ml-auto border-gray-200 w-full h-full flex flex-col justify-center items-center">
        <div class="flex flex-col justify-center items-baseline">
        <div class="font-light text-base text-gray-800">Inventarium &copy; 2022</div>
        <div class="flex justify-center w-full">
            <span
                class="inline-flex lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
                <a class="text-gray-500">
                    <svg
                        fill="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        class="w-5 h-5"
                        viewbox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg
                        fill="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        class="w-5 h-5"
                        viewbox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        class="w-5 h-5"
                        viewbox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-500">
                    <svg
                        fill="currentColor"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="0"
                        class="w-5 h-5"
                        viewbox="0 0 24 24">
                        <path
                            stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
            </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>