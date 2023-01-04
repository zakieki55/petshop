<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index(Request $request)
    {
    $data_produk = Produk::all();
    return view('produk.index',['data_produk' => $data_produk]);
    }
    public function create(Request $request)
    {
        Produk::create($request->all());
        return redirect('/produk')->with('Sukses', 'Data berhasil di input!');
    }
    public function edit($id)
    {
        $data_produk = Produk::find($id);
        return view('produk.edit',['produk' => $data_produk]);
    }
    public function update(Request $request, $id)
    {
        $data_produk = \App\Models\Produk::find($id);
        $data_produk->update($request->all());
        return redirect('produk')->with('Sukses', 'Data berhasil di Update!');
    }
    public function delete($id)
    {
        $data_produk = \App\Models\Produk::find($id);
        $data_produk->delete();
        return redirect('/produk')->with('Sukses', 'Data berhasil di Hapus!');
    }
}
