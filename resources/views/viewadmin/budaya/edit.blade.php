@extends('template')
@section('header')
  @include('headeradmin')
@endsection
@section('isi')
<br>

<div class="row">
    <form class="card col s6 offset-s3" action="{{route('updatebudaya',['budaya'=>$budaya->id])}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
{{-- <input type="hidden" name="_method" value="PUT"> --}}
      <div class="row">
        <div class="input-field col s12">
          <input name="nama_budaya" type="text" class="validate" value="{{$budaya->nama_budaya}}">
          <label>Nama Budaya</label>
        </div>
      </div>


        <div class="input-field col s12 m6">
          <select class="icons" name="type_budaya">
            <option value="{{$budaya->id}}" disabled selected>{{$budaya->type_budaya}}</option>
            <option value="Tarian" data-icon="img/budaya9.jpg" class="left">Tarian</option>
            <option value="Makanan" data-icon="img/budaya10.jpg" class="left">Makanan</option>
            <option value="Batik" data-icon="img/budaya11.jpg" class="left">Batik</option>
          </select>
          <label>Tipe Budaya</label>
        </div>


      <div class="row">
        <div class="file-field input-field col s12">
          <div class="btn">
            <span>File</span>
            <input name="foto_budaya" type="file" value="{{asset('storage/foto/avatar.png')}}" >
          </div>
          <div class="file-path-wrapper">
           <input class="file-path validate"  type="text" placeholder="Masukan Foto Budaya">
        </div>
       </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea name="deskripsi_budaya" class="materialize-textarea">{{$budaya->deskripsi_budaya}}</textarea>
          <label>Deskripsi Budaya</label>
        </div>
      </div>
<br>
<div class="row">
  <div class="col s2 offset-s5">
    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>
  </div>
</div>

    </form>
  </div>




    <script type="text/javascript">
// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.datepicker');
//     var instances = M.Datepicker.init(elems, instances);
//   });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, instances);
  });
    </script>
@endsection
