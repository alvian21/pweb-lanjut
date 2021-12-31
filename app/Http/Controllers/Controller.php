<?php

namespace App\Http\Controllers;

// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\AnggotaModel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function readbarang()
    {
        // $barang = DB::table('barang')->get();
        $barang = DB::table('barang')->join('golonganbarang', 'barang.kodegrup', 'golonganbarang.kodegrup')->select('barang.*', 'golonganbarang.nama as namagrup')->get();

        return view('databarang', ['barang' => $barang]);
    }

    public function tambahbarang()
    {
        return view('tambahbarang');
    }


    public function editbarang($kodebr)
    {
        $barang = DB::table('barang')->where('kodebr', $kodebr)->first();

        return view('editbarang', ['barang' => $barang]);
    }

    public function updatebarang(Request $x)
    {
        $barang = DB::table('barang')->where('kodebr', $x->kode)->update([
            'nama' => $x->nama,
            'satuan' => $x->satuan,
            'hargabeli' => $x->beli,
            'hargajual' => $x->jual,
            'diskon' => $x->diskon
        ]);

        return redirect('/barang');
    }


    public function hapusbarang($kodebr)
    {
        DB::table('barang')->where('kodebr', $kodebr)->delete();

        return redirect('/barang');
    }

    public function simpanbarang(Request $request)
    {
        $this->validate($request, [
            'kodebr' => 'required|min:5|max:20',
            'nama' => 'required|min:5|max:200',
            'satuan' => 'required|min:5|max:20',
            'hargabeli' => 'required|numeric',
            'hargajual' => 'required|numeric',
            'diskon' => 'required|numeric',
        ]);
        DB::table('barang')->insert([
            'kodebr' => $request->get('kodebr'),
            'nama' => $request->get('nama'),
            'satuan' => $request->get('satuan'),
            'hargabeli' => $request->get('hargabeli'),
            'hargajual' => $request->get('hargajual'),
            'diskon' => $request->get('diskon'),
        ]);

        return redirect('/barang');
    }


    public function readsupplier()
    {
        $supplier = DB::table('supplier')->get();

        return view('datasupplier', ['supplier' => $supplier]);
    }

    public function tambahsupplier()
    {
        return view('tambahsupplier');
    }


    public function editsupplier($idsup)
    {
        $supplier = DB::table('supplier')->where('idsup', $idsup)->first();

        return view('editsupplier', ['supplier' => $supplier]);
    }


    public function hapussupplier($idsup)
    {
        DB::table('supplier')->where('idsup', $idsup)->delete();

        return redirect('/supplier');
    }

    public function simpansupplier(Request $request)
    {
        $this->validate($request, [
            'idsup' => 'required|min:5|max:20',
            'nama' => 'required|min:5|max:200',
            'telp' => 'required|min:10|max:13',
            'perusahaan' => 'required|min:5|max:200',
            'keterangan' => 'required|min:5|max:200',
        ]);
        DB::table('supplier')->insert([
            'idsup' => $request->get('idsup'),
            'nama' => $request->get('nama'),
            'telp' => $request->get('telp'),
            'perusahaan' => $request->get('perusahaan'),
            'keterangan' => $request->get('keterangan'),
        ]);

        return redirect('/supplier');
    }

    public function updatesupplier(Request $request)
    {
        DB::table('supplier')->where('idsup', $request->get('idsup'))->update([
            'nama' => $request->get('nama'),
            'telp' => $request->get('telp'),
            'perusahaan' => $request->get('perusahaan'),
            'keterangan' => $request->get('keterangan'),
        ]);

        return redirect('/supplier');
    }


    public function readkaryawan()
    {
        $karyawan = DB::table('karyawan')->get();

        return view('datakaryawan', ['karyawan' => $karyawan]);
    }

    public function tambahkaryawan()
    {
        return view('tambahkaryawan');
    }


    public function editkaryawan($idkar)
    {
        $karyawan = DB::table('karyawan')->where('idkar', $idkar)->first();

        return view('editkaryawan', ['karyawan' => $karyawan]);
    }


    public function hapuskaryawan($idkar)
    {
        DB::table('karyawan')->where('idkar', $idkar)->delete();

        return redirect('/karyawan');
    }

    public function simpankaryawan(Request $request)
    {
        $this->validate($request, [
            'idkar' => 'required|min:5|max:20',
            'nama' => 'required|min:5|max:200',
            'telp' => 'required|min:10|max:13',
            'alamat' => 'required|min:5|max:200',
            'tgllahir' => 'required',
            'jabatan' => 'required|min:5|max:200',
            'pass' => 'required|min:4|max:20',
            'mb' => 'required',
            'mk' => 'required',
            'ms' => 'required',
            'trb' => 'required',
            'lst' => 'required',
            'trj' => 'required',
        ]);
        DB::table('karyawan')->insert([
            'idkar' => $request->get('idkar'),
            'nama' => $request->get('nama'),
            'telp' => $request->get('telp'),
            'alamat' => $request->get('alamat'),
            'tgllahir' => $request->get('tgllahir'),
            'jabatan' => $request->get('jabatan'),
            'pass' => $request->get('pass'),
            'mb' => $request->get('mb'),
            'mk' => $request->get('mk'),
            'ms' => $request->get('ms'),
            'trb' => $request->get('trb'),
            'trj' => $request->get('trj'),
            'lst' => $request->get('lst')
        ]);

        return redirect('/karyawan');
    }

    public function updatekaryawan(Request $request)
    {
        DB::table('karyawan')->where('idkar', $request->get('idkar'))->update([
            'nama' => $request->get('nama'),
            'telp' => $request->get('telp'),
            'alamat' => $request->get('alamat'),
            'tgllahir' => $request->get('tgllahir'),
            'jabatan' => $request->get('jabatan'),
            'pass' => $request->get('pass'),
            'mb' => $request->get('mb'),
            'mk' => $request->get('mk'),
            'ms' => $request->get('ms'),
            'trb' => $request->get('trb'),
            'trj' => $request->get('trj'),
            'lst' => $request->get('lst')
        ]);
        return redirect('/karyawan');
    }

    public function caribarang($cari)
    {
        $barang = DB::table('barang')->where('kodebr', $cari)->get();
        return view('databarang', ['barang' => $barang]);
    }

    public function carikaryawan($cari)
    {
        $karyawan = DB::table('karyawan')->where('idkar', $cari)->get();
        return view('datakaryawan', ['karyawan' => $karyawan]);
    }

    public function carisupplier($cari)
    {
        $supplier = DB::table('supplier')->where('idsup', $cari)->get();
        return view('datasupplier', ['supplier' => $supplier]);
    }

    public function readpenjualan()
    {
        $penjualan = DB::table('masterjual')->get();

        return view('penjualan.index', ['penjualan' => $penjualan]);
    }

    public function transaksi()
    {
        $xx = new AnggotaModel();
        $barang = $xx->Readbarang();
        return view('penjualan.transaksi', ['barang' => $barang]);
    }

    public function caripenjualan($cari)
    {
        $penjualan = DB::table('masterjual')->where('trj', $cari)->get();
        return view('penjualan.index', ['penjualan' => $penjualan]);
    }

    public function detailpenjualan($trj)
    {
        $penjualan = DB::table('detailjual')->join('barang','detailjual.kodebr','barang.kodebr')->where('trj', $trj)->get();

        return view('penjualan.show', ['penjualan' => $penjualan]);
    }

    public function transaksimasterjual($kodetr, $tanggal, $nama, $telp, $Keterangan, $grandtotal)
    {
        $xx = new AnggotaModel();
        $xx->Simpanmasterpenjualan($kodetr, $tanggal, $nama, $telp, $Keterangan, $grandtotal);
    }

    public function transaksidetailjual($kodetr, $kode, $harga, $diskon, $jumlah)
    {
        $xx = new AnggotaModel();
        $xx->Simpanmasterdetailpenjualan($kodetr, $kode, $harga, $diskon, $jumlah);
    }

    public function readpembelian()
    {
        $pembelian = DB::table('masterbeli')->select('supplier.nama as nama_supplier','karyawan.nama as nama_karyawan','masterbeli.*')->join('supplier','supplier.idsup','masterbeli.idsup')->join('karyawan','karyawan.idkar','masterbeli.idkar')->get();

        return view('pembelian.index', ['pembelian' => $pembelian]);
    }

    public function caripembelian($cari)
    {
        $pembelian = DB::table('masterbeli')->select('supplier.nama as nama_supplier','karyawan.nama as nama_karyawan','masterbeli.*')->join('supplier','supplier.idsup','masterbeli.idsup')->join('karyawan','karyawan.idkar','masterbeli.idkar')->where('masterbeli.trb', $cari)->get();
        return view('pembelian.index', ['pembelian' => $pembelian]);
    }

    public function transaksipembelian()
    {
        $xx = new AnggotaModel();
        $barang = $xx->Readbarang();
        $supplier = DB::table('supplier')->get();
        $karyawan = DB::table('karyawan')->get();
        return view('pembelian.transaksi', ['barang' => $barang, 'supplier' => $supplier, 'karyawan' => $karyawan]);
    }

    public function transaksimasterbeli($kodetr, $tanggal, $supplier, $karyawan, $grandtotal)
    {
        $xx = new AnggotaModel();
        $xx->Simpanmasterpembelian($kodetr, $tanggal, $supplier, $karyawan, $grandtotal);
    }

    public function transaksidetailbeli($kodetr, $kode, $harga, $diskon, $jumlah)
    {
        $xx = new AnggotaModel();
        $xx->Simpanmasterdetailpembelian($kodetr, $kode, $harga, $diskon, $jumlah);
    }

    public function detailpembelian($trb)
    {
        $pembelian = DB::table('detailbeli')->join('barang','detailbeli.kodebr','barang.kodebr')->where('trb', $trb)->get();

        return view('pembelian.show', ['pembelian' => $pembelian]);
    }
}
