@extends('template')
@section('header')
  @include('header')
@endsection
@section('isi')
  <div class="slider fullscreen">
      <ul class="slides">
        <li>
          <img src="img/budaya1.jpg"> <!-- random image -->
          <div class="caption center-align">
            <h3>BUDAYA KITA</h3>
            <h5 class="light grey-text text-lighten-3">Support Your Local Wisdom</h5>
          </div>
        </li>
        <li>
          <img src="img/budaya4.jpg"> <!-- random image -->
          <div class="caption right-align" style="left:10%;">
            <h3>BUDAYA KITA
            </h3>
            <h5 class="light grey-text text-lighten-3">Budaya Kita adalah aplikasi berbasis
              <br>website yang menyediakan informasi tentang
              <br>keanekaragaman budaya, sejarah, wisata dan
              <br>UMKM yang ada di indonesia</h5>
          </div>
        </li>
        <li>
          <img src="img/budaya3.jpg"> <!-- random image -->
          <div class="caption left-align" style="margin-left:20px;">
            <h3>Budaya Kita

            </h3>
            <h5 class="light grey-text text-lighten-3">Budaya Kita adalah aplikasi berbasis
              <br>website yang menyediakan informasi tentang
              <br>keanekaragaman budaya, sejarah, wisata dan
              <br>UMKM yang ada di indonesia</h5>
          </div>

        </li>

      </ul>
    </div>


    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, instances);
  });


    </script>
@endsection
