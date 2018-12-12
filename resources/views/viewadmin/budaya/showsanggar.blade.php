@extends('template')
@include('headeradmintari')
@section('isi')
  <!-- Page Layout here -->
    <div class="row">

      <div class="col s3">
        <!-- Grey navigation panel -->
        <br>

        <img src="{{asset('storage/' .$inputsanggarshow->photo)}}" style="width: 350px" >
        <br>

        <a class="waves-effect waves-light btn-small" href="{{route('daftarsanggartari')}}"><i class="material-icons left">home</i>Back to home</a>
      </div>
      <div class="col s9">
        <table class="table">
                                        <tr>
                                          <th>Nama Sanggar tari</th>
                                          <td>{{$inputsanggarshow->name}}</td>
                                        </tr>
                                        <tr>
                                          <th>Email</th>
                                          <td>{{$inputsanggarshow->email}}</td>
                                        </tr>
                                        <tr>
                                          <th>Deskripsi</th>
                                          <td>{{$inputsanggarshow->deskripsi}}</td>
                                        </tr>
                                        <tr>
                                          <th>Nomer Telepon</th>
                                          <td>{{$inputsanggarshow->phone}}</td>
                                        </tr>
                                        <tr>
                                          <th>Alamat</th>
                                          <td>{{$inputsanggarshow->alamat}}</td>
                                        </tr>
                                        <tr>
                                          <th>Status</th>
                                          <td>{{$inputsanggarshow->status}}</td>
                                        </tr>


                                      </table>

      </div>

    </div>
@endsection
