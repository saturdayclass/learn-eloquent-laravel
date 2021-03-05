TODO: Tampilkan semua list categori
<!-- @foreach($kategori as $k) 
@endforeach -->

@extends('app')

@section('content')
  @component("alert", ["type" => "success"])
    Daftar Categories
  @endcomponent
  @foreach($kategori as $k)
    <li>{{$k->name}}</li>  
  @endforeach

  {{ $kategori->links()}}
@endsection