<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight " >
            {{ __('Departement') }}
        </h2>
    </x-slot>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Departemen</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container mt-5">
    <div class="card px-3 py-3">
        <div class="col-15">
            <form action="">
                <h1 class="mt-3">Data Departemen</h1>

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

                <a href="departemen/tambah" class="btn btn-primary">Tambah</a>
                <table class="table table-bordered mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($departemen as $dep)
                            <tr>
                                <td>{{ $dep->id }}</td>
                                <td>{{ $dep->name }}</td>
                                <td>
                                    <a href="/departemen/edit/{{$dep->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/departemen/hapus/{{$dep->id}}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>