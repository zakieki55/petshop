@extends('layouts.app')
@section('content')
{{-- <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" cross 
    origin="anonymous"> --}}

<body>
    <div class="container">
        @if (session('Sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('Sukses') }}
        </div>
        @endif
        <h1 class="py-3">Edit Data Produk</h1>


        <div class="row">
            <form method="post" action="/produk/{{ $produk->id 
}}/update">
                @csrf
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">ID</label>
                    <input name="id" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="ID" value="{{ $produk->id }}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="nama" value="{{ $produk->nama }}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Warna</label>
                    <input name="warna" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="warna" value="{{ $produk->warna }}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">umur</label>
                    <input name="umur" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="umur" value="{{ $produk->umur }}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Harga</label>
                    <input name="harga" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="harga" value="{{ $produk->harga }}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Keterangan</label>
                    <input name="keterangan" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="keterangan" value="{{ $produk->keterangan }}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Stok</label>
                    <input name="stok" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="stok" value="{{ $produk->stok }}">
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlTextarea1">Tanggal</label>
                    <input name="tanggal" type="date" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="tanggal" value="{{ $produk->tanggal }}">
                </div>
                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/produk" class="btn btn-danger mx-3">Cancel</a>
                </div>
            </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" cross origin="anonymous">
        </script>
</body>
@endsection