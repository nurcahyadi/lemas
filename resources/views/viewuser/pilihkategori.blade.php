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
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="img/budaya4.jpg"> <!-- random image -->
          <div class="caption right-align">
            <h3>Right Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="img/budaya3.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Left Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>

        </li>

      </ul>
    </div>

<div class="row">
  <div class="col s6 ">
    <div class="card horizontal">
      <div class="card-image">
        <img src="img/budaya1.jpg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>


  <div class="col s6 ">
    <div class="card horizontal">
      <div class="card-image">
        <img src="img/budaya1.jpg">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col s6 ">
      <div class="card horizontal">
        <div class="card-image">
          <img src="img/budaya1.jpg">
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
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
