@extends('utama')

@section('judul')
<h1>master supplier</h1>
@section('konten')
<p>ini tabel supplier</p>

@foreach ($barang as $item)
{{$item['kode']}} {{$item['nama']}} {{$item['satuan']}}
<br>
@endforeach
@endsection
