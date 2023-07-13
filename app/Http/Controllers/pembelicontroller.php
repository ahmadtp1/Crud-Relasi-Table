<?php

namespace App\Http\Controllers;

use App\Models\pembeli;
use App\Models\produk;
use Illuminate\Http\Request;

class pembelicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembeli.index')->with([
            'pembeli'=> pembeli::all(),
            'produk' => produk::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create', [
            'produk' => produk::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idpembeli' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'produk' => 'required',
        ]);

        $pembeli = new pembeli;
        $pembeli->idpembeli = $request->idpembeli;
        $pembeli->nama = $request->nama;
        $pembeli->harga = $request->harga;
        $pembeli->produk = $request->produk;
        $pembeli->save();

        return to_route('pembeli.index')->with('succes', 'data ditambah'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $pembeli = pembeli::find($id);
        if (!$pembeli) return redirect()->route('pembeli.index')
            ->with('error_message', 'pembeli dengan id = ' . $id . ' tidak ditemukan');
        return view('pembeli.edit', [
            'pembeli' => $pembeli,
            'produk' => produk::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'idpembeli' => 'required',
            'nama' => 'required',
            'harga' => 'required',
            'produk' => 'required',
        ]);

        $pembeli = pembeli::find($id);
        $pembeli->idpembeli = $request->idpembeli;
        $pembeli->nama = $request->nama;
        $pembeli->harga = $request->harga;
        $pembeli->produk = $request->produk;
        $pembeli->save();

        return to_route('pembeli.index')->with('succes', 'data ditambah'); 
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = pembeli::find($id);
        $pembeli->delete();

        return back()->with('succes', 'data dihapus');
    }
}
