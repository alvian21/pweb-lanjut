<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnggotaModel extends Model
{
    use HasFactory;
    public function Readbarang()
    {
        $barang = DB::table('barang')->get();
        return $barang;
    }
    public function Simpanmasterpenjualan($kodetr, $tanggal, $nama, $telp, $Keterangan, $grandtotal)
    {
        DB::table('masterjual')->insert([
            'trj' => $kodetr,
            'tanggal' => $tanggal,
            'namacustomer' => $nama,
            'telpcustomer' => $telp,
            'keterangan' => $Keterangan,
            'grandtotal' => $grandtotal
        ]);
    }

    public function Simpanmasterdetailpenjualan($kodetr, $kode, $harga, $diskon, $jumlah)
    {
        DB::table('detailjual')->insert([
            'trj' => $kodetr,
            'kodebr' => $kode,
            'hargajual' => $harga,
            'jumlah' => $jumlah,
            'diskon' => $diskon
        ]);
    }

    public function Simpanmasterpembelian($kodetr, $tanggal, $supplier, $karyawan, $grandtotal)
    {
        DB::table('masterbeli')->insert([
            'trb' => $kodetr,
            'tanggal' => $tanggal,
            'idsup' => $supplier,
            'idkar' => $karyawan,
            'grandtotal' => $grandtotal
        ]);
    }

    public function Simpanmasterdetailpembelian($kodetr, $kode, $harga, $diskon, $jumlah)
    {
        DB::table('detailbeli')->insert([
            'trb' => $kodetr,
            'kodebr' => $kode,
            'hargabeli' => $harga,
            'jumlah' => $jumlah,
            'diskon' => $diskon
        ]);
    }

}
