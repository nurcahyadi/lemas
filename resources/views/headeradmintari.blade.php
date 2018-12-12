
@section('header')
  <nav>
    <div class="nav-wrapper brown lighten-1">
      <a href="#" class="brand-logo" style="margin-left:10px;"> BUDAYA KITA </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <li>

        <form  action="{{route('logout')}}" method="post">
                {{ csrf_field() }}

                {{-- <a type="sumbit">Logout</a> --}}
                  <li><button type="submit" class="waves-effect waves-light btn-small" style="margin-right:20px;">Logout</button></li>

        </form></li>
      </ul>
    </div>
  </nav>

@endsection
