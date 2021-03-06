<nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm py-3">
  <div class="container py-1">
    <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Post</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pages.about') }}">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pages.service') }}">Services</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else

        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('dashboard') }}">DashBoard</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
              @csrf
            </form>
          </div>
        </li>

        <li>
          <a href="{{ route('posts.create') }}">
            <button class="btn btn-success rounded ml-3 font-weight-bold">
              Create Post
            </button></a>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>