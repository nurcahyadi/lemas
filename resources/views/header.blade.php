
@section('header')

  <ul id="dropdown1" class="dropdown-content" style="padding:0px;">
    <li><a href="{{route('inputwisata')}}">Input Wisata</a></li>
    <li><a href="{{route('datainputwisata')}}">Wisata</a></li>
  </ul>

  <nav>
    <div class="nav-wrapper brown lighten-1">
      <a href="#" class="brand-logo" style="margin-left:10px;"> LEMAS </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route("home")}}"><i class="material-icons left">home</i>Beranda</a></li>
        <li><a href="{{route('budayauser')}}"><i class="material-icons left">folder_shared</i>Budaya</a></li>
        <li><a href="{{route('sejarahuser')}}"><i class="material-icons left">library_books</i>Sejarah</a></li>
        <li><a class="dropdown-web" data-target="dropdown1">Wisata<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="{{route('umkmuser')}}"><i class="material-icons left">local_mall</i>UMKM</a></li>
        {{-- <li><a href="badges.html">UMKM</a></li> --}}
        {{-- <li><a href="collapsible.html">Login</a></li> --}}
      </ul>
    </div>
  </nav>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.dropdown-trigger');
var instances = M.Dropdown.init(elems, instances);
});
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.dropdown-web');
var instances = M.Dropdown.init(elems, instances);
});
</script>
@endsection
