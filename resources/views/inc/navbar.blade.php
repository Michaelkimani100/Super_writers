
    <!--navigation-->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="mainNav">
            <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="/">Super Writers</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav text-uppercase ml-auto">

                    </ul>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#works">How it Works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#rules">Guidelines</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
</div>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>