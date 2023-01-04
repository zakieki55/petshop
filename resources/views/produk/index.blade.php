<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('Petshop', 'Petshop') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="falsearia-label=" {{ __('Toggle navigation') }}">

                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pemesanandetail">Data Pemesanan Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk">Data Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jenisproduk">Data Jenis Produk</a>
                    </li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{oute('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>
    <div class="container mt-3">
        @if (session('Sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('Sukses') }}
        </div>
        @endif
        <div class="row">
            <div class="col-6 my-3">
                <h1>Data Produk</h1>
            </div>
            <div class="col-6 my-4" align="right">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table table-hover">
                    <thead>
                        <tr>
                            <th>ID Produk</th>
                            <th>Nama Produk</th>
                            <th>Warna</th>
                            <th>Umur</th>
                            <th>Harga</th>
                            <th>keterangan</th>
                            <th>Stok</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @foreach ($data_produk as $produk)
                    <tbody>
                        <tr>
                            <td>{{ $produk->id }}</td>
                            <td>{{ $produk->nama }}</td>
                            <td>{{ $produk->warna }}</td>
                            <td>{{ $produk->umur }}</td>
                            <td>{{ $produk->harga }}</td>
                            <td>{{ $produk->keterangan }}</td>
                            <td>{{ $produk->stok }}</td>
                            <td>{{ $produk->tanggal }}</td>
                            <td><a href="/produk/{{$produk->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/produk/delete/{{$produk->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus data?')">Delete</a>
                            </td>

                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal
                        title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add.prdk') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">ID</label>
                            <input name="id" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="ID">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="nama">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Warna</label>
                            <input name="warna" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="warna">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">umur</label>
                            <input name="umur" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="umur">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Harga</label>
                            <input name="harga" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="harga">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Keterangan</label>
                            <input name="keterangan" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="keterangan">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Stok</label>
                            <input name="stok" type="text" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="stok">
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Tanggal</label>
                            <input name="tanggal" type="date" class="form-control mt-2" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="tanggal">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>