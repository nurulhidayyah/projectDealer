@extends('dashboard.layouts.main')

@section('container')
    <div class="row my-3">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $mobil->title }}</h1>

            <a href="/dashboard/cars" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my cars</a>
            <a href="/dashboard/cars/{{ $mobil->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                Edit</a>
            <form action="/dashboard/cars/{{ $mobil->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span
                        data-feather="x-circle"></span> Delete</button>
            </form>

            @if ($mobil->image)
                <img src="{{ asset('storage/' . $mobil->image) }}" class="img-fluid mt-3" alt="{{ $mobil->title }}"
                    style="max-width: 500px; overflow: auto;">
            @else
                <img src="img/blank.jpg" class="img-fluid mt-3" alt="{{ $mobil->title }}">
            @endif
            <div class="card-body">
                <strong class="mt-auto">
                    <h3 class="card-title1 text-dark fw-bold fs-2">{{ $mobil->title }}</h3>
                </strong>
                <a href="https://api.whatsapp.com/send?phone=6289602675711&text=HALLO Robbi, saya mau tanya tanya harga mobil honda, saya dapat informasi dari website hondaserang.com" class="btn btn-danger p-2 fw-bold fs-4" style="width:100%;" target="blank">Harga Rp {{ $mobil->harga }}</a>
            </div>

            {{-- <article class="my-3 fs-5">
                {!! $post->body !!}
            </article> --}}
        </div>
    </div>
@endsection
