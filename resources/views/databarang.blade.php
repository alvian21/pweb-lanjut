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

        <input type="text" name="cari" id="cari" >
        <button type="submit" class="btn btn-primary" onclick="myCari()">Cari</button>
        <br>
        <a href="/barang/tambah" class="btn btn-primary mt-3">Tambah</a>
        <table border="1" class="table table-striped mt-3">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Beli</th>
                <th>Jual</th>
                <th>Diskon</th>
                <th>Nama Grup</th>
                <th>aksi</th>
            </tr>
            @foreach ($barang as $item)
            <tr>
                <td>{{$item->kodebr}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->satuan}}</td>
                <td>{{$item->hargabeli}}</td>
                <td>{{$item->hargajual}}</td>
                <td>{{$item->diskon}}</td>
                <td>{{$item->namagrup}}</td>
                <td>
                    <a href="/barang/edit/{{$item->kodebr}}" class="btn btn-warning">Edit</a>
                    <a href="/barang/hapus/{{$item->kodebr}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
<script>
    function myCari() {
        var cari = document.getElementById('cari').value;

        window.open("http://127.0.0.1:8000/barang/caribarang/"+cari+"");
    }
</script>
</body>

</html>
