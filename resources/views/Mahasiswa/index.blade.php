@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
                <div class="card-header bg-dark-subtle">
                    <h3 class="float-start fw-bold">{{ __('DATA DOSEN') }}</h3>
                    <span class="float-end btn btn-primary">
                        <a class="text-light" href="dosen/tambah"> <i class="fa-solid fa-user-plus"></i> Tambah </a>
                    </span>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Dosen Id</th>
                                <th>Jenis Kelamin</th>
                                <th>NO HP</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dosens as $dosen)
                            <tr>
                                <td>{{ $mahasiswa->id }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->email }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection