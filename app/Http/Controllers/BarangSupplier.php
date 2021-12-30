<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangSupplier as modelbarangsupplier;

class BarangSupplier extends Controller
{
   public function index(){
       $data = new modelbarangsupplier();
       $barang = $data->readbarang();
       $supplier = $data->readsupplier();
        
       print_r($barang);
       print_r($supplier);
   }
}
