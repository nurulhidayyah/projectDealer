@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Brosur</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col">
        <table class="table table-striped table-sm table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="col-md-10">Brosur</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($brosurs as $brosur)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><embed type="application/pdf" src="{{ asset('storage/' . $brosur->brosur) }}" width="100%" height="500"></embed></td>
                        <td class="text-center">
                            <form target="blank" action="{{ asset('storage/' . $brosur->brosur) }}" class="d-inline">
                                @csrf
                                <button type="submit" class="badge bg-info border-0"><span data-feather="eye"></span></button>
                            </form>
                            <a href="/dashboard/brosurs/{{ $brosur->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
