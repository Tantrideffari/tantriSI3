@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Tambah Pengunjung</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('pengunjung') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama_pengunjung" class="form-label">Nama Pengunjung*</label>
                        <input type="text" class="form-control" id="nama_pengunjung" name="nama_pengunjung" placeholder="Inputkan Nama Pengunjung..." required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat*</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Inputkan Alamat..." required>
                    </div>

                    <div class="mb-3">
                        <label for="telepon" class="form-label">Telepon*</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Inputkan Nomor Telepon..." required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Inputkan Email..." required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('pengunjung') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
