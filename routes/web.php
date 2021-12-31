<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\BarangSupplier;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('tampildata',[BarangSupplier::class,'index']);
Route::get('barang',[Controller::class,'readbarang']);
Route::get('barang/caribarang/{cari}',[Controller::class,'caribarang']);
Route::get('barang/edit/{kodebr}',[Controller::class,'editbarang']);
Route::get('barang/hapus/{kodebr}',[Controller::class,'hapusbarang']);
Route::get('barang/tambah',[Controller::class,'tambahbarang']);
Route::post('barang/simpan',[Controller::class,'simpanbarang']);
Route::post('barang/update',[Controller::class,'updatebarang']);

Route::get('supplier',[Controller::class,'readsupplier']);
Route::get('supplier/tambah',[Controller::class,'tambahsupplier']);
Route::get('supplier/carisupplier/{cari}',[Controller::class,'carisupplier']);
Route::post('supplier/simpan',[Controller::class,'simpansupplier']);
Route::post('supplier/update',[Controller::class,'updatesupplier']);
Route::get('supplier/edit/{idsup}',[Controller::class,'editsupplier']);
Route::get('supplier/hapus/{idsup}',[Controller::class,'hapussupplier']);

Route::get('karyawan',[Controller::class,'readkaryawan']);
Route::get('karyawan/tambah',[Controller::class,'tambahkaryawan']);
Route::get('karyawan/carikaryawan/{cari}',[Controller::class,'carikaryawan']);
Route::post('karyawan/simpan',[Controller::class,'simpankaryawan']);
Route::post('karyawan/update',[Controller::class,'updatekaryawan']);
Route::get('karyawan/edit/{idkar}',[Controller::class,'editkaryawan']);
Route::get('karyawan/hapus/{idkar}',[Controller::class,'hapuskaryawan']);


Route::get('penjualan',[Controller::class,'readpenjualan']);
Route::get('penjualan/caripenjualan/{cari}',[Controller::class,'caripenjualan']);
Route::get('penjualan/{trj}',[Controller::class,'detailpenjualan']);
Route::get('/transaksi/penjualan',[Controller::class,'transaksi']);
Route::get('transaksimaster/{kodetr}/{tanggal}/{nama}/{telp}/{Keterangan}/{grandtotal}',[Controller::class,'transaksimasterjual']);
Route::get('transaksidetail/{kodetr}/{kode}/{harga}/{diskon}/{jumlah}',[Controller::class,'transaksidetailjual']);

Route::get('pembelian',[Controller::class,'readpembelian']);
Route::get('pembelian/caripembelian/{cari}',[Controller::class,'caripembelian']);
Route::get('pembelian/{trj}',[Controller::class,'detailpembelian']);
Route::get('/transaksi/pembelian',[Controller::class,'transaksipembelian']);
Route::get('transaksimasterbeli/{kodetr}/{tanggal}/{supplier}/{karyawan}/{grandtotal}',[Controller::class,'transaksimasterbeli']);
Route::get('transaksidetailbeli/{kodetr}/{kode}/{harga}/{diskon}/{jumlah}',[Controller::class,'transaksidetailbeli']);
