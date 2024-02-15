@extends('layouts.admin')
@section('content')
    <ul class="list-group p-4">
        <li class="list-group-item">
            <h1>{{ $project->title }}</h1>
        </li>
        <li>
            <div class="img-auto">
                <img src="{{ asset('storage/' . $project->screen) }}" alt="{{ $project->title }}" class="w-100">
            </div>
        </li>
        <li class="list-group-item">
            <p>{{ $project->description }}</p>
        </li>
        <li class="list-group-item">Link GitHub: <a href="{{ $project->link }}"> {{ $project->link }}</a> </li>
        <li class="list-group-item">Collaboratori: {{ $project->collaborators }}</li>
        <li class="list-group-item">Categoria: {{ $project->type?->title }}</li>
        <li class="list-group-item">
            <div>
                Technology:
                <ul>
                    @foreach ($project->technologies as $technology)
                        <li> {{ $technology?->title ?: 'Nessun Linguaggio associato' }}</li>
                    @endforeach

                </ul>
            </div>
    </ul>
@endsection
