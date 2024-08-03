<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Departemen;


class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        return view('employee/index', ['employee' => $employee]);
    }

    public function tambah()
    {
        $departemen = Departemen::all();
        return view('employee/tambah', ['departemen' => $departemen]);
    }

    public function proses(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'departemen_id' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        // Buat entri baru di tabel employees
        Employee::create([
            'name' => $request->name,
            'address' => $request->address,
            'departemen_id' => $request->departemen_id,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
            'is_active' => $request->has('is_active') ? true : false,
        ]);

        // Redirect atau respons lain
        return redirect()->route('employee')->with('status', 'tambah');
    }
    public function edit($id)
    {
        $employee = Employee::find($id);
        $departemen = Departemen::all();
        return view('employee.edit', ['employee' => $employee, 'departemen' => $departemen]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'departemen_id' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
    
        $employee = Employee::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->address = $request->input('address');
        $employee->departemen_id = $request->input('departemen_id');
        $employee->gender = $request->input('gender');
        $employee->phone = $request->input('phone');
        $employee->email = $request->input('email');
        $employee->is_active = $request->has('is_active') ? true : false;
        $employee->save();
        return redirect()->route('employee')->with('status', 'edit');

    }

    public function hapus($id)
    {
        $emp = Employee::find($id);
        $emp->delete();
        return redirect('/employee')->with('status', 'hapus');
    }
}
