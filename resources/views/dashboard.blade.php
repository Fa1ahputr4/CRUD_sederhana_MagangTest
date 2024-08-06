
<x-app-layout>
    @slot('title')
    Dashboard
    @endslot
            <!-- Data Master Cards -->
            <div class="row mt-1">
                <!-- Existing Cards -->
                <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                    <div class="card bg-primary text-white w-100">
                        <div class="card-header">
                            <h5 class="card-title">
                                <i class="fas fa-building"></i> Jumlah Departemen
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-0">{{ $dep }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                    <div class="card bg-success text-white w-100">
                        <div class="card-header">
                            <h5 class="card-title">
                                <i class="fas fa-users"></i> Jumlah Employee
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-0">{{ $emp }}</p>
                        </div>
                    </div>
                </div>

                <!-- New Cards -->
                <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                    <div class="card bg-warning text-white w-100">
                        <div class="card-header">
                            <h5 class="card-title">
                                <i class="fas fa-user-check"></i> Status Employee
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-1">Aktif : {{ $activ }}</p>
                            <p class="card-text mb-0">Tidak Aktif : {{ $inactiv }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 d-flex align-items-stretch">
                    <div class="card bg-info text-white w-100">
                        <div class="card-header">
                            <h5 class="card-title">
                                <i class="fas fa-genderless"></i> Gender Employee
                            </h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text mb-1">Laki-laki: {{ $laki }}</p>
                            <p class="card-text mb-0">Perempuan: {{ $perempuan }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
