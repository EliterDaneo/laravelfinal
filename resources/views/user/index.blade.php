@extends('layout.main')

@section('isi')
    <div class="container">
        <div class="card-body">
            <div class="w-50 center border rounded px-3 py-3 mx-auto">
                <h1 class="text-center">
                    Data Sewa
                </h1>
                <div class="form-group">
                    <a href="" class="btn btn-primary">Tambah Data</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Level</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($users as $key => $u)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->level }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <a href="" class="btn btn-danger">Hapus</a>
                                        <a href="" class="btn btn-warning">Edit</a>
                                        <a href="" class="btn btn-success">Detail</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
