<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" alt="" width="35" height="35">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ ($active === "home" ? 'active' : "") }}" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "about" ? 'active' : "") }}" aria-current="page" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "blog" ? 'active' : "") }}" aria-current="page" href="/blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($active === "categories" ? 'active' : "") }}" aria-current="page" href="/categories">Categories</a>
              </li>
        </ul>
        <div class="navbar-nav ms-auto">
            <div class="nav-item">
                <a href="/login" class="nav-link {{ ($active === "login" ? 'active' : "") }}"> <i class="bi bi-box-arrow-in-right"></i> Login</a>
            </div>
        </div>
      </div>
    </div>
  </nav>
