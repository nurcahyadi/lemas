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

        <img src="{{asset('storage/' .$sejarahshow->foto_sejarah)}}" style="width: 350px" >

        <a class="waves-effect waves-light btn-small" href="{{route('homeadminsejarah')}}"><i class="material-icons left">home</i>Back to home</a>
      </div>

      <div class="col s9">
        <table class="table">

                                        <tr>
                                          <th>Nama Wisata</th>
                                          <td>{{$sejarahshow->nama_sejarah}}</td>
                                        </tr>

                                        <tr>
                                          <th>Deskripsi Wisata</th>
                                          <td>{{$sejarahshow->deskripsi_sejarah}}</td>
                                        </tr>



                                      </table>

      </div>

    </div>
@endsection
