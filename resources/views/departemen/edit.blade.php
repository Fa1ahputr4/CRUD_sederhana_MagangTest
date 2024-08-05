<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 light:text-gray-200 leading-tight">
            {{ __('Departement') }}
        </h2>
    </x-slot>
    <head>
        <title>{{$title}}</title>
    </head>
        <form method="POST" action="/departemen/update/{{ $departemen->id }}">
            @csrf
            <div class="card px-3 py-3">
                <h1 class="my-3">Form Edit Data Departemen</h1>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Departement Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $departemen->name }}" required>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('departemen') }}" class="btn btn-secondary me-2">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
