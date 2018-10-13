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

        <img src="{{asset('storage/' .$budayashow->foto_budaya)}}" style="width: 350px" >

        <a class="waves-effect waves-light btn-small" href="{{route('homeadminbudaya')}}"><i class="material-icons left">home</i>Back to home</a>
      </div>

      <div class="col s9">
        <table class="table">
                                        <tr>
                                          <th>Tipe Budaya</th>
                                          <td>{{$budayashow->type_budaya}}</td>
                                        </tr>
                                        <tr>
                                          <th>Nama Budaya</th>
                                          <td>{{$budayashow->nama_budaya}}</td>
                                        </tr>

                                        <tr>
                                          <th>Deskripsi Budaya</th>
                                          <td>{{$budayashow->deskripsi_budaya}}</td>
                                        </tr>

                                      </table>

      </div>

    </div>
@endsection
