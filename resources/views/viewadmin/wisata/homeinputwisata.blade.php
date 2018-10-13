@extends('template')
@section('header')
  @include('headeradmin')
@endsection
@section('isi')
<style media="screen">
  .margin{
    margin-top: 10px;
  }
</style>
<head>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>


</head>
<div class="pad ">


  <table id="table_id" class="display responsive-table">
          <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Wisata</th>
                <th>Deskripsi Wisata</th>
                <th>Action</th>
                <th>Konfirmasi</th>
                <th>Status</th>

            </tr>
          </thead>

          <tbody>
            @foreach ($inputwisata as $index => $value)
            <tr>
              <td>{{++$index}}</td>
              <td><img src="{{asset('storage/'.$value->foto)}}" style="width: 100px"></td>
              <td>{{$value->nama}}</td>
              <td>{{$value->deskripsi}}</td>

              <td>
                <table>
                    <a href="{{route('detailinputwisata',['detailinputwisata'=>$value->id])}}"><button class="btn btn-success btn-small green accent-4">Show</button></a>
                                 <br>
                    {{-- <a href="{{route('useredit',['useredit'=>$value->id])}}"><button class="btn btn-warning btn-small margin">Edit</button></a>
                                <br> --}}

                                <form action="/deleteinputwisata/{{$value->id}}" method="post">
                                                      {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger btn-small red accent-4 margin">Delete</button>
                                </form>
                </table>

              </td>
              <td>
                <table>
                  <form action="{{route('konfirmasi',['konfirmasi'=>$value->id])}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PUT">
                      <button class="btn btn-success btn-small green accent-4">Setujui</button>
                  </form>


                </table>

              </td>
              <td>{{$value->status}}</td>
            </tr>

              @endforeach
          </tbody>
        </table>
</div>


<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );


$('#myTable').DataTable( {
    responsive: true
} );

</script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
@endsection
