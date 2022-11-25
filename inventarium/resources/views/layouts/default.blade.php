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
    </head>
    <body>
      

    <nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-blue-500">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="/dashboard" class="flex items-center">
        <img src="{{URL::asset('img/Inventarium-removebg-preview.png')}}"  class="logo " alt="Inventarium Logo">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Inventarium</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:blue:bg-gray-500 dark:border-gray-700">
        <li>
          <a href="/dashboard" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-gray dark:hover:bg-gray-700 dark:hover:text-blue md:dark:hover:bg-gray-200" aria-current="page">Página inicial</a>
        </li>
        <li>
          <a href="admin/products" class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-gray dark:hover:bg-gray-700 dark:hover:text-blue md:dark:hover:bg-gray-200">Produtos</a>
        </li>
        
        <li>
        <div class="">
                <form class="logout" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a  class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-red-700 md:p-0 dark:text-gray dark:hover:bg-gray-700 dark:hover:text-blue md:dark:hover:bg-gray-200" href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Sair') }}
</a>
                </form>
            </div>
        </li>

      </ul>

      
    </div>
  </div>
</nav>



@yield('content')

<footer class="text-gray-600">
    <div class="border-t border-gray-200">
        <div class="container px-5 py-8 flex flex-wrap mx-auto items-center">
            <div
                class="flex md:flex-nowrap flex-wrap justify-center items-end md:justify-start">
                <div class="relative sm:w-64 w-40 sm:mr-4 mr-2">
                    <label for="footer-field" class="leading-7 text-sm text-gray-600">Placeholder</label>
                    <input
                        type="text"
                        id="footer-field"
                        name="footer-field"
                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:ring-2 focus:bg-transparent focus:ring-indigo-200 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button
                    class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                <p class="text-gray-500 text-sm md:ml-6 md:mt-0 mt-2 sm:text-left text-center">
                    <br class="lg:block hidden"></p>
            </div>
            <span
                class="inline-flex lg:ml-auto lg:mt-0 mt-6 w-full justify-center md:justify-start md:w-auto">
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
</footer>
</body>
</html>