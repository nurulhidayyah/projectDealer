@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    </div>
    <div class="col-lg-8">
        <form action="/dashboard/user/{{ auth()->user()->id }}" method="post" enctype="multipart/form-data" class="mb-2">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', auth()->user()->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                    name="username" required value="{{ old('username', auth()->user()->username) }}">
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" required value="{{ old('email', auth()->user()->email) }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="brosur" class="form-label">Update Brosur</label>
                <input type="hidden" class="form-control" name="oldBrosur" value="{{ auth()->user()->brosur }}">
                <input class="form-control @error('brosur') is-invalid @enderror" type="file" id="brosur" name="brosur" onchange="previewbrosur()">
                @error('brosur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" value="{{ old('password') }}" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <form target="blank" action="{{ asset('storage/' . auth()->user()->brosur) }}" class="mb-5">
            @csrf
            <button type="submit" class="btn btn-outline-success">Lihat Brosur</button>
        </form>
    </div>
@endsection
