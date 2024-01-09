@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Edit Pengunjung Kegiatan</h5>
            <div class="col-sm-8">
                <form class="row g-3 mt-2" action="{{ url('kepe/' . $row->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PATCH">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="id_pengunjung" class="form-label">Pengunjung*</label>
                        <select class="form-control" name="id_pengunjung" id="id_pengunjung">
                            <option value="">-- Pilih --</option>
                            @foreach($pengunjungs as $pengunjung)
                            <option value="{{ $pengunjung->id }}" {{ $row->id_pengunjung == $pengunjung->id ? 'selected' : ''}}>{{ $pengunjung->nama_pengunjung }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_kegiatan" class="form-label">Kegiatan*</label>
                        <select class="form-control" name="id_kegiatan" id="id_kegiatan">
                            <option value="">-- Pilih --</option>
                            @foreach($kegiatans as $kegiatan)
                            <option value="{{ $kegiatan->id }}" {{ $row->id_kegiatan == $kegiatan->id ? 'selected' : ''}}>{{ $kegiatan->nama_kegiatan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('kepe') }}" class="btn btn-warning" >Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
