@extends('dashboard.layouts.main')

@section('container')
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">Gallery</h1>

            <a href="/dashboard/galleries" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my galleries</a>
            <a href="/dashboard/galleries/{{ $gallery->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                Edit</a>
            <form action="/dashboard/galleries/{{ $gallery->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                        data-feather="x-circle"></span> Delete</button>
            </form>

            @if ($gallery->image)
                <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid mt-3" alt="{{ $gallery->image }}"
                    style="max-width: 500px; overflow: auto;">
            @else
                <img src="img/blank.jpg" class="img-fluid mt-3" alt="{{ $gallery->image }}">
            @endif

            {{-- <article class="my-3 fs-5">
                {!! $post->body !!}
            </article> --}}
        </div>
    </div>
@endsection
