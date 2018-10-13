@extends('template')
@section('header')
  @include('headeradmin')
@endsection
@section('isi')
  <!-- Page Layout here -->
    <div class="row">

      <div class="col s3">
        <!-- Grey navigation panel -->
        <br>

        <img src="{{asset('storage/' .$umkmshow->foto_umkm)}}" style="width: 350px" >

        <a class="waves-effect waves-light btn-small" href="{{route('homeadminumkm')}}"><i class="material-icons left">home</i>Back to home</a>
      </div>

      <div class="col s9">
        <table class="table">

                                        <tr>
                                          <th>Nama Wisata</th>
                                          <td>{{$umkmshow->nama_umkm}}</td>
                                        </tr>

                                        <tr>
                                          <th>Deskripsi Wisata</th>
                                          <td>{{$umkmshow->deskripsi_umkm}}</td>
                                        </tr>

                                        <tr>
                                          <th>Alamat Wisata</th>
                                          <td>{{$umkmshow->alamat_umkm}}</td>
                                        </tr>

                                      </table>

      </div>

    </div>
@endsection
