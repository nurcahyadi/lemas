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

        <img src="{{asset('storage/' .$wisatashow->foto_wisata)}}" style="width: 350px" >

        <a class="waves-effect waves-light btn-small" href="{{route('homeadminwisata')}}"><i class="material-icons left">home</i>Back to home</a>
      </div>

      <div class="col s9">
        <table class="table">

                                        <tr>
                                          <th>Nama Wisata</th>
                                          <td>{{$wisatashow->nama_wisata}}</td>
                                        </tr>

                                        <tr>
                                          <th>Deskripsi Wisata</th>
                                          <td>{{$wisatashow->deskripsi_wisata}}</td>
                                        </tr>

                                        <tr>
                                          <th>Alamat Wisata</th>
                                          <td>{{$wisatashow->alamat_wisata}}</td>
                                        </tr>

                                      </table>

      </div>

    </div>
@endsection
