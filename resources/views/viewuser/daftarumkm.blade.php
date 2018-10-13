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
            <h3>LESTARI BANYUMAS</h3>
            <h5 class="light grey-text text-lighten-3">Support Your Local Wisdom</h5>
          </div>
        </li>
        <li>
          <img src="img/budaya4.jpg"> <!-- random image -->
          <div class="caption right-align">
            <h3>LESTARI BANYUMAS</h3>
            <h5 class="light grey-text text-lighten-3">Support Your Local Wisdom</h5>
          </div>
        </li>
        <li>
          <img src="img/budaya3.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>LESTARI BANYUMAS</h3>
            <h5 class="light grey-text text-lighten-3">Support Your Local Wisdom</h5>
          </div>

        </li>

      </ul>
    </div>

    <div class="row">
      @foreach ($umkm as $index => $value)


      <div class="col s3">
        <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/budaya9.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">{{$value->nama_umkm}}<i class="material-icons right">more_vert</i></span>
          <p><a href="{{route('detailumkmuser')}}">Read More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">{{$value->nama_umkm}}<i class="material-icons right">close</i></span>
          <p>{{$value->deskripsi_umkm}}</p>
        </div>
        </div>
      </div>
      @endforeach
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
      {{-- <div class="col s3">
        <div class="card">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="img/budaya10.jpg">
        </div>
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Makanan<i class="material-icons right">more_vert</i></span>
          <p><a href="#">Read More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Read More<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
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
          <p><a href="#">Read More</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Read More<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
        </div>
      </div> --}}
    </div>

    <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, instances);
    });


    </script>
@endsection
