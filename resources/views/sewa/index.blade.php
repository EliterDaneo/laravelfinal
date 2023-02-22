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
                            <th scope="col">Jenis Kamar</th>
                            <th scope="col">Lama</th>
                            <th scope="col">Penyewa</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 0;
                        @endphp
                        @foreach ($sewas as $key => $s)
                            <tr>
                                <th scope="row">{{ ++$no }}</th>
                                <td>{{ $s->jenis_kamar }}</td>
                                <td>{{ $s->lama }}</td>
                                <td>{{ $s->penyewa }}</td>
                                <td>Rp. {{ $s->harga }}</td>
                                <td>
                                    @if ($user->level == 1)
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <a href="" class="btn btn-danger">Hapus</a>
                                            <a href="" class="btn btn-warning">Edit</a>
                                            <a href="" class="btn btn-success">Detail</a>
                                        </div>
                                    @elseif ($user->level == 2)
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <a href="" class="btn btn-warning">Edit</a>
                                            <a href="" class="btn btn-success">Detail</a>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
