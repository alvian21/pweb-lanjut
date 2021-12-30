<html>

<head>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="/supplier">Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/barang">Barang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/karyawan">Karyawan</a>
                        </li>
                </div>
            </div>
        </nav>
        <div class="row mt-2">
            <div class="col-sm-10 offset-sm-1 ">
                <form action="/barang/update" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="kodebr" class="form-label">Kode</label>
                        <input type="text" name="kode" class="form-control" required value="{{$barang->kodebr}}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required value="{{$barang->nama}}">
                    </div>
                    <div class="mb-3">

                        <label for="satuan" class="form-label">Satuan</label>
                        <input type="text" name="satuan" class="form-control" required  value="{{$barang->satuan}}">
                    </div>
                    <div class="mb-3">
                        <label for="satuan" class="form-label"> Harga Beli</label>
                        <input type="text" name="beli" class="form-control" required value="{{$barang->hargabeli}}">
                    </div>
                    <div class="mb-3">
                        <label for="hargajual" class="form-label">Harga Jual</label>
                        <input type="text" name="jual" class="form-control" required value="{{$barang->hargajual}}">
                    </div>
                    <div class="mb-3">
                        <label for="diskon" class="form-label">Diskon</label>
                        <input type="text" name="diskon" class="form-control" required value="{{$barang->diskon}}">
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="update" class="btn btn-primary text-center" name="simpan">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
    {{-- <form action="/barang/update" method="post">
        @csrf
        kode <input type="input" name="kode" required value="{{$barang->kodebr}}"><br>
        nama <input type="input" name="nama" required value="{{$barang->nama}}"><br>
        satuan <input type="input" name="satuan" required value="{{$barang->satuan}}"><br>
        harga beli <input type="input" name="beli" required value="{{$barang->hargabeli}}"><br>
        harga jual <input type="input" name="jual" required value="{{$barang->hargajual}}"><br>
        diskon <input type="input" name="diskon" required value="{{$barang->diskon}}"><br>
        <input type="submit" value="update">
    </form> --}}
</body>

</html>
