<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
      $mahasiswa = Mahasiswa::all();

      return view('mahasiswa/index', compact('mahasiswa'));
    }

    public function create() {
      return view('mahasiswa/create');
    }

    public function store(Request $request) {
      $requestData = $request->all();

      Mahasiswa::create($requestData);
      return redirect('mahasiswa');
    }

    public function show($id) {
      $mahasiswa = Mahasiswa::findOrFail($id);
      return view('mahasiswa/show', compact('mahasiswa'));
    }

    public function edit($id) {
      $mahasiswa = Mahasiswa::findOrFail($id);

      return view('mahasiswa/edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id) {
      $mahasiswa = Mahasiswa::findOrFail($id);
      $requestData = $request->all();

      $mahasiswa->update($requestData);

      return redirect('mahasiswa');
    }

    public function destroy($id) {
      Mahasiswa::destroy($id);

      return redirect('mahasiswa');
    }
}
