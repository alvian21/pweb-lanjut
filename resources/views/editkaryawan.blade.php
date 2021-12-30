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
                <form action="/karyawan/update" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="idkar" class="form-label">Kode</label>
                        <input type="text" value="{{$karyawan->idkar}}" name="idkar" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" value="{{$karyawan->nama}}" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Telp</label>
                        <input type="text"  value="{{$karyawan->telp}}"  name="telp" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text"  value="{{$karyawan->alamat}}" name="alamat" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgllahir" class="form-label">Tgl Lahir</label>
                        <input type="date" value="{{$karyawan->tgllahir}}" name="tgllahir" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" value="{{$karyawan->jabatan}}" name="jabatan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="text" value="{{$karyawan->pass}}" name="pass" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="mb" class="form-label">Mb:</label>
                        <input type="text" name="mb" value="{{$karyawan->mb}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="mk" class="form-label">Mk</label>
                        <input type="text" name="mk" value="{{$karyawan->mk}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="ms" class="form-label">Ms</label>
                        <input type="text" name="ms" value="{{$karyawan->ms}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="trb" class="form-label">Trb</label>
                        <input type="text" name="trb" value="{{$karyawan->trb}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="trj" class="form-label">Trb</label>
                        <input type="text" name="trj" value="{{$karyawan->trj}}" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="lst" class="form-label">Lst</label>
                        <input type="text" name="lst" value="{{$karyawan->lst}}"  class="form-control" required>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <input type="submit" value="update" class="btn btn-primary text-center" name="update">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <form action="/karyawan/update" method="post">
        @csrf
        Kode :
        <input type="text" name="idkar" value="{{$karyawan->idkar}}" required>
        <br>
        Nama:
        <input type="text" name="nama" value="{{$karyawan->nama}}" required>
        <br>
        Telp:
        <input type="text" name="telp" value="{{$karyawan->telp}}" required>
        <br>
        Alamat:
        <input type="text" name="alamat" value="{{$karyawan->alamat}}" required>
        <br>
        Tgl Lahir:
        <input type="date" name="tgllahir" value="{{$karyawan->tgllahir}}" required>
        <br>
        Jabatan:
        <input type="text" name="jabatan" value="{{$karyawan->jabatan}}" required>
        <br>
        Password:
        <input type="text" name="pass" value="{{$karyawan->pass}}" required>
        <br>
        Mb:
        <input type="text" name="mb" value="{{$karyawan->mb}}" required>
        <br>
        Mk:
        <input type="text" name="mk" value="{{$karyawan->mk}}" required>
        <br>
        Ms:
        <input type="text" name="ms" value="{{$karyawan->ms}}" required>
        <br>
        Trb:
        <input type="text" name="trb" value="{{$karyawan->trb}}" required>
        <br>
        Trj:
        <input type="text" name="trj" value="{{$karyawan->trj}}" required>
        <br>
        Lst:
        <input type="text" name="lst" value="{{$karyawan->lst}}" required>
        <br>
        <input type="submit" value="simpan" name="simpan">
    </form> --}}
</body>

</html>
