@extends('layouts.admin')
@section('content')
    <div class="container py-5">

        <h1 class="text-light">Tipo: {{ $type->title }}</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($type->projects as $project)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $project->screen }}" class="card-img-top" alt="{{ $project->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text overflow-auto">{{ $project->description }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-center">
                                <a href="{{ route('admin.project.show', $project) }}"
                                    class="btn btn-success btn-sm col-6">Dettaglio</a>
                                <a href="{{ route('admin.project.edit', $project) }}"
                                    class="btn btn-primary btn-sm col-6">Modifica</a>
                            </div>
                            <div class="row justify-content-center mt-2">
                                <form action="{{ route('admin.project.destroy', $project) }}" method="POST"
                                    class="text-center">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-sm" value="Elimina">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
