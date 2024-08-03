<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dpartemen</title>
    <link rel="stylesheet" href="/css/style.css">
</head>

<form method="POST" action="{{ route('departemen.proses') }}">
    @csrf
    <div class="container mt-5">
        <div class="card px-3 py-3">
            <h1 class="my-3">Form Tambah Data</h1>
            <div class="row mb-3">
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Departement Name :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                    <button type="submit" class="btn btn-success mt-3">Tambah Data</button>
                </div>
            </div>
</form>