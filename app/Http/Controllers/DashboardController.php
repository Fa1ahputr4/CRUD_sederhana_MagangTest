<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemen;
use App\Models\Employee;
use Illuminate\Support\Facades\View;


class DashboardController extends Controller
{
    public function index()
    {
        $jmldep = Departemen::count();

        // Ambil jumlah employee
        $jmlemp = Employee::count();

        // Ambil jumlah employee aktif
        $jmlaktif = Employee::where('is_active', '1')->count();
        $jmlinaktif = Employee::where('is_active', '0')->count();

        // Ambil jumlah employee berdasarkan gender
        $jmll = Employee::where('gender', 'L')->count();
        $jmlp = Employee::where('gender', 'P')->count();

        $nav = "Dashboard";
        
        // Share the title with all views
        View::share('navtitle', $nav);

        // Kirim data ke view
        return view('dashboard', [
            'dep' => $jmldep,
            'emp' => $jmlemp,
            'activ' => $jmlaktif,
            'inactiv' => $jmlinaktif,
            'laki' => $jmll,
            'perempuan' => $jmlp,
            'title' => 'Dashboard'
        ]);
    }
}
