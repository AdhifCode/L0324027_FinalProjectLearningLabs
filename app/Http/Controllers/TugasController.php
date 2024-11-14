<?php

namespace App\Http\Controllers;

use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $tugases = Tugas::all();
        return view('tugases.index', compact('tugases'));
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required|string|max:255']);
        Tugas::create($request->all());
        return redirect()->route('tugases.index');
    }

    public function destroy(Tugas $Tugas)
    {
        $Tugas->delete();
        return redirect()->route('tugases.index');
    }
}

