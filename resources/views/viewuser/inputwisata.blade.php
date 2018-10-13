@extends('template')
@section('header')
  @include('header')
@endsection
@section('isi')
<br>

<div class="row">
    <form class="card col s6 offset-s3" action="/createinputwisata" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="row">
        <div class="input-field col s12">
          <input name="nama" type="text" class="validate">
          <label>Nama Wisata</label>
        </div>
      </div>

      <div class="row">
        <div class="file-field input-field col s12">
          <div class="btn">
            <span>File</span>
            <input name="foto" type="file" value="{{asset('storage/foto/avatar.png')}}" >
          </div>
          <div class="file-path-wrapper">
           <input class="file-path validate"  type="text" placeholder="Masukan Foto Wisata">
        </div>
       </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea name="deskripsi" class="materialize-textarea"></textarea>
          <label>Deskripsi Wisata</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <textarea name="alamat" class="materialize-textarea"></textarea>
          <label>Alamat Wisata</label>
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
