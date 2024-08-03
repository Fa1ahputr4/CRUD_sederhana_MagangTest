<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Landing Page</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .card-container {
            height: 200px; /* Atur tinggi sesuai kebutuhan */
        }
        .btn-container {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
    </style>
</head>
<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">
    <div class="card card-container bg-light text-dark shadow" style="width: 18rem;">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title text-center mb-4">Silahkan Masuk</h5>
            <div class="btn-container">
                <a href="{{ route('login') }}" class="btn btn-primary w-100 mb-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-success w-100">Register</a>
            </div>
        </div>
    </div>
</body>
</html>
