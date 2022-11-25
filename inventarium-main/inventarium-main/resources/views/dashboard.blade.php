@extends('layouts.default')
@section('content') 
<section class="all">
<section class = "text-gray-600" 
style="background-image: url('{{ asset('public/img/inv.logo')}}');"
>

    <div class="px-4">
        <div class="flex justify-center pt-12" >
        <div class="ml-10 pt-2 font-medium text-lg text-gray-800">{{'Bem vindo, '.Auth::user()->name }}</div>
        <div class="flex justify-center ml-auto mr-20">
                <div class="mb-3 xl:w-96 h-full">
                    <form action="/dashboard" method="get" class="flex items-center h-full">
                        <select class="form-select
                            appearance-none
                            block
                            w-full
                            px-3
                            py-1.5
                            text-base
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding bg-no-repeat
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            onchange="this.form.submit()"
                            name="filter"
                            >
                            <option value="" selected disabled>Selecione a categoria desejada</option>
                            <option value="">Todos</option>
                            @foreach($categories as $categorie )
                                <option value="{{$categorie->categorie}}">{{$categorie->categorie}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                </div>
    </div>
    </div>
    <div class="container px-5 pt-12 pb-36 mx-auto">

    <div class="flex flex-wrap -m-4">

@foreach($products as $product)
            <a href="{{route('products', $product->id)}}" class="ml-2">
                <div class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden my-10">
                <div class="px-4 py-2">
                    <h1 class="text-gray-900 font-bold text-3xl uppercase">{{$product->name}}</h1>
                    <p class="mt-1">({{$product->categorie}})</p>
                    @if($product->description)
                        <p class="text-gray-600 text-sm mt-1">{{$product->description}}</p>
                    @else
                        <p class="text-gray-600 text-sm mt-1">(Sem descrição)</p>
                    @endif
                </div>
                <img class="h-56 w-full object-cover mt-2" src="{{ \Illuminate\Support\Facades\Storage::url($product->cover) }}" alt="{{$product->name}}">
                <div class="flex items-center justify-between px-4 py-2 bg-indigo-700">
                    <h1 class="text-gray-200 font-bold text-xl">R${{$product->price}}</h1>
                    <a href="{{route('products', $product->id)}}" class="px-3 py-1 bg-gray-200 text-sm text-gray-900 font-semibold rounded">Ver mais</a>
                </div>
                </div>
            </a>
@endforeach
        </div>
    </div>
</section>
</section>
@endsection