@extends('template')
@section('header')
  @include('header')
@endsection
@section('isi')
  <div class="slider">
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
          <div class="caption right-align">
            <h3>BUDAYA KITA</h3>
            <h5 class="light grey-text text-lighten-3">Support Your Local Wisdom</h5>
          </div>
        </li>
        <li>
          <img src="img/budaya3.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>BUDAYA KITA</h3>
            <h5 class="light grey-text text-lighten-3">Support Your Local Wisdom</h5>
          </div>

        </li>

      </ul>
    </div>

    <div class="row">
      <div class="col s3">
        <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/budaya9.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Tarian<i class="material-icons right">more_vert</i></span>
          <p><a href="{{route('tarian')}}">Read More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Tarian<i class="material-icons right">close</i></span>
          <p>Tarian adalah gerak tubuh secara berirama yang dilakukan di tempat dan waktu tertentu untuk keperluan pergaulan, mengungkapkan perasaan, maksud, dan pikiran.</p>
        </div>
        </div>
      </div>
      {{-- <div class="col s3">
        <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/budaya5.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Rumah Adat<i class="material-icons right">more_vert</i></span>
          <p><a href="#">Read More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Read More<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
        </div>
      </div> --}}
      <div class="col s3">
        <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/budaya10.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Makanan<i class="material-icons right">more_vert</i></span>
          <p><a href="{{route('makanan')}}">Read More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Makanan Daerah<i class="material-icons right">close</i></span>
          <p>Makanan khas daerah adalah makanan yang biasa di konsumsi di suatu daerah. Karakter masakan di suatu daerah biasanya mencerminkan karakter masyarakatnya.</p>
        </div>
        </div>
      </div>

      <div class="col s3">
        <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/budaya11.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Batik<i class="material-icons right">more_vert</i></span>
          <p><a href="{{route('batik')}}">Read More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Batik<i class="material-icons right">close</i></span>
          <p>Batik adalah kain bergambar yang pembuatannya secara khusus dengan menuliskan atau menerakan malam pada kain itu, kemudian pengolahannya diproses dengan cara tertentu yang memiliki kekhasan.</p>
        </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, instances);
    });


    </script>
@endsection
