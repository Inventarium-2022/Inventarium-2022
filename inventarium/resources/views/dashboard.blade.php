@extends('layouts.default')
@section('content') 
<section class="all">
<section class = "text-gray-600" 
style="background-image: url('{{ asset('public/img/inv.logo')}}');"
>

<div class="px-4">
                <div class="ml-10 pt-2  font-medium text-base text-gray-800">{{'Bem vindo, '.Auth::user()->name }}</div>
            </div>
    <div class="container px-5 py-24 mx-auto">

    <div class="flex flex-wrap -m-4">

@foreach($products as $product)
    
    <div class="lg:w-1/4 md:w-1/2 p-4 w-full bg-white  border-2 border-blue-500 ml-2">
            <a href="{{route('products', $product->id)}}" class="block relative h-48 rounded overflow-hidden">
                <img

                    alt="ecommerce"
                    class="object-cover object-center w-full h-full block"
                    src="{{ \Illuminate\Support\Facades\Storage::url($product->cover)}}"></a>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium">{{$product->name}}</h2>
                    <p class="mt-1">{{$product->price}}</p>
                </div>
                <a href="{{route('products', $product->id)}}" class="mt-3 text-indigo-500 inline-flex items-center">Ver mais
                    <svg
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        class="w-4 h-4 ml-2"
                        viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
@endforeach
        </div>
    </div>
</section>
</section>
@endsection