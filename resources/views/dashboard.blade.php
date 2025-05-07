@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

<div class="dashboard-container">
    <div class="dashboard-header">
        <img src="https://static.vecteezy.com/system/resources/previews/014/457/026/original/notebook-label-to-do-list-icon-clipart-in-cartoon-animated-vector.jpg" alt="ToDo Icon" class="dashboard-icon">
        <h1>Halo, {{ session('username') }}!</h1>
        <p>Selamat datang di ToDo List. Kelola tugas harianmu dengan mudah dan efisien.</p>
    </div>

    <div class="dashboard-nav">
        <a href="/profile" class="btn">Profil</a>
        <a href="/pengelolaan" class="btn">Pengelolaan</a>
        <a href="/logout" class="btn logout">Logout</a>
    </div>

    <section class="blog-section">
        <h2>Daftar Blog / Kegiatan</h2>
        <div class="blog-list">
            @foreach($blogs as $blog)
                <div class="blog-card">
                    <h3>{{ $blog['title'] }}</h3>
                    <p>{{ $blog['content'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
