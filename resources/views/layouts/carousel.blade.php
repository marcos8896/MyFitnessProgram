<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="first-slide" src="/images/carousel1.jpg" alt="Create your account">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-left">
          @if (Auth::guest())
          <h1>Create your account and share everything you want.</h1>
          <p><a class="btn btn-lg btn-primary" href="/register" role="button">Sign up today</a></p>
          @else
            <h1>You're already sign as <strong>{{ Auth::user()->name }}</strong></h1>
            <h5>Feel free to explore our site!</h5>
          @endif
        </div>
      </div>
    </div>
    <div class="carousel-item img-responsive">
      <img class="second-slide" src="/images/carousel2.jpg" alt="Find your plan">
      <div class="container">
        <div class="carousel-caption d-none d-md-block">
          @if (Auth::guest())
          <h1>Do you already have an account?</h1>
          <p><a class="btn btn-lg btn-primary" href="/login" role="button">Sign in</a></p>
          @else
            <h1>You're already sign as <strong>{{ Auth::user()->name }}</strong></h1>
            <h5>If you want to use another account, just logout below.</h5>
            <p><a class="btn btn-lg btn-primary" href="/logout" role="button">Logout</a></p>
          @endif
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="/images/carousel3.jpg" alt="Find your plan">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-right">
          <h1>Start your fitness program today.</h1>
          <p class="">You can custom and mix several type of training models. Just navegate across our plataform and get familiar with it.</p>
          <p><a class="btn btn-lg btn-primary" href="#content" role="button">Go ahead!</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
