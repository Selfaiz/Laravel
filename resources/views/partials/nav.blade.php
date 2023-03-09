<nav class="navbar navbar-expand-lg bg-light ">
    <div class="container-fluid mx-4">
      <a class="navbar-brand" href="/">NTSA<span style="color:rgb(236, 128, 33)">WA9</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse "  id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{Route('produits.index')}}">Produits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{Route('produits.create')}}">Ajouter</a>
          </li>
        </ul>
        <a href="" class="btn  btn-primary">Sign In</a>
      </div>
    </div>
  </nav>