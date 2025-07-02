<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function data()
    {
        $tugas = Tugas::all();
        return response()->json($tugas);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "List Tugas";
        $tugas = Tugas::all();
        return view('tugas.index', compact('title', 'tugas'));
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
        $request->validate([
            'judul'=> 'required|string|max:100',
            'deskripsi' => 'required|string|max:500',
        ]);

        Tugas::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->back();
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
        $tugas = Tugas::find($id);
        $tugas->delete();

        return redirect()->back();
    }
}
