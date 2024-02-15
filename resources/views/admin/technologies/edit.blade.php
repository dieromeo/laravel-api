@extends('layouts.admin')
@section('content')
    <div class="container py-4">

        @include('partials.errors')

        <form action={{ route('admin.technologies.update', $technology) }} method="POST"
            class="d-flex row align-items-center flex-column">
            @csrf
            @method('PUT')
            <div class="mb-3 col-9">
                <label for="nome" class="form-label text-light">Nome Tipologia:</label>
                <input type="text" class="form-control" id="nome" name="title"
                    value="{{ old('title', $technology->title) }}">
            </div>
            <button type="submit" class="btn btn-primary col-3">Invia</button>
    </div>
@endsection
