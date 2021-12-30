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


        <div class="row mt-2">
            <div class="col-md-12 text-center">
               <h3> Detail Penjualan</h3>
            </div>
        </div>


        <table border="1" class="table table-striped mt-3">
            <tr>
                <th>Kode</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Jual</th>
                <th>Jumlah</th>
                <th>Diskon</th>
                <th>Subtotal</th>
            </tr>
            @foreach ($penjualan as $item)
            @php
                $subtotal = ($item->hargajual * $item->jumlah) - ($item->diskon * $item->hargajual*$item->jumlah/100);
            @endphp
            <tr>
                <td>{{$item->trj}}</td>
                <td>{{$item->kodebr}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->hargajual}}</td>
                <td>{{$item->jumlah}}</td>
                <td>{{$item->diskon}}%</td>
                <td>{{$subtotal}}</td>
            </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
