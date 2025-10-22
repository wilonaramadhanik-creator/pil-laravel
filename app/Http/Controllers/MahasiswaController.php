<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Halaman Home Mahasiswa
        $Mahasiswa = [
            ['nim' => '123', 'nama' => 'yeiko']
        ];
        return view('Mahasiswa.index', compact('Mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman tambah

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //proses simpan tambah
        $validated = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
        ]);

        return response()->json($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //halaman detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //halaman edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //proses simpan edit
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //proses hapus
    }
}
