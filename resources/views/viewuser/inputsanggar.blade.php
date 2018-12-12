@extends('template')
@section('header')
  @include('header')
@endsection
@section('isi')
<br>

<div class="row">
    <form class="card col s6 offset-s3" action="/createsanggar" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="row">
        <div class="input-field col s12">
          <input name="nama" type="text" class="validate">
          <label>Nama Sanggar Tari</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" type="email" class="validate">
          <label>Email Sanggar Tari</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="password" type="password" class="validate">
          <label>Password</label>
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
