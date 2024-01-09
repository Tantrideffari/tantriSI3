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


        <strong><h3>Data Pengunjung</h3></strong>
        <a href="{{ url('pengunjung/create') }}" class="btn btn-success mb-3 float-end"><i class="bi bi-plus"></i> Tambah Baru</a>

        <table id="dataTable" class="table table-hover table-striped table-bordered"><table class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">Nama Pengunjung</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
                <th scope="col">Email</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($rows as $pengunjung)
            <tr>
                <th class="text-center">{{ $no++ }}</th>
                <td>{{ $pengunjung->nama_pengunjung }}</td>
                <td>{{ $pengunjung->alamat }}</td>
                <td>{{ $pengunjung->telepon }}</td>
                <td>{{ $pengunjung->email }}</td>
                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="{{ url('pengunjung/edit/' . $pengunjung->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ url('pengunjung/' . $pengunjung->id) }}" method="post">
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