@extends('layouts.default') @section('content')

<section class="text-gray-600 overflow-hidden">
    <section class="product">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img
                    alt="ecommerce"
                    class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded"
                    src="{{ \Illuminate\Support\Facades\Storage::url($products->cover)}}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$products->name}}</h1>
                    <p class="leading-relaxed">{{$products->description}}</p>
                    @if($products->stock)
                    <div class="my-3">
                        <span
                            class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">Em estoque:
                            {{$products->stock}}</span>
                    </div>
                    @endif
                    <div class="flex border-t-2 border-gray-100 mt-6 pt-6">
                        <span class="title-font font-medium text-2xl text-gray-900">{{$products->price}}</span>
                    </div>
                    <br />
                    <br />
                    <a href="{{route('admin.products.edit', $products->id)}}" class="testbutton">Editar</a>
                    <a href="{{route('admin.products.destroy', $products->id)}}" class="testbutton">Excluir</a>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection