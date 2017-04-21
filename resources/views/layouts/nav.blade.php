<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/">MyFitProgram</a>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Training</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Meal plans</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sports</a>
      </li>
    </ul>

    @if (count($archives))
      <div class="dropdown">
        <button class="btn btn-primary btn-space dropdown-toggle" type="button" data-toggle="dropdown">Archives
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            @foreach ($archives as $stats)
              <li>
                <a class="nav-link" href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                  {{ $stats['month'] . ' ' . $stats['year'] }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
    @endif

      @if (count($tags))
        <div class="dropdown">
          <button class="btn btn-primary btn-space dropdown-toggle" type="button" data-toggle="dropdown">Tags
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              @foreach ($tags as $tag)
                <li>
                  <a class="nav-link" href="/posts/tags/{{ $tag }}">
                    {{ $tag }}
                  </a>
                </li>
              @endforeach
            </ul>
          </div>
      @endif
      {{-- <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Find your plan...">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> --}}
    <ul class="space nav navbar-nav navbar-right">
      @if (Auth::check())
        <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
        <a class="nav-link btn btn-danger btn-space" href="/logout">Log out</a>

      @else
        <a class="btn btn-primary btn-space" href="/login">Log in</a>
        <a class="btn btn-success btn-space" href="/register">Sign Up</a>
      @endif
    </ul>
  </div>
</nav>
