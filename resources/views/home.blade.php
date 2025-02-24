@extends('layouts.layout')

@section('title', 'Home - SmartPOS')

@section('content')
    <!-- Hero Section -->
    <div class="text-center">
        <h1 class="display-4">Welcome to SmartPOS</h1>
        <p class="lead">Manage sales quickly and efficiently!</p>
        
        <!-- Tombol Menuju Halaman Sales -->
        <a href="{{ route('sales.index') }}" class="btn btn-primary btn-lg">Go to Sales Page</a>
        
        <!-- Tombol Menuju Halaman Category -->
        <a href="{{ route('category.index') }}" class="btn btn-outline-secondary btn-lg ms-3">View Categories</a>
    </div>
@endsection
