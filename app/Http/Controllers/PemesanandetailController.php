<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pemesanandetail;

class PemesanandetailController extends Controller
{
    public function index(Request $request)
    {
    $data_pemesanandetail = Pemesanandetail::all();
    return view('pemesanandetail.index',['data_pemesanandetail' => $data_pemesanandetail]);
    }

    public function create(Request $request)
    {
        Pemesanandetail::create($request->all());
        return redirect('/pemesanandetail')->with('Sukses', 'Data berhasil di input!');
    }
    public function edit($id)
    {
        $data_pemesanandetail = Pemesanandetail::find($id);
        return view('pemesanandetail.edit',['pemesanandetail' => $data_pemesanandetail]);
    }
    public function update(Request $request, $id)
    {
        $data_pemesanandetail = \App\Models\Pemesanandetail::find($id);
        $data_pemesanandetail->update($request->all());
        return redirect('pemesanandetail')->with('Sukses', 'Data berhasil di Update!');
    }
    public function delete($id)
    {
        $data_pemesanandetail = \App\Models\Pemesanandetail::find($id);
        $data_pemesanandetail->delete();
        return redirect('/pemesanandetail')->with('Sukses', 'Data berhasil di Hapus!');
    }
}
