@extends('layouts.welcome')@section('content') 
<section > <div class="slider">
    <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                        <div class="slide first">
                            <a href="#ourTeam">
                                <img src="{{URL::asset('img/img1.png')}}" alt="img1"></a>

                            </div>

                            <div class="slide">
                                <img src="{{URL::asset('img/img2.png')}}" alt="img2"></div>

                                <div class="slide">
                                    <img src="{{URL::asset('img/img3.jpg')}}" alt="img3"></div>

                                    <div class="slide">
                                        <img src="{{URL::asset('img/team.jpeg')}}" alt="img4"></div>

                                        <div class="navigation-auto">
                                            <div class="auto-btn1"></div>
                                            <div class="auto-btn2"></div>
                                            <div class="auto-btn3"></div>
                                            <div class="auto-btn4"></div>
                                        </div>

                                    </div>

                                    <div class="manual-navigation">
                                        <label for="radio1" class="manual-btn"></label>
                                        <label for="radio2" class="manual-btn"></label>
                                        <label for="radio3" class="manual-btn"></label>
                                        <label for="radio4" class="manual-btn"></label>
                                    </div>

                                </div>
                                <script>
let count = 1;
document.getElementById("radio1").checked= true;

setInterval( function(){
    nextImage();
},4000)

function nextImage(){
    count++;
    if(count>4){
        count=1;
    }
    document.getElementById("radio"+count).checked=true;

}
                                </script>
                            </section>

                            <section class="text-gray-600 body-font" id="ourTeam">
                                <div class="container px-5 py-24 mx-auto">
                                    <div class="flex flex-col text-center w-full mb-20">
                                        <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">INVENTARIUM</h1>
                                        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">O Inventarium é um sistema de controle de estoque para pequenos comércios/comericantes
                                        de manuseio simples e objetivo
                                        </p>
                                    </div>

                                    <section class="fotos">
                                    <div class="flex flex-wrap -m-4 pl-10">
                                        <div class="p-4 lg:w-1/2">
                                            <div
                                                class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                                <img
                                                    alt="team"
                                                    class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                                                    src="{{URL::asset('img/foto1.jpg')}}">
                                                    <div class="flex-grow sm:pl-8">
                                                        <h2 class="title-font font-medium text-lg text-gray-900">Rennan Moura</h2>
                                                        <h3 class="text-gray-500 mb-3">Desenvolvedor</h3>
                                                        <p class="mb-4">18 ANOS - CURSO TÉCNICO: DESENVOLVIMENTO DE SISTEMAS</p>
                                                        <span class="inline-flex">
                                                        <a href="https://tailblocks.cc/" target="_blank" class="text-gray-500">
                                                                <svg
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    class="w-5 h-5"
                                                                    viewBox="0 0 24 24">
                                                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                                                </svg>
                                                            </a>
                                                            <a href="https://tailblocks.cc/" target="_blank" class="ml-2 text-gray-500">
                                                                <svg
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    class="w-5 h-5"
                                                                    viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                                                </svg>
                                                            </a>
                                                            <a href="https://tailblocks.cc/" target="_blank" class="ml-2 text-gray-500">
                                                                <svg
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    class="w-5 h-5"
                                                                    viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                                </svg>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="p-4 lg:w-1/2">
                                                <div
                                                    class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                                    <img
                                                        alt="team"
                                                        class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                                                        src="https://dummyimage.com/201x201">
                                                        <div class="flex-grow sm:pl-8">
                                                            <h2 class="title-font font-medium text-lg text-gray-900">Alper Kamu</h2>
                                                            <h3 class="text-gray-500 mb-3">Designer</h3>
                                                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                                                            <span class="inline-flex">
                                                                <a class="text-gray-500">
                                                                    <svg
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        class="w-5 h-5"
                                                                        viewBox="0 0 24 24">
                                                                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                                                    </svg>
                                                                </a>
                                                                <a class="ml-2 text-gray-500">
                                                                    <svg
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        class="w-5 h-5"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                                                    </svg>
                                                                </a>
                                                                <a class="ml-2 text-gray-500">
                                                                    <svg
                                                                        fill="none"
                                                                        stroke="currentColor"
                                                                        stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        class="w-5 h-5"
                                                                        viewBox="0 0 24 24">
                                                                        <path
                                                                            d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                                    </svg>
                                                                </a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="p-4 lg:w-1/2">
                                                    <div
                                                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                                        <img
                                                            alt="team"
                                                            class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                                                            src="https://dummyimage.com/204x204">
                                                            <div class="flex-grow sm:pl-8">
                                                                <h2 class="title-font font-medium text-lg text-gray-900">Atticus Finch</h2>
                                                                <h3 class="text-gray-500 mb-3">UI Developer</h3>
                                                                <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                                                                <span class="inline-flex">
                                                                    <a class="text-gray-500">
                                                                        <svg
                                                                            fill="none"
                                                                            stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            class="w-5 h-5"
                                                                            viewBox="0 0 24 24">
                                                                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                                                        </svg>
                                                                    </a>
                                                                    <a class="ml-2 text-gray-500">
                                                                        <svg
                                                                            fill="none"
                                                                            stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            class="w-5 h-5"
                                                                            viewBox="0 0 24 24">
                                                                            <path
                                                                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                                                        </svg>
                                                                    </a>
                                                                    <a class="ml-2 text-gray-500">
                                                                        <svg
                                                                            fill="none"
                                                                            stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            class="w-5 h-5"
                                                                            viewBox="0 0 24 24">
                                                                            <path
                                                                                d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                                        </svg>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-4 lg:w-1/2">
                                                        <div
                                                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                                            <img
                                                                alt="team"
                                                                class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                                                                src="https://dummyimage.com/206x206">
                                                                <div class="flex-grow sm:pl-8">
                                                                    <h2 class="title-font font-medium text-lg text-gray-900">Henry Letham</h2>
                                                                    <h3 class="text-gray-500 mb-3">Designer</h3>
                                                                    <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                                                                    <span class="inline-flex">
                                                                        <a class="text-gray-500">
                                                                            <svg
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                class="w-5 h-5"
                                                                                viewBox="0 0 24 24">
                                                                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="ml-2 text-gray-500">
                                                                            <svg
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                class="w-5 h-5"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="ml-2 text-gray-500">
                                                                            <svg
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                class="w-5 h-5"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="p-4 lg:w-1/2">
                                                        <div
                                                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                                            <img
                                                                alt="team"
                                                                class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                                                                src="https://dummyimage.com/206x206">
                                                                <div class="flex-grow sm:pl-8">
                                                                    <h2 class="title-font font-medium text-lg text-gray-900">Henry Letham</h2>
                                                                    <h3 class="text-gray-500 mb-3">Designer</h3>
                                                                    <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                                                                    <span class="inline-flex">
                                                                        <a class="text-gray-500">
                                                                            <svg
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                class="w-5 h-5"
                                                                                viewBox="0 0 24 24">
                                                                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="ml-2 text-gray-500">
                                                                            <svg
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                class="w-5 h-5"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="ml-2 text-gray-500">
                                                                            <svg
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                class="w-5 h-5"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="p-4 lg:w-1/2">
                                                        <div
                                                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                                                            <img
                                                                alt="team"
                                                                class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4"
                                                                src="https://dummyimage.com/206x206">
                                                                <div class="flex-grow sm:pl-8">
                                                                    <h2 class="title-font font-medium text-lg text-gray-900">Henry Letham</h2>
                                                                    <h3 class="text-gray-500 mb-3">Designer</h3>
                                                                    <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>
                                                                    <span class="inline-flex">
                                                                        <a class="text-gray-500">
                                                                            <svg
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                class="w-5 h-5"
                                                                                viewBox="0 0 24 24">
                                                                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="ml-2 text-gray-500">
                                                                            <svg
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                class="w-5 h-5"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                                                            </svg>
                                                                        </a>
                                                                        <a class="ml-2 text-gray-500">
                                                                            <svg
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                class="w-5 h-5"
                                                                                viewBox="0 0 24 24">
                                                                                <path
                                                                                    d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                </section>
                                            </section>
                                        </section>
                                        @endsection