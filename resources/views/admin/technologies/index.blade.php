@extends('layouts.admin')
@section('content')
    <div class="container py-4">
        @include('partials.toast')

        @foreach ($technologies as $technology)
            <div class="row justify-content-between">
                <div class="d-flex align-items-center col-auto">
                    <a href="{{ route('admin.technologies.show', $technology->id) }}"
                        class="text-decoration-none text-dark fs-3 mb-3 badge bg-light"
                        id="technologies-list">{{ $technology->title }}</a>
                </div>
                <div class="d-flex col-auto justify-content-end">
                    <a href="{{ route('admin.technologies.edit', $technology->id) }}" class="btn align-self-center"><lord-icon
                            src="https://cdn.lordicon.com/wuvorxbv.json" trigger="hover" stroke="light" state="hover-line"
                            colors="primary:#fff,secondary:#fff">
                        </lord-icon></a>
                    <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST"
                        class="align-self-center ms-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn"><lord-icon src="https://cdn.lordicon.com/drxwpfop.json"
                                trigger="hover" stroke="light" colors="primary:#fff,secondary:#fff">
                            </lord-icon></button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
