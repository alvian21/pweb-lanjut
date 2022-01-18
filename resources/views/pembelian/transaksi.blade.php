<!DOCTYPE html>
<html>

<head>
    <title>Pembelian</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <h3> Pembelian</h3>
            </div>
        </div>
        <form class="form-horizontal">
            <?php date_default_timezone_set('Asia/Jakarta'); ?>
            <div class="form-group">
                <label class="col-sm-2 control-label">Tanggal</label>
                <div class="col-sm-4">
                    <input type="date" id="tanggal" name="Tanggal" value="<?php echo date("Y-m-d") ?>"
                        class="form-control" required="">
                </div>
            </div>

            <div class="form-group">
                <label for="karyawan">Karyawan</label>
                <div class="col-sm-4">
                    <select class="form-control" id="karyawan" name="karyawan">
                        @forelse ($karyawan as $item)
                        <option value="{{$item->idkar}}">{{$item->nama}}</option>

                        @empty

                        @endforelse
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="supplier">Supplier</label>
                <div class="col-sm-4">
                    <select class="form-control" id="supplier" name="supplier">
                        @forelse ($supplier as $item)
                        <option value="{{$item->idsup}}">{{$item->nama}}</option>

                        @empty

                        @endforelse
                    </select>
                </div>
            </div>


        </form>


        <form>
            <div class="row">



                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode</label>
                        <input type="text" id="kode" name="kode" class="form-control" readonly required="">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" readonly required="">
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <label>Satuan</label>
                        <input type="text" id="satuan" name="satuan" class="form-control" readonly required="">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" id="harga" name="harga" class="form-control" readonly required="">
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input type="number" id="jumlah" name="jumlah" value="0" class="form-control" required="">
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Total</label>
                        <input type="number" id="total" name="total" value="0" class="form-control" readonly
                            required="">
                    </div>
                </div>

                <div class="col-sm-1">
                    <div class="form-group">
                        <label> </label><br>
                        <button type="submit" class="btn btn-success add-btn">Add</button>
                    </div>
                </div>



            </div>
        </form>
        <br>
        <table class="table table-bordered data-table" id="myTableisi">
            <thead>
                <th>Kode</th>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>Diskon</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Action</th>
            </thead>
            <tbody>

            </tbody>
        </table>

        <div class="row">
            <div class="col-sm-8">
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Grand Total</label>
                    <input type="number" id="grandtotal" name="grandtotal" value="0" class="form-control" readonly
                        required="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Bayar</label>
                    <input type="number" id="bayar" name="bayar" value="0" class="form-control" required="">
                </div>
            </div>
        </div>


        <div class="row" style="padd">



            <div class="col-sm-1">
                <button type="submit" class="btn btn-success save-btn">Save</button>
            </div>

            <div class="col-sm-1">
                <button type="submit" class="btn btn-success cancel-btn">Cancel</button>
            </div>

            <div class="col-sm-6">
                <div id="divstatus"></div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kembali</label>
                    <input type="number" id="kembali" name="kembali" value="0" readonly class="form-control"
                        required="">
                </div>
            </div>
        </div>

    </div>







    <div class="modal fade" id="mymodalbarang" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="model-title"> Data Barang </h4>
                </div>

                <div class="modal-body">

                    <table border="1" class="table" id="myTable">
                        <tr>
                            <th>kode</th>
                            <th>nama</th>
                            <th>satuan</th>
                            <th>beli</th>
                            <th>diskon</th>
                            <th>action</th>
                        </tr>
                        @foreach($barang as $row)

                        <tr>
                            <td>{{$row->kodebr}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->satuan}}</td>
                            <td>{{$row->hargabeli}}</td>
                            <td>{{$row->diskon}}</td>

                            <td>
                                <button class='btn btn-danger btn-xs btn-pilih'>pilih</button>

                            </td>
                        </tr>
                        @endforeach
                    </table>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- Final Modal -->
        </div>
    </div>


    </div>
    <script type="text/javascript">
        $("body").on("click", ".cancel-btn", function () {
            window.location = "http://127.0.0.1:8000/transaksi";
        });

        $("body").on("click", ".save-btn", function () {

            savedata();


        });

        $("#kode").click(function () {
            $('#mymodalbarang').modal('show');
        });

        $("#jumlah").change(function () {
            var harga = parseFloat($("#harga").val()).toFixed(2);
            var jumlah = parseFloat($("#jumlah").val()).toFixed(2);
            var diskon = 0;
            var totalnya = parseFloat(((100 - diskon) / 100) * jumlah * harga).toFixed(2);
            $("#total").val(totalnya);

        });

        $("#bayar").change(function () {
            var grandtotal = $("#grandtotal").val();
            var bayar = $("#bayar").val();
            $("#kembali").val(bayar - grandtotal);
        });

        $("form").submit(function (e) {
            e.preventDefault();
            var kode = $("input[name='kode']").val();
            var nama = $("input[name='nama']").val();
            var satuan = $("input[name='satuan']").val();
            var harga = $("input[name='harga']").val();
            var diskon =0;
            var jumlah = $("input[name='jumlah']").val();
            var total = $("input[name='total']").val();
            $(".data-table tbody").append("<tr data-kode='" + kode + "' data-nama='" + nama +
                "' data-satuan='" + satuan + "' data-harga='" + harga + "' data-diskon='" + diskon +
                "' data-jumlah='" + jumlah + "' data-total='" + total + "'><td>" + kode + "</td><td>" +
                nama + "</td><td>" + satuan + "</td><td>" + harga + "</td><td>" + diskon + "</td><td>" +
                jumlah + "</td><td>" + total +
                "</td><td><button class='btn btn-danger btn-xs btn-delete'>Delete</button></td></tr>");
            calculateColumn(6);

            $("#kode").val("");
            $("#nama").val("");
            $("#satuan").val("");
            $("#harga").val("");
            $("#diskon").val("0");

            $("#jumlah").val("0");
            $("#total").val("0");

        });

        $("#myTable").on("click", ".btn-pilih", function () {
            var currentRow = $(this).closest("tr");
            var kode1 = currentRow.find("td:eq(0)").html();
            var nama1 = currentRow.find("td:eq(1)").html();
            var satuan1 = currentRow.find("td:eq(2)").html();
            var harga1 = currentRow.find("td:eq(3)").html();
            var diskon1 = 0;
            $("#kode").val(kode1);
            $("#kode").val(kode1);
            $("#nama").val(nama1);
            $("#satuan").val(satuan1);
            $("#harga").val(harga1);
            $("#diskon").val(diskon1);

            var harga = parseFloat($("#harga").val()).toFixed(2);
            var jumlah = parseFloat($("#jumlah").val()).toFixed(2);
            var diskon = 0;
            var totalnya = parseFloat(((100 - diskon) / 100) * jumlah * harga).toFixed(2);
            $("#total").val(totalnya);



            $('#mymodalbarang').modal('hide');


        });

        $("body").on("click", ".btn-delete", function () {
            $(this).parents("tr").remove();
            calculateColumn(5);
        });

        function calculateColumn(index) {
            var bayar = $("#bayar").val();
            var total = 0;
            $('table tr').each(function () {
                var value = parseInt($('td', this).eq(index).text());
                if (!isNaN(value)) {
                    total += value;

                }
            });

            $("#grandtotal").val(total);
            $("#kembali").val(bayar - total);
        }

        function savedata() {
            var kodetr = 'trb' + '<?php echo date("Ymd").date("His") ?>';
            var tanggal = $("#tanggal").val();
            var supplier = $("#supplier").val();
            var karyawan = $("#karyawan").val();
            var keterangan = $("#keterangan").val();
            var grandtotal = $("#grandtotal").val();
            console.log(kodetr);
            console.log(tanggal);
            console.log(supplier);
            console.log(karyawan);
            console.log(keterangan);
            console.log(grandtotal);


            $.get('http://127.0.0.1:8000/transaksimasterbeli/' + kodetr + '/' + tanggal + '/' + supplier + '/' +
                karyawan + '/' + grandtotal + '',
                function () {

                });
            console.log('http://127.0.0.1:8000/transaksimasterbeli/' + kodetr + '/' + tanggal + '/' + supplier + '/' +
                karyawan + '/' + grandtotal);

            $('#myTableisi tr').each(function () {
                var kode = $('td', this).eq(0).text();
                var nama = $('td', this).eq(1).text();
                var satuan = $('td', this).eq(2).text();
                var harga = $('td', this).eq(3).text();
                var diskon =0;
                var jumlah = $('td', this).eq(5).text();

                if (kode != "") {
                    console.log(kode);
                    console.log(nama);
                    console.log(satuan);
                    console.log(harga);
                    console.log(diskon);
                    console.log(jumlah);
                    $.get('http://127.0.0.1:8000/transaksidetailbeli/' + kodetr + '/' + kode + '/' + harga + '/' +
                        diskon + '/' + jumlah,
                        function () {});

                    console.log('http://127.0.0.1:8000/transaksidetailbeli/' + kodetr + '/' + kode + '/' + nama +
                        '/' + satuan + '/' + harga + '/' + diskon + '/' + jumlah)
                }

            });


           setTimeout(() => {
            window.location = "http://127.0.0.1:8000/pembelian";
           }, 1500);
        }

    </script>
</body>

</html>
