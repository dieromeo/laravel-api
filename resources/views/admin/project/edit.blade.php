@extends('layouts.admin')
@section('content')
    <div class="container">

        @include('partials.errors')

        <form action={{ route('admin.project.update', $project) }} method="POST" class="d-flex row p-4 text-light"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 col-6">
                <label for="nome" class="form-label">Nome Progetto</label>
                <input type="text" class="form-control" id="nome" name="title"
                    value="{{ old('title', $project->title) }}">
            </div>
            <div class="mb-3 col-6">
                <label for="link" class="form-label">Link Progetto</label>
                <input type="text" class="form-control" id="link" name="link"
                    value="{{ old('link', $project->link) }}">
            </div>
            <div class="mb-3 col-3">
                <label for="screen" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="screen" name="screen"
                    value="{{ old('screen', $project->screen) }}">
            </div>
            <div class="mb-3 col-9">
                <label for="collaborators" class="form-label">Collaboratori</label>
                <input type="text" class="form-control" id="collaborators" name="collaborators"
                    value="{{ old('collaborators', $project->collaborators) }}">
            </div>
            <div class="mb-3">
                <label for="type_id" class="form-label">Tipo di progetto</label>
                <select class="form-select" aria-label="Default select example" name="type_id">
                    <option selected>Scegli un tipo per il progetto</option>
                    @foreach ($types as $type)
                        <option @if (old('type_id', $project->type_id) == $type->id) selected @endif value="{{ $type->id }}">
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
                        @if ($errors->any())
                            <input class="form-check-input" type="checkbox" value="{{ $technology->id }}"
                                name="technologies[]" id="technology-{{ $technology->id }}"
                                {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                            <label class="form-check-label"
                                for="technology-{{ $technology->id }}">{{ $technology->title }}</label>
                        @else
                            <input class="form-check-input" type="checkbox" value="{{ $technology->id }}"
                                name="technologies[]" id="technology-{{ $technology->id }}"
                                {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                            <label class="form-check-label"
                                for="technology-{{ $technology->id }}">{{ $technology->title }}</label>
                        @endif
                    </div>
                @endforeach
                <div class="mb-3">
                    <label for="descrizione" class="form-label">Descrizione Progetto</label>
                    <textarea name="description" id="descrizione" cols="30" rows="5" class="form-control">{{ old('description', $project->description) }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
@endsection
