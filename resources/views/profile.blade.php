@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

<div class="profile-container">
    <div class="profile-card">
        <h2>Profil Pengguna</h2>
        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User Icon" class="profile-icon">
        <p><strong>Nama Pengguna:</strong> {{ $username }}</p>
        <div class="nav-buttons">
            <a href="/dashboard" class="btn">Dashboard</a>
            <a href="/logout" class="btn logout">Logout</a>
        </div>
    </div>
</div>
@endsection
