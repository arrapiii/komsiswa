@extends('layouts.layout')

@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <a  type="button" class="btn btn-outline-primary" href="/inputpelanggaran">+ TAMBAH DATA</a>
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
                                <th>Pelanggaran</th>
                                <th>Tindak Lanjut</th>
                                <th>Jumlah Poin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Pelanggaran</th>
                                <th>Tindak Lanjut</th>
                                <th>Jumlah Poin</th>
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
                                <td>{{ $a->pelanggaran}}</td>
                                <td>{{ $a->tindaklanjut}}</td>
                                <td>{{ $a->jumlahpoin}}</td>
                                <td>
                                    <a href="/tampilkanpelanggaran/{{ $a->id }}" type="button" class="btn btn-warning">EDIT</a>
                                    <a href="/deletepelanggaran/{{ $a->id }}" type="button" class="btn btn-danger">HAPUS</a>
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