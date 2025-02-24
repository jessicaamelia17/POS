@extends('layouts.layout')

@section('title', 'Categories - SmartPOS')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center">Product Categories</h2>
        <div class="row mt-4 justify-content-center">
            @php
                $categories = [
                    ['name' => 'Food & Beverage', 'route' => 'category.food', 'image' => 'img/food.jpg'],
                    ['name' => 'Beauty & Health', 'route' => 'category.beauty', 'image' => 'img/beauty.jpg'],
                    ['name' => 'Home Care', 'route' => 'category.home', 'image' => 'img/home.jpg'],
                    ['name' => 'Baby & Kid', 'route' => 'category.baby', 'image' => 'img/baby.jpg']
                ];
            @endphp

            @foreach ($categories as $category)
                <div class="col-md-3">
                    <div class="card category-card">
                        <img src="{{ asset($category['image']) }}" class="card-img-top category-img" alt="{{ $category['name'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $category['name'] }}</h5>
                            <a href="{{ route($category['route']) }}" class="btn btn-outline-primary">View Products</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        /* Styling untuk kartu kategori */
        .category-card {
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        /* Efek hover pada kartu */
        .category-card:hover {
            transform: translateY(-10px); /* Naik ke atas saat hover */
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2); /* Tambah bayangan */
        }

        /* Ukuran gambar yang seragam */
        .category-img {
            height: 200px;
            object-fit: cover;
        }
    </style>
@endsection
