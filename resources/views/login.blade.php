@extends('layouts.app')

@section('title', 'Login Bebas')

@section('content')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="container">
    <h2>Login Aja</h2>
    @if($errors->any())
        <p style="color:red;">{{ $errors->first() }}</p>
    @endif
    <form method="POST" action="/login">
        @csrf
        <input type="text" name="username" placeholder="Masukkan Nama" required><br><br>
        <input type="password" name="password" placeholder="Masukkan Password" required><br><br>
        <button type="submit">Login</button>
    </form>
</div>
@endsection
