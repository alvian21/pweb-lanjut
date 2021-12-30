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
                <form action="/karyawan/simpan" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="idkar" class="form-label">Kode</label>
                        <input type="text" name="idkar" class="form-control" value="{{old('idkar')}}">
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
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{old('alamat')}}">
                    </div>
                    <div class="mb-3">
                        <label for="tgllahir" class="form-label">Tgl Lahir</label>
                        <input type="date" name="tgllahir" class="form-control" value="{{old('tgllahir')}}">
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="{{old('jabatan')}}">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="text" name="pass" class="form-control" value="{{old('pass')}}">
                    </div>
                    <div class="mb-3">
                        <label for="mb" class="form-label">Mb:</label>
                        <input type="text" name="mb" class="form-control" value="{{old('mb')}}">
                    </div>
                    <div class="mb-3">
                        <label for="mk" class="form-label">Mk</label>
                        <input type="text" name="mk" class="form-control" value="{{old('mk')}}">
                    </div>
                    <div class="mb-3">
                        <label for="ms" class="form-label">Ms</label>
                        <input type="text" name="ms" class="form-control" value="{{old('ms')}}">
                    </div>
                    <div class="mb-3">
                        <label for="trb" class="form-label">Trb</label>
                        <input type="text" name="trb" class="form-control" value="{{old('trb')}}">
                    </div>
                    <div class="mb-3">
                        <label for="trj" class="form-label">Trb</label>
                        <input type="text" name="trj" class="form-control" value="{{old('trj')}}">
                    </div>
                    <div class="mb-3">
                        <label for="lst" class="form-label">Lst</label>
                        <input type="text" name="lst" class="form-control" value="{{old('lst')}}">
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
