@extends('template')
@section('header')
  @include('header')
@endsection

@section('isi')
  <style>
     /* Set the size of the div element that contains the map */
     #map {
       height: 610px;  /* The height is 400 pixels */
       width: 100%;  /* The width is the width of the web page */

      }
      .article-row {
           margin-bottom: 10% !important;
       }

       .article-card {
           height: 470px;
           position: relative;

       }
       .article-card-center {
           margin-left: auto;
       }

       .article-name {
           font-size: 32px;
           margin-bottom:0;
           margin-left: auto;
       }
       .paragraf {
           margin-bottom:0;
           margin-left: auto;
           margin-right: auto;
       }

       .article-card-right-name {
           background: #fff;
           height: 100px;
           position: absolute;
           z-index: 2;
           bottom: 0;
           left: 0 !important;
       }

       .article-card-left-name {

           background: #fff;
           height: 500px;
           margin-top: 50px;
           margin-left: auto;
           margin-right: auto;
           position: absolute;
           z-index: 2;




       }

       .article-card-right-image {
           height: 400px !important;
           position: absolute;
           z-index: 1;
           right: 0;
       }

       .article-card-left-image {
           height: 400px !important;
           position: absolute;
           z-index: 1;
           left: 0;
       }
   </style>


         <!--The div element for the map -->

           <div class="row article-row">


               <div class="col s12 article-card">
                   <div class="col s4 offset-s7 article-card-left-name">
                       <p class="article-name">Banyumas, Jawa Tengah</p>
                         <h6 class="paragraf"></h6>
                         {{-- <p class="paragraf">Museum Geologi
                           <br> Museum ini didirikan pada tanggal 16 Mei 1928. Museum ini telah direnovasi dengan dana bantuan dari JICA.</p>
                         <br> --}}
                         <h6 class="paragraf">Telepon</h6>
                         <p class="paragraf">(022) 7213822</p>
   <br>
                         <h6 class="paragraf">Jam Buka</h6>
                         <p class="paragraf">08.00 - 16.00</p>
                         <br>
                       <p class="paragraf">Alamat</p>
                       <p class="paragraf">Jl. Prof. Dr. Soeharso No.45 Purwokerto</p>

                   </div>

                   <div id="map">

                   </div>
               </div>
           </div>
<br>
           <div class="row">

@foreach ($wisata as $index => $value)
             <div class="col s4">
               <img class="materialboxed" width="500" height="400" src="{{asset('storage/'.$value->foto)}}">
             </div>

             <div class="col s7" style="margin-left:50px;">

               <h5>{{$value->nama}}</h5>
               <p>{{$value->deskripsi}}</p>
             </div>
@endforeach
           </div>






         <script>
     // Initialize and add the map
     function initMap() {
       // The location of Uluru
       var uluru = {lat: -7.4171818, lng: 109.2484767};
       // The map, centered at Uluru
       var map = new google.maps.Map(
           document.getElementById('map'), {zoom: 18, center: uluru});
       // The marker, positioned at Uluru
       var marker = new google.maps.Marker({position: uluru, map: map});
     }
         </script>
         <!--Load the API from the specified URL
         * The async attribute allows the browser to render the page while the API loads
         * The key parameter will contain your own API key (which is not needed for this tutorial)
         * The callback parameter executes the initMap() function
         -->
         <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDuA6ClJJeW4ulnbedQ2tJ1lpyOBjZG-E&callback=initMap">
         </script>
   @endsection
