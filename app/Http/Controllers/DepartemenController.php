<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemen;

class DepartemenController extends Controller
{
    public function index()
    {
        $departemen = Departemen::all();
        return view('departemen/index', ['departemen' => $departemen, 'title' => 'Departemen']);
    }

    public function tambah()
    {
        return view('departemen/tambah', ['title' => 'Departemen | Tambah']);
    }

    public function proses(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        Departemen::create([
            'name' => $validated['name']
           ]);

        return redirect('/departemen')->with('status', 'tambah');
    }

    public function edit($id)
    {
        $departemen = Departemen::find($id);
        return view('departemen.edit', ['departemen' => $departemen, 'title' => 'Departemen | Edit']);
    }

    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $depart = Departemen::find($id);
        $depart->name = $validated['name'];
        $depart->save();
        return redirect('/departemen')->with('status', 'edit');
    }

    public function hapus($id)
    {
        $depart = Departemen::find($id);
        $depart->delete();
        return redirect('/departemen')->with('status', 'hapus');
    }
}
