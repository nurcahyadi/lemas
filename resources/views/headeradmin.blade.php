
@section('header')

  <ul id="dropdown2" class="dropdown-content" style="padding:0px;">
    <li><a href="{{route('daftarsanggartari')}}">Daftar Sanggar Tari</a></li>
    <li><a href="{{route('homeadminbudaya')}}">Budaya</a></li>
  </ul>


  <nav>

    <div class="nav-wrapper brown lighten-1">
      <a href="#" class="brand-logo" style="margin-left:10px;"> BUDAYA KITA </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="dropdown-web" data-target="dropdown2">Budaya<i class="material-icons right">arrow_drop_down</i></a></li>
        {{-- <li><a href="{{route('homeadminbudaya')}}"><i class="material-icons left">folder_shared</i>Budaya</a></li> --}}
        <li><a href="{{route('homeadminsejarah')}}"><i class="material-icons left">library_books</i>Sejarah</a></li>
        <li><a href="{{route('homeadmininputwisata')}}"><i class="material-icons left">add_a_photo</i>Wisata</a></li>
        <li><a href="{{route('homeadminumkm')}}"><i class="material-icons left">local_mall</i>UMKM</a></li>
        {{-- <li><a href="badges.html">UMKM</a></li> --}}
        {{-- <li><a href="collapsible.html">Login</a></li> --}}
        <li>

        <form  action="{{route('logout')}}" method="post">
                {{ csrf_field() }}

                {{-- <a type="sumbit">Logout</a> --}}
                  <li><button type="submit" class="waves-effect waves-light btn-small" style="margin-right:20px;">Logout</button></li>

        </form></li>
      </ul>
    </div>
  </nav>


<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
var elems = document.querySelectorAll('.dropdown-web');
var instances = M.Dropdown.init(elems, instances);
});
</script>
@endsection
