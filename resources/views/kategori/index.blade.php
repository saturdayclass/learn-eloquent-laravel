@extends('app')

@section('title')
  Data Kategori
@endsection

@section('content')
  @component("alert", ["type" => "success"])
    Daftar Categories
  @endcomponent
  @foreach($kategori as $k)
    <li>{{$k->name}}</li>  
  @endforeach

  {{ $kategori->links()}}
@endsection