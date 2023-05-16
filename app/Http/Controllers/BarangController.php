<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $barang = Barang::get();
        return view('view_page', compact('barang'));
    }

    public function create(){
        return view('add_page');
    }

    public function store(Request $request){
        Barang::create($request->all());

        return redirect()->route('barang.index');
    }

    public function edit(Barang $barang){
        return view('add_page', compact('barang'));
    }

    public function update(Request $request, Barang $barang){
        $barang->update($request->all());

        return redirect()->route('barang.index');
    }

    public function destroy(Barang $barang){
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
