@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update Brosur</h1>
    </div>
    <div class="col-lg-8">
        <form action="/dashboard/brosurs/{{ $brosur->id }}" method="post" enctype="multipart/form-data" class="mb-2">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="brosur" class="form-label">Update Brosur</label>
                <input type="hidden" class="form-control" name="oldBrosur" value="{{ $brosur->brosur }}">
                <input class="form-control @error('brosur') is-invalid @enderror" type="file" id="brosur" name="brosur" onchange="previewbrosur()">
                @error('brosur')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
