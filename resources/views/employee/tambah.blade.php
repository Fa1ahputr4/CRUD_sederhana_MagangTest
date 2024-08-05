<x-app-layout>
    <head>
        <title>Employee | Tambah</title>
    </head>
    <body>
        <div class="card px-3 py-3">
            <h1 class="mb-3">Form Tambah Data Employee</h1>
            <form method="POST" action="{{ route('employee.proses') }}">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Alamat:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Departemen:</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="departemen_id" name="departemen_id" required>
                            <option value="">Pilih Departemen</option>
                            @foreach($departemen as $departemen)
                                <option value="{{ $departemen->id }}">{{ $departemen->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Gender:</label>
                    <div class="col-sm-10 d-flex align-items-center">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="gender" id="genderL" value="L" required>
                            <label class="form-check-label" for="genderL">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="genderP" value="P" required>
                            <label class="form-check-label" for="genderP">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Telepon:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Status Aktif:</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active">
                            <label class="form-check-label" for="is_active">
                                Aktif
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('employee') }}" class="btn btn-secondary me-2">Kembali</a>
                    <button type="submit" class="btn btn-success ">Simpan</button>
                </div>
            </form>
        </div>
    </body>
    </html>
</x-app-layout>
