<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 light:text-gray-100 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
            <!-- Data Master Cards -->
            <div class="row mt-1">
                <!-- Existing Cards -->
                <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                    <div class="card bg-primary text-white w-100">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Departemen</h5>
                            <p class="card-text">{{ $dep }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                    <div class="card bg-success text-white w-100">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Employee</h5>
                            <p class="card-text">{{ $emp }}</p>
                        </div>
                    </div>
                </div>

                <!-- New Cards -->
                <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                    <div class="card bg-warning text-white w-100">
                        <div class="card-body">
                            <h5 class="card-title">Jumlah Employee Aktif</h5>
                            <p class="card-text">Aktif : {{ $activ }}</p>
                            <p class="card-text">Tidak Aktif : {{ $inactiv }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                    <div class="card bg-info text-white w-100">
                        <div class="card-body">
                            <h5 class="card-title">Employee Berdasarkan Gender</h5>
                            <p class="card-text">Laki-laki: {{ $laki }}</p>
                            <p class="card-text">Perempuan: {{ $perempuan }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
