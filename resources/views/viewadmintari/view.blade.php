@extends('template')
@include('headeradmintari')
@section('isi')
  <!-- Page Layout here -->
    <div class="row">

      <div class="col s3">
        <!-- Grey navigation panel -->
        <br>

        <img src="{{asset('storage/' .$data->photo)}}" style="width: 350px" >
        <br>

        <a class="waves-effect waves-light btn-small" href="{{route('editsanggar',['sanggar'=>$data->id])}}"><i class="material-icons left">create</i>Edit</a>
      </div>
      <div class="col s9">
        <table class="table">
                                        <tr>
                                          <th>Nama Sanggar tari</th>
                                          <td>{{$data->name}}</td>
                                        </tr>
                                        <tr>
                                          <th>Email</th>
                                          <td>{{$data->email}}</td>
                                        </tr>
                                        <tr>
                                          <th>Deskripsi</th>
                                          <td>{{$data->deskripsi}}</td>
                                        </tr>
                                        <tr>
                                          <th>Nomer Telepon</th>
                                          <td>{{$data->phone}}</td>
                                        </tr>
                                        <tr>
                                          <th>Alamat</th>
                                          <td>{{$data->alamat}}</td>
                                        </tr>
                                        <tr>
                                          <th>Status</th>
                                          <td>{{$data->status}}</td>
                                        </tr>


                                      </table>

      </div>

    </div>
@endsection
