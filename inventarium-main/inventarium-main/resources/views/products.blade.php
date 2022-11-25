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
                        <span class="title-font font-medium text-2xl text-gray-900">R${{$products->price}}</span>
                    </div>
                    <br />
                    <form action="{{route('venda')}}" method="post" class="mb-4 flex items-end">
                        @csrf
                        <input type="hidden" name="productId" value="{{$products->id}}">
                        <div class="w-full pr-6">
                            <label for="qtd" class="block text-sm font-medium text-gray-700">Quantidade</label>
                            <input type="number" name="qtd" min="0" max="{{$products->stock}}" type="number"
                            class="
                                form-control
                                block
                                w-full
                                px-3
                                py-1.5
                                text-base
                                font-normal
                                text-gray-700
                                bg-white bg-clip-padding
                                border border-solid border-gray-300
                                rounded
                                transition
                                ease-in-out
                                m-0
                                focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            "
                            placeholder="Quantidade desejada"
                            >
                        </div>
                        <input type="submit" value="Comprar" class="bg-indigo-600 h-10 w-24 rounded-lg text-white mt-2">
                    </form>
                    <a href="{{route('admin.products.edit', $products->id)}}" class="testbutton">Editar</a>
                    <a href="{{route('admin.products.destroy', $products->id)}}" class="testbutton">Excluir</a>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection