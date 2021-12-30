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
                        <li class="nav-item">
                            <a class="nav-link" href="/penjualan">Penjualan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pembelian">Pembelian</a>
                        </li>
                </div>
            </div>
        </nav>
        <input type="text" name="cari" id="cari">
        <button type="submit" class="btn btn-primary" onclick="myCari()">Cari</button>
        <br>
        <a href="/karyawan/tambah" class="btn btn-primary mt-3">Tambah</a>
        <table border="1" class="table table-striped mt-3">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Tgl Lahir</th>
                <th>Jabatan</th>
                <th>Pass</th>
                <th>Mb</th>
                <th>Mk</th>
                <th>Ms</th>
                <th>Trb</th>
                <th>Trj</th>
                <th>Lst</th>
                <th>Aksi</th>
            </tr>
            @foreach ($karyawan as $item)
            <tr>
                <td>{{$item->idkar}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->telp}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->tgllahir}}</td>
                <td>{{$item->jabatan}}</td>
                <td>{{$item->pass}}</td>
                <td>{{$item->mb}}</td>
                <td>{{$item->mk}}</td>
                <td>{{$item->ms}}</td>
                <td>{{$item->trb}}</td>
                <td>{{$item->trj}}</td>
                <td>{{$item->lst}}</td>
                <td>
                    <a href="/karyawan/edit/{{$item->idkar}}" class="btn btn-warning">Edit</a>
                    <a href="/karyawan/hapus/{{$item->idkar}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script>
        function myCari() {
            var cari = document.getElementById('cari').value;

            window.open("http://127.0.0.1:8000/karyawan/carikaryawan/"+cari+"");
        }
    </script>
</body>

</html>
