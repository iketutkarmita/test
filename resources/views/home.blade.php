
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<h1>Produk</h1>
<table class="table table table-bordered data-table">
  <thead>
    <tr>
      
      <th scope="col">nama</th>
      <th scope="col">keterangan</th>
      <th scope="col">harga</th>
      <th scope="col">image</th>
      <th>Action</th>
    </tr>
  </thead>
  @if (isset($Produk))
        @foreach ($Produk as $p)
  <tbody>
    <tr> 
            <th>{{ $p->nama }}</th>
            <th>{{ $p->keterangan }}</th>
            <th>{{ $p->harga }}</th> 
            <th><a href="{{ $p->id }}">
                   <img src="{{ asset('storage/' . $p->image) }}" alt="Product"
                  height="320px">
             </a></th>
             <th><button class="btn-primary">edit</button> <button class="btn-danger">hapus</button></th>
            
    </tr>
    
  </tbody>
  @endforeach
      @endif
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script type="text/javascript">
        console.log('Tesss!')
    </script>

    
@stop
