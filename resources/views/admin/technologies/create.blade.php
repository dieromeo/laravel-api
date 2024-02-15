@extends('layouts.admin')
@section('content')
    <div class="container py-4">

        @include('partials.errors')

        <form action={{ route('admin.technologies.store') }} method="POST" class="d-flex row align-items-center flex-column">
            @csrf
            <div class="mb-3 col-9">
                <label for="nome" class="form-label text-light">Nome Linguaggio o Framework:</label>
                <input type="text" class="form-control" id="nome" name="title" value="{{ old('title') }}">
            </div>
            <button type="submit" class="btn btn-primary col-3">Invia</button>
    </div>
@endsection
