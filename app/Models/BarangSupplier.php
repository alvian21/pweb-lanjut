<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangSupplier extends Model
{
    use HasFactory;

    public function readbarang()
    {
        $barang = DB::table('barang')->get();
        return $barang;
    }

    public function readsupplier()
    {
        $supplier = DB::table('supplier')->get();
        return $supplier;
    }
}
