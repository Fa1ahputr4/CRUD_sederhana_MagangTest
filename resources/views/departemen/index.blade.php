<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Departemen') }}
        </h2>
    </x-slot>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
        <title>{{$title}}</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
<body>
    <div class="card px-3 py-3">
        <div class="col-15">
            <form action="">
                <h1 class="mt-3">Data Departemen</h1>

                <a href="departemen/tambah" class="btn btn-primary mb-2">Tambah</a>
                {{-- alert status --}}
                @if (session('status'))
                    <?php $status = session('status'); ?>
                    
                    @if ($status === 'tambah')
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data departemen berhasil ditambahkan!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif ($status === 'edit')
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Data berhasil diubah!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif ($status === 'hapus')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Data telah dihapus!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                @endif
                <table id="dep" class="table table-bordered mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col" class="text-center align-middle">ID</th>
                            <th scope="col" class="text-center align-middle">Name</th>
                            <th scope="col" class="text-center align-middle">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departemen as $dep)
                            <tr>
                                <td class="text-center align-middle">{{ $dep->id }}</td>
                                <td class="text-center align-middle">{{ $dep->name }}</td>
                                <td class="text-center align-middle">
                                    <div class="d-flex justify-content-center">
                                        <a href="/departemen/edit/{{$dep->id}}" class="btn btn-warning btn-sm me-1">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a href="/departemen/hapus/{{$dep->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dep').DataTable();
        });
    </script>
</body>
</html>
</x-app-layout>
