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
        <a href="/supplier/tambah" class="btn btn-primary mt-3">Tambah</a>
        <table border="1"  class="table table-striped mt-3">
            <tr>
                <th>Idsup</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Perusahaan</th>
                <th>Keterangan</th>
                <th>aksi</th>
            </tr>
            @foreach ($supplier as $item)
            <tr>
                <td>{{$item->idsup}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->telp}}</td>
                <td>{{$item->perusahaan}}</td>
                <td>{{$item->keterangan}}</td>

                <td>
                    <a href="/supplier/edit/{{$item->idsup}}" class="btn btn-warning">Edit</a>
                    <a href="/supplier/hapus/{{$item->idsup}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <script>
        function myCari() {
            var cari = document.getElementById('cari').value;

            window.open("http://127.0.0.1:8000/supplier/carisupplier/"+cari+"");
        }
    </script>
</body>

</html>
