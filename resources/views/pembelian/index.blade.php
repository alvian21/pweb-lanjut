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
        <a href="/transaksi/pembelian" class="btn btn-primary mt-3">Tambah</a>
        <table border="1" class="table table-striped mt-3">
            <tr>
                <th>Kode</th>
                <th>Tanggal</th>
                <th>Karyawan</th>
                <th>Supplier</th>
                <th>Grandtotal</th>
                <th>Aksi</th>
            </tr>
            @php
                $total = 0;
            @endphp
            @foreach ($pembelian as $item)
            @php
                $total += $item->grandtotal;
            @endphp
            <tr>
                <td>{{$item->trb}}</td>
                <td>{{$item->tanggal}}</td>
                <td>{{$item->nama_karyawan}}</td>
                <td>{{$item->nama_supplier}}</td>
                <td>{{$item->grandtotal}}</td>
                <td>
                    <a href="/pembelian/{{$item->trb}}" class="btn btn-info">Detail</a>
                </td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-center">Total</td>
                <td>{{$total}}</td>
            </tr>
        </table>
    </div>
<script>
    function myCari() {
        var cari = document.getElementById('cari').value;

        window.open("http://127.0.0.1:8000/pembelian/caripembelian/"+cari+"");
    }
</script>
</body>

</html>
