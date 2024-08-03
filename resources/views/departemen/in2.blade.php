<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Departemen</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<div class="container mt-5">
    <div class="card px-3 py-3">
        <div class="col-15">
            <form action="">
                <h1 class="mt-3">Data Departemen</h1>
                <a href="departemen/tambah" class="btn btn-primary">Tambah</a>
                <table id="dep" class="table table-bordered mt-3">
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
                                    {{-- <a href="/departemen/edit/{{$dep->id}}" class="btn btn-warning">Edit</a> --}}
                                    <a href="/departemen/edit/{{$dep->id}}" class="btn btn-warning">Edit</a>
                                    <a href="/departemen/hapus/{{$dep->id}}" class="btn btn-danger">Hapus</a>

                                    {{-- <form action="" method="post" class="d-inline">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
