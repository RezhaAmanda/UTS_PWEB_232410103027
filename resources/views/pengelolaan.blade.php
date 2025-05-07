@extends('layouts.app')

@section('title', 'Pengelolaan ToDo List')

@section('content')
<link rel="stylesheet" href="{{ asset('css/pengelolaan.css') }}">

<div class="dashboard-container">
    <div class="nav-links" style="text-align: right; margin-bottom: 20px;">
        <a href="/dashboard" class="nav-btn">Dashboard</a>
        <a href="/profile" class="nav-btn">Profil</a>
        <a href="/logout" class="nav-btn logout">Logout</a>
    </div>

    <div class="dashboard-header">
        <img src="https://static.vecteezy.com/system/resources/previews/014/457/026/original/notebook-label-to-do-list-icon-clipart-in-cartoon-animated-vector.jpg" alt="ToDo Icon" class="dashboard-icon">
        <h1>Pengelolaan ToDo List</h1>
        <p>Tambah dan kelola daftar tugasmu secara instan.</p>
    </div>

    @if(session('edit_index') !== null)
        {{-- Form Edit --}}
        <form action="/pengelolaan/update/{{ session('edit_index') }}" method="POST" class="todo-form">
            @csrf
            <input type="text" name="todo" value="{{ session('edit_value') }}" required>
            <button type="submit" class="btn">Update</button>
        </form>
    @else
        {{-- Form Tambah --}}
        <form action="/pengelolaan/tambah" method="POST" class="todo-form">
            @csrf
            <input type="text" name="todo" placeholder="Tugas baru..." required>
            <button type="submit" class="btn">Tambah</button>
        </form>
    @endif

    @if(session('todos') && count(session('todos')) > 0)
        <ul class="todo-list">
            @foreach(session('todos') as $index => $todo)
                <li class="todo-item">
                    {{ $todo }}
                    <div>
                        <form action="/pengelolaan/edit/{{ $index }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-small">Edit</button>
                        </form>
                        <form action="/pengelolaan/hapus/{{ $index }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn logout btn-small">Hapus</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <p class="no-task">Belum ada tugas.</p>
    @endif
</div>
@endsection
