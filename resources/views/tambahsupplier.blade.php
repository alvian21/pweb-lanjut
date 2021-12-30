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
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="/supplier/simpan" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="idsup" class="form-label">Kode</label>
                        <input type="text" name="idsup" class="form-control" value="{{old('idsup')}}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{old('nama')}}">
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Telp</label>
                        <input type="text" name="telp" class="form-control" value="{{old('telp')}}">
                    </div>
                    <div class="mb-3">
                        <label for="perusahaan" class="form-label">Perusahaan</label>
                        <input type="text" name="perusahaan" class="form-control" value="{{old('perusahaan')}}">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control" value="{{old('keterangan')}}">
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="simpan" class="btn btn-primary text-center" name="simpan">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

</body>

</html>
