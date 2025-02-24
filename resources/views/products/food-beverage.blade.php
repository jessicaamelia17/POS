@extends('layouts.layout')

@section('title', 'Food & Beverage')

@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Food & Beverage</h2>
        
        <ul class="list-group">
            @foreach($products as $product)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $product['name'] }} 
                    <span class="badge bg-primary">Rp{{ number_format($product['price'], 0, ',', '.') }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection