@extends('layouts.layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <a  type="button" class="btn btn-outline-primary" href="/siswaa">KEMBALI</a>

    <!-- FORM INPUT -->
    <div class="card-body">
      <form action="/updatesiswa/{{ $data->id }}" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
            <label for="exampleInputPassword1">Nama</label>
            <input type="text" name="siswa" class="form-control" placeholder="Nama" value="{{ $data->siswa }}" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Kelas</label>
            <select class="form-control" name="kelas" id="" required>
              <option hidden>{{ $data->kelas }}</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jurusan</label>
            <select class="form-control" name="jurusan" id="" required>
              <option hidden>{{ $data->jurusan }}</option>
              <option value="TJKT">TJKT</option>
              <option value="Animasi">Animasi</option>
              <option value="PPLG">PPLG</option>
              <option value="BRC">BRC</option>
              <option value="TE">TE</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Nis</label>
            <input type="text" name="nis" class="form-control" placeholder="Nis" value="{{ $data->nis }}" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <select class="form-control" name="jeniskelamin" id="" required>
              <option hidden>{{ $data->jeniskelamin }}</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="{{ $data->alamat }}" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">No. Telp</label>
            <input type="number" name="notelp" class="form-control" placeholder="No. Telp" value="{{ $data->notelp }}" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ $data->email }}" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" value="{{ $data->password }}" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Wali Kelas</label>
            <select class="form-control" name="guru_id" id="guru_id" required>
              <option hidden value="{{ $data->guru_id }}">{{ $data->guru->guru }}</option>
              @foreach($wal as $guru)
              <option value="{{ $guru->id }}">{{ $guru->guru }}</option>
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