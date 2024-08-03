<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Data Karyawan</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
    <div class="container mt-5">
        <div class="card px-3 py-3">
            <div class="col-15">
                <h1 class="mt-3">Data Karyawan</h1>

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

                <a href="{{ url('employee/tambah') }}" class="btn btn-primary">Tambah</a>
                <table class="table table-bordered mt-3">
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
                                <td>{{ $e->email }}</td>
                                <td>{{ $e->is_active ? 'Aktif' : 'Tidak Aktif' }}</td>
                                <td>
                                    <a href="/employee/edit/{{$e->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/employee/hapus/{{$e->id}}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>

</x-app-layout>


