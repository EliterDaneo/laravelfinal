@extends('layout.main')

@section('isi')
    <div class="container">
        <div class="card-body">
            <div class="w-50 center border rounded px-3 py-3 mx-auto">
                <div class="alert alert-success" role="alert">
                    Selamat Datang User : {{ $user->name }}
                </div>
            </div>
        </div>
    </div>
@endsection
