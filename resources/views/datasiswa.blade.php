@extends('layouts.layout')

@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <a  type="button" class="btn btn-outline-primary" href="/inputsiswa">+ TAMBAH DATA</a>
        <br>
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Nis</th>
                                <th>Jenis Kelamin</th>
                                {{-- <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Wali Kelas</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>Nis</th>
                                <th>Jenis Kelamin</th>
                                {{-- <th>Alamat</th>
                                <th>No. Telp</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Wali Kelas</th> --}}
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($data as $a)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $a->nama}}</td>
                                <td>{{ $a->kelas}}</td>
                                <td>{{ $a->jurusan }}</td>
                                <td>00{{ $a->nis }}</td>
                                <td>{{ $a->jeniskelamin }}</td>
                                {{-- <td>{{ $a->alamat }}</td>
                                <td>0{{ $a->notelp }}</td>
                                <td>{{ $a->email }}</td>
                                <td>{{ $a->password }}</td>
                                <td>{{ $a->walas }}</td> --}}
                                <td>
                                    <a href="/tampilkansiswa/{{ $a->id }}" type="button" class="btn btn-warning">EDIT</a>
                                    <a href="/deletesiswa/{{ $a->id }}" type="button" class="btn btn-danger">HAPUS</a>
                                    <button type="button" class="btn btn-info" data-id="{{ $a->id }}">Detail</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>


<!-- End of Main Content -->
@endsection