@extends('layouts.admin')
@section('content')
    <div class="container py-4">
        @include('partials.toast')

        @foreach ($types as $type)
            <div class="row justify-content-between">
                <div class="d-flex align-items-center col-auto">
                    <a href="{{ route('admin.types.show', $type->id) }}"
                        class="text-decoration-none text-dark fs-3 mb-3 badge bg-light">{{ $type->title }}</a>
                    <p class="text-light"><span class="fs-3">&leftarrow;</span> Clicca qui
                        ver vedere i progetti correlati</p>
                </div>
                <div class="d-flex col-auto justify-content-end">
                    <a href="{{ route('admin.types.edit', $type->id) }}" class="btn align-self-center"><lord-icon
                            src="https://cdn.lordicon.com/wuvorxbv.json" trigger="hover" stroke="light" state="hover-line"
                            colors="primary:#fff,secondary:#fff">
                        </lord-icon></a>
                    <form action="{{ route('admin.types.destroy', $type) }}" method="POST" class="align-self-center ms-2">
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
