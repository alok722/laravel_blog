<nav class="navbar navbar-inverse">
 <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/" style="color: #F0F0F0; font-weight: bold; font-family: 'Special Elite', cursive;"><i class="fa fa-cube"></i> &nbsp{{config('app.name','Blog')}}</a>
   </div>
   <div id="navbar" class="collapse navbar-collapse">
   <ul class="nav navbar-nav">
      <li><a href="/"><i class="fa fa-home"></i>&nbsp Home</a></li>
      <li><a href="/about"><i class="fa fa-info-circle"></i>&nbsp About</a></li>
      <li><a href="/services"><i class="fa fa-gears"></i>&nbsp Services</a></li>
      <li><a href="/posts"><i class="fa fa-sticky-note"></i>&nbsp Blog</a></li>
   </ul>
   <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }} <i class="fa fa-sign-in"></i></a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} <i class="fa fa-user-plus"></i></a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i>&nbsp&nbsp{{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/dashboard"><i class="fa fa-dashboard"></i> &nbsp&nbspDashboard</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> &nbsp&nbspLogout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                        @endguest
     {{-- <li><a href="/posts/create">Create Post</a></li> --}}
   </ul>
  </div>
 </div>
</nav>