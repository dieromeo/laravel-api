@extends('layouts.admin')
@section('content')
    <div class="container py-5">

        @include('partials.toast')

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($projects as $project)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/' . $project->screen) }}" class="card-img-top" alt="{{ $project->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text overflow-auto">{{ $project->description }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="row justify-content-center">
                                <a href="{{ route('admin.project.show', $project) }}" class="btn col-auto"><lord-icon
                                        src="https://cdn.lordicon.com/unukghxb.json" trigger="hover" stroke="light">
                                    </lord-icon></a>
                                <a href="{{ route('admin.project.edit', $project) }}" class="btn col-auto"><lord-icon
                                        src="https://cdn.lordicon.com/wuvorxbv.json" trigger="hover" stroke="light"
                                        state="hover-line" colors="primary:#121331,secondary:#242424">
                                    </lord-icon></a>
                            </div>
                            <div class="row justify-content-center mt-2">
                                <form action="{{ route('admin.project.destroy', $project) }}" method="POST"
                                    class="text-center">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn"><lord-icon
                                            src="https://cdn.lordicon.com/drxwpfop.json" trigger="hover" stroke="light"
                                            colors="primary:#121331,secondary:#242424">
                                        </lord-icon></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
