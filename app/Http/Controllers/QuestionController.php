<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    // INI KODE VALIDASINYA
    $request->validate([
        'nama' => 'required|max:10',
        'email' => 'required|email',
        'pertanyaan' => 'required|max:300|min:8',
    ], [
        'nama.required' => 'Nama tidak boleh kosong',
        'nama.max' => 'Nama maksimal 10 karakter',
        'email.required' => 'Email tidak boleh kosong',
        'email.email' => 'Format email tidak valid',
        'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
        'pertanyaan.max' => 'Pertanyaan maksimal 300 karakter',
        'pertanyaan.min' => 'Pertanyaan minimal 8 karakter',
    ]);

    $data = [
        'nama' => $request->nama,
        'email' => $request->email,
        'pertanyaan' => $request->pertanyaan,
    ];

    return view('home-question-respon', $data);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
