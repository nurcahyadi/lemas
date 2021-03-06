@extends('template')
@section('header')
  @include('headeradmin')
@endsection
@section('isi')

<div class="pad">
<a href="/toumkm"> <button type="button" class="btn btn-primary" style="text-align:center;  margin-right:20px; margin-top:20px; margin-bottom:20px;">Tambah</button></a>

  <table id="table_id" class="display responsive-table">
          <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama UMKM</th>
                <th>Deskripsi</th>
                <th>Action</th>

            </tr>
          </thead>

          <tbody>
            @foreach ($umkm as $index => $value)
            <tr>
              <td>{{++$index}}</td>
              <td><img src="{{asset('storage/'.$value->foto_umkm)}}" style="width: 100px"></td>
              <td>{{$value->nama_umkm}}</td>
              <td>{{$value->deskripsi_umkm}}</td>

              <td>
                <table>
                    <a href="{{route('detailumkm',['umkmshow'=>$value->id])}}"><button class="btn btn-success btn-small green accent-4">Show</button></a>
                                 &nbsp;
                    <a href="{{route('editumkm',['umkm'=>$value->id])}}"><button class="btn btn-warning btn-small">Edit</button></a>
                                &nbsp;

                                <form action="/deleteumkm/{{$value->id}}" method="post">
                                                      {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger btn-small red accent-4 margin">Delete</button>
                                </form>
                </table>

              </td>
            </tr>

              @endforeach
          </tbody>
        </table>

</div>

<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
@endsection
