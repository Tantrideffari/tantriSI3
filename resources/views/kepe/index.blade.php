    @extends('layouts.app')
    
    @section('content')
    <div class="container">
    <div class="card">
        <div class="card-body">
            
        <!-- Konten Anda -->
        <script>
            @if(session('alert-success'))
                alert('{{ session('alert-success') }}');
            @endif
        </script>


        <strong><h3>Data Pengunjung Kegiatan</h3></strong>
        <a href="{{ url('kepe/create') }}" class="btn btn-success mb-3 float-end"><i class="bi bi-plus"></i> Tambah Baru</a>

        <table id="dataTable" class="table table-hover table-striped table-bordered"><table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Pengunjung</th>
                <th scope="col">Kegiatan</th>
                <th scope="col">Tanggal Pelaksanaan</th>
                <th scope="col">Lokasi Pelaksanaan</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $kepe)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $kepe->pengunjung->nama_pengunjung }}</td>
                <td>{{ $kepe->kegiatan->nama_kegiatan }}</td>
                <td>{{ \Carbon\Carbon::parse($kepe->kegiatan->tgl_pelaksanaan)->format('d/m/Y') }}</td>
                <td>{{ $kepe->kegiatan->lokasi_pelaksanaan }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('kepe/edit/' . $kepe->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('kepe/' . $kepe->id) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Ingin Menghapus Data Ini ?');">
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
    </div>
    @endsection