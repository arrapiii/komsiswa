@extends('layouts.layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <a  type="button" class="btn btn-outline-primary" href="/transaksii">KEMBALI</a>
    
    <!-- FORM INPUT -->
    <div class="card-body">
      <form action="/insertpelanggar" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInputPassword1">Siswa</label>
            <select class="form-control" name="siswa_id" id="siswa_id" required>
              <option hidden> Siswa </option>
              @foreach ($data as $siswa)
              <option value="{{ $siswa->id }}">{{ $siswa->siswa }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pelanggaran</label>
            <select class="form-control" name="pelanggaran_id" id="pelanggaran_id" required>
              <option hidden> Pelanggaran </option>
              @foreach ($dataa as $plgr)
              <option value="{{ $plgr->id }}">{{ $plgr->pelanggaran_siswa}}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection