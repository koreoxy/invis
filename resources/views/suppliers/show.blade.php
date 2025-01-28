@extends('layouts.layout')

@section('title', 'Invis - Details Suppliers')


@section('content')
    <div class="flex justify-between items-center mb-2">
        <h1 class="font-bold">Details Pemasok</h1>
    </div>

    <div>
        <h1>{{ $supplier->supplier_name }}</h1>
        <p>{{ $supplier->supplier_phone }}</p>
        <p>{{ $supplier->supplier_address }}</p>

        <a href="{{ url('suppliers') }}">Back</a>
    </div>
@endsection
