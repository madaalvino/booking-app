@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Ruangan</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rooms.update', $room->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama Ruangan</label>
            <input type="text" name="name" class="form-control" value="{{ $room->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control">{{ $room->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="capacity" class="form-label">Kapasitas</label>
            <input type="number" name="capacity" class="form-control" value="{{ $room->capacity }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
