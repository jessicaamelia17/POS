@extends('layouts.layout')

@section('title', 'Profile')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">User Profile</h1>
        
        <div class="card mx-auto text-center shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 500px;">
            <div class="card-body">
                <!-- Gambar Profil -->
                <img src="{{ asset('img/profile.jpg') }}" class="rounded-circle mb-3" alt="User Image" width="150" height="150">

                <h2 class="card-title">{{ $name }}</h2>
                <p class="card-text"><strong>ID:</strong> {{ $id }}</p>
            </div>
        </div>
    </div>
@endsection
