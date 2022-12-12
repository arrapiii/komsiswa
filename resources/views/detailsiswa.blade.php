@extends('layouts.layout')

@section('content')
     <!-- Begin Page Content -->
     <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Form Detail</h1>
        <a  type="button" class="btn btn-outline-primary" href="/siswaa">KEMBALI</a>
        <br>
        <br>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $data->siswa }}" placeholder="Example input placeholder" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Kelas</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $data->kelas }}" placeholder="Kelas placeholder" disabled>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="" class="form-label">Jurusan</label>
                      <input type="email" class="form-control" placeholder="email" value="{{ $data->jurusan }}" aria-label="email" disabled>
                    </div>
                    <div class="col">
                      <label for="" class="form-label">Nis</label>
                      <input type="text" class="form-control" placeholder="password" value="{{ $data->nis }}" aria-label="password" disabled>
                    </div>
                </div>
                <br>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $data->alamat }}" placeholder="Example input placeholder" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" value="{{ $data->jeniskelamin }}" placeholder="Kelas placeholder" disabled>
                </div>
                <div class="row">
                    <div class="col">
                      <label for="" class="form-label">Email</label>
                      <input type="email" class="form-control" placeholder="email" value="{{ $data->email }}" aria-label="email" disabled>
                    </div>
                    <div class="col">
                      <label for="" class="form-label">Password</label>
                      <input type="password" class="form-control" placeholder="password" value="{{ $data->password }}" aria-label="password" disabled>
                    </div>
                </div>
                <br>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Walas</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="{{ $data->guru->guru }}" placeholder="Walas" disabled>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

</div>


<!-- End of Main Content -->
@endsection