@extends('layouts.layout')

@section('title', 'Invis - Details Product')


@section('content')
    <div class="flex justify-between items-center mb-2">
        <h1 class="font-bold">Details Product</h1>
    </div>

    <div>
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->price }}</p>

        <a href="{{ url('products') }}">Back</a>
    </div>
@endsection
