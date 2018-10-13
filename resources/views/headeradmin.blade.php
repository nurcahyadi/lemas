
@section('header')
  <nav>
    <div class="nav-wrapper brown lighten-1">
      <a href="#" class="brand-logo" style="margin-left:10px;"> LEMAS </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('homeadminbudaya')}}"><i class="material-icons left">folder_shared</i>Budaya</a></li>
        <li><a href="{{route('homeadminsejarah')}}"><i class="material-icons left">library_books</i>Sejarah</a></li>
        <li><a href="{{route('homeadminwisata')}}"><i class="material-icons left">add_a_photo</i>Wisata</a></li>
        <li><a href="{{route('homeadminumkm')}}"><i class="material-icons left">local_mall</i>UMKM</a></li>
        {{-- <li><a href="badges.html">UMKM</a></li> --}}
        {{-- <li><a href="collapsible.html">Login</a></li> --}}
      </ul>
    </div>
  </nav>

@endsection
