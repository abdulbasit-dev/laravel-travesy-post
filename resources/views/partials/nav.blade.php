<nav class="navbar navbar-dark navbar-expand-lg  bg-dark clean-navbar">
  <div class="container"><a class="navbar-brand logo" href="#">Brand</a><button
      data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span
        class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navcol-1">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link active" href="{{ route('pages.index') }}">Home</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="features.html">Features</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Post</a></li>
        <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pages.about') }}">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pages.service') }}">Services</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>