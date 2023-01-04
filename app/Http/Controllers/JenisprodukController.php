<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenisproduk;

class JenisprodukController extends Controller
{
    public function index(Request $request)
    {
    $data_jenisproduk = Jenisproduk::all();
    return view('jenisproduk.index',['data_jenisproduk' => $data_jenisproduk]);
    }
    public function create(Request $request)
    {
        Jenisproduk::create($request->all());
        return redirect('/jenisproduk')->with('Sukses', 'Data berhasil di input!');
    }
    public function edit($id)
    {
        $data_jenisproduk = Jenisproduk::find($id);
        return view('jenisproduk.edit',['jenisproduk' => $data_jenisproduk]);
    }
    public function update(Request $request, $id)
    {
        $data_jenisproduk = \App\Models\Jenisproduk::find($id);
        $data_jenisproduk->update($request->all());
        return redirect('jenisproduk')->with('Sukses', 'Data berhasil di Update!');
    }
    public function delete($id)
    {
        $data_jenisproduk = \App\Models\Jenisproduk::find($id);
        $data_jenisproduk->delete();
        return redirect('/jenisproduk')->with('Sukses', 'Data berhasil di Hapus!');
    }
}
