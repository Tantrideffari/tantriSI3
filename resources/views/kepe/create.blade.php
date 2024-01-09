@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Tambah Pengunjung Kegitan</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('kepe') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="id_pengunjung" class="form-label">Pengunjung*</label>
                        <select class="form-control" name="id_pengunjung" id="id_pengunjung">
                            <option value="">-- Pilih --</option>
                            @foreach($pengunjungs as $pengunjung)
                            <option value="{{ $pengunjung->id }}">{{ $pengunjung->nama_pengunjung }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_kegiatan" class="form-label">Kegiatan*</label>
                        <select class="form-control" name="id_kegiatan" id="id_kegiatan">
                            <option value="">-- Pilih --</option>
                            @foreach($kegiatans as $kegiatan)
                            <option value="{{ $kegiatan->id }}">{{ $kegiatan->nama_kegiatan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('kepe') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
