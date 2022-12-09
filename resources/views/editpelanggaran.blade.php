@extends('layouts.layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- FORM INPUT -->
    <form action="/updatepelanggaran/{{ $data->id }}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="exampleInputPassword1">Pelanggaran</label>
          <input type="text" name="pelanggaran" class="form-control" placeholder="Pelanggaran" value="{{ $data->pelanggaran }}" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Tindak Lanjut</label>
          <input type="text" name="tindaklanjut" class="form-control" placeholder="tindaklanjut" value="{{ $data->tindaklanjut }}" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Poin</label>
          <input type="text" name="jumlahpoin" class="form-control" placeholder="Jumlah Poin" value="{{ $data->jumlahpoin }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection