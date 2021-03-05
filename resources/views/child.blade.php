@extends("app")

@section("title")
  Aplikasi Toko Online
@endsection

@section("content")
  Content dari child view

  @component("alert")
  Alert - Latihan berhasil
  @endcomponent

  @component("alert", ["type" => "success"])
  Alert - success
  @endcomponent

@endsection