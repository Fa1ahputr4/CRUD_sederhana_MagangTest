<x-app-layout>
    @slot('title')
    Employee | Edit
    @endslot
        <div class="card px-3 py-3">
            <h1 class="my-3">Form Edit Data Employee</h1>
            <form method="POST" action="{{ route('employee.update', $employee->id) }}">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Nama:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $employee->name) }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Alamat:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $employee->address) }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Departemen:</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="departemen_id" name="departemen_id" required>
                            @foreach($departemen as $d)
                                <option value="{{ $d->id }}" {{ $d->id == $employee->departemen_id ? 'selected' : '' }}>
                                    {{ $d   ->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Gender:</label>
                    <div class="col-sm-10">
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input type="radio" class="form-check-input" id="genderL" name="gender" value="L" {{ $employee->gender == 'L' ? 'checked' : '' }}>
                                <label class="form-check-label" for="genderL">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="genderP" name="gender" value="P" {{ $employee->gender == 'P' ? 'checked' : '' }}>
                                <label class="form-check-label" for="genderP">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Telepon:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $employee->phone) }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $employee->email) }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Status Aktif:</label>
                    <div class="col-sm-10">
                        <input type="checkbox" id="is_active" name="is_active" value="1" {{ $employee->is_active ? 'checked' : '' }}>
                        <label for="is_active">Aktif</label>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('employee') }}" class="btn btn-secondary me-2">Kembali</a>
                    <button type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda yakin ingin mengubah data ini?')">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    </html>
</x-app-layout>

