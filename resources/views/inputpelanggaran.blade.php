@extends('layouts.layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <a  type="button" class="btn btn-outline-primary" href="/pelanggaran">KEMBALI</a>
    
    <!-- FORM INPUT -->
    <div class="card-body">
      <form action="/insertpelanggaran" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInputPassword1">Pelanggaran</label>
            <input type="text" name="pelanggaran_siswa" class="form-control" placeholder="Pelanggaran" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tindak Lanjut</label>
            <input type="text" name="tindaklanjut" class="form-control" placeholder="Tindak Lanjut" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jumlah Poin</label>
            <input type="text" name="jumlahpoin" class="form-control" placeholder="Jumlah Poin" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection