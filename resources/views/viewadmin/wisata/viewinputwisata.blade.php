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

        <img src="{{asset('storage/' .$inputwisatashow->foto)}}" style="width: 350px" >

        <a class="waves-effect waves-light btn-small" href="{{route('homeadmininputwisata')}}"><i class="material-icons left">home</i>Back to home</a>
      </div>

      <div class="col s9">
        <table class="table">

                                        <tr>
                                          <th>Nama Wisata</th>
                                          <td>{{$inputwisatashow->nama}}</td>
                                        </tr>

                                        <tr>
                                          <th>Deskripsi Wisata</th>
                                          <td>{{$inputwisatashow->deskripsi}}</td>
                                        </tr>

                                        <tr>
                                          <th>Alamat Wisata</th>
                                          <td>{{$inputwisatashow->alamat}}</td>
                                        </tr>

                                      </table>

      </div>

    </div>
@endsection
