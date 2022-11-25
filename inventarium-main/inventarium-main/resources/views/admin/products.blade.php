@extends('layouts.default')
@section('content')
<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Produtos</h1>
                <div class="flex justify-center ml-auto">
                <div class="mb-3 xl:w-96">
                    <form action="/admin/products" method="get">
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
                            <option value="">todos</option>
                            @foreach($categories as $categorie )
                                <option value="{{$categorie->categorie}}">{{$categorie->categorie}}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                </div>
                <a href="{{route('admin.products.create')}}" class="flex ml-auto text-white bg-indigo-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-indigo-600 rounded">Adicionar</a>
            </div>
            <table class="table-auto w-full text-left whitespace-no-wrap border">
                <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">#</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100" style="width: 150px">Imagem</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Nome</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Valor</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Estoque</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Categoria</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-right">Ações</th>
                </tr>
                </thead>
                <tbody class="divide-y">
                @foreach($products as $product )
                <tr @if($loop->even) class="bg-gray-100"@endif>
                    <td class="px-4 py-3">{{$product->id}}</td>
                    <td class="px-4 py-3">
                        <a href="{{route('products', $product->id)}}">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ \Illuminate\Support\Facades\Storage::url($product->cover)}}">
                        </a>
                    </td>
                    <td class="px-4 py-3">{{$product->name}}</td>
                    <td class="px-4 py-3">{{$product->price}}</td>
                    <td class="px-4 py-3">{{$product->stock}}</td>
                    <td class="px-4 py-3">{{$product->categorie}}</td>
                    <td class="px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                        <a href="{{route('admin.products.edit', $product->id)}}" class="mt-3 text-indigo-500 inline-flex items-center">Editar</a>
                        <a href="{{route('admin.products.destroy', $product->id)}}" class="mt-3 text-indigo-500 inline-flex items-center">Deletar</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection