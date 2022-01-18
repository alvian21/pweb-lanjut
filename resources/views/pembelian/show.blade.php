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
               <h3> Detail Pembelian</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h6>Kode Transaksi : {{$pembelian->trb}}</h6>
                <h6>Tanggal : {{$pembelian->tanggal}}</h6>
                <h6>Nama Karyawan : {{$pembelian->nama_karyawan}}</h6>
                <h6>Nama Supplier : {{$pembelian->nama_supplier}}</h6>
                <h6>Grand Total : {{$pembelian->grandtotal}}</h6>
            </div>
        </div>
        <table border="1" class="table table-striped mt-3">
            <tr>
                <th>Kode</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga Jual</th>
                <th>Jumlah</th>

                <th>Subtotal</th>
            </tr>
            @foreach ($detail as $item)
            @php
                $subtotal = ($item->hargabeli * $item->jumlah) ;
            @endphp
            <tr>
                <td>{{$item->trb}}</td>
                <td>{{$item->kodebr}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->hargabeli}}</td>
                <td>{{$item->jumlah}}</td>

                <td>{{$subtotal}}</td>
            </tr>
            @endforeach

        </table>
    </div>

</body>

</html>
