@extends('layouts.layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <a  type="button" class="btn btn-outline-primary" href="/guruu">KEMBALI</a>
    
    <!-- FORM INPUT -->
    <div class="card-body">
      <form action="/insertguru" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInputPassword1">Nama Guru</label>
            <input type="text" name="guru" class="form-control" placeholder="Nama Guru" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nip</label>
            <input type="number" name="nip" class="form-control" placeholder="Nip" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Matpel</label>
            <input type="text" name="matpel" class="form-control" placeholder="Matpel" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="text" name="tgllahir" class="form-control" placeholder="Tanggal Lahir" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Tempat Lahir</label>
            <input type="text" name="tempatlahir" class="form-control" placeholder="Tempat Lahir" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <select class="form-control" name="jeniskelamin" id="" required>
              <option hidden>Jenis kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">No. Telp</label>
            <input type="number" name="notelp" class="form-control" placeholder="No. Telp" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Agama</label>
            <input type="text" name="agama" class="form-control" placeholder="Agama" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection