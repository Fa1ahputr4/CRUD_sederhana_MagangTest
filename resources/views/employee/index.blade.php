<x-app-layout>
    <head>
        <title>{{$title}}</title>
    </head>
        <div class="card px-3 py-3">
            <div class="col-15">
                <h1 class="mt-3">Data Employee</h1>
                <a href="{{ url('employee/tambah') }}" class="btn btn-primary mb-3">Tambah</a>

                {{-- alert status --}}
                @if (session('status'))
                    <?php $status = session('status'); ?>
                    @if ($status === 'tambah')
                        <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                            Data departemen berhasil ditambahkan!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif ($status === 'edit')
                        <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                            Data berhasil diubah!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif ($status === 'hapus')
                        <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                            Data telah dihapus!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                @endif

                <table id="emp" class="table table-bordered mt-3 text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Departemen</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employee as $e)
                            <tr>
                                <td>{{ $e->id }}</td>
                                <td>{{ $e->name }}</td>
                                <td>{{ $e->address }}</td>
                                <td>{{ $e->departemen->name }}</td>
                                <td>{{ $e->gender }}</td>
                                <td>{{ $e->phone }}</td>
                                <td>{{ $e->email ?? '-'}}</td>
                                <td>
                                    <span class="badge {{ $e->is_active ? 'bg-success' : 'bg-danger' }}">
                                        {{ $e->is_active ? 'Aktif' : 'Tidak Aktif' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/employee/edit/{{$e->id}}" class="btn btn-warning btn-sm me-1">
                                            <i class="bi bi-pencil-square"></i>                                        </a>
                                        <a href="/employee/hapus/{{$e->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <!-- DataTables JS -->
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script>
           $(document).ready(function() {
    console.log('Document is ready');
    $('#emp').DataTable();
});

        </script>   
    </html>
</x-app-layout>
