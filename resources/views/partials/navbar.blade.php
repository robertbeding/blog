<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="" width="35" height="35">
    </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home" ? 'active' : "") }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About" ? 'active' : "") }}" aria-current="page" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Blog" ? 'active' : "") }}" aria-current="page" href="/blog">Blog</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($title === "categories" ? 'active' : "") }}" aria-current="page" href="/categories">Categories</a>
          </li> --}}
      </div>
    </div>
  </nav>
