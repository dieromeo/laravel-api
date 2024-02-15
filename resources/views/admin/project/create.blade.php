@extends('layouts.admin')
@section('content')
    <div class="container py-4">

        @include('partials.errors')

        <form action={{ route('admin.project.store') }} method="POST" enctype="multipart/form-data"
            class="d-flex row text-light">
            @csrf
            <div class="mb-3 col-6">
                <label for="nome" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control" id="nome" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3 col-6">
                <label for="link" class="form-label">Link Progetto</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}">
            </div>
            <div class="mb-3 col-9">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="screen" name="screen">
                <img src="" alt="" id="thumb">
            </div>
            <div class="mb-3 col-3">
                <label for="collaborators" class="form-label">Collaboratori</label>
                <input type="text" class="form-control" id="collaborators" name="collaborators"
                    value="{{ old('collaborators') }}">
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Tipo di progetto</label>
                <select class="form-select" aria-label="Default select example" name="type_id">
                    <option selected>Scegli un tipo per il progetto</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}" @if (old('type_id') == $type->id) selected @endif>
                            {{ $type->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <div>
                    <label class="form-label">Tags</label>
                </div>

                @foreach ($technologies as $technology)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" value="{{ $technology->id }}" name="technologies[]"
                            id="technology-{{ $technology->id }}"
                            {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                        <label class="form-check-label"
                            for="technology-{{ $technology->id }}">{{ $technology->title }}</label>
                    </div>
                @endforeach

            </div>
            <div class="mb-3">
                <label for="descrizione" class="form-label">Descrizione Progetto</label>
                <textarea name="description" id="descrizione" cols="30" rows="5" class="form-control">{{ old('description') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
@endsection
