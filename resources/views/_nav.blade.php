<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
  <div class="container">

    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

    <a class="navbar-brand logo-image" href="index.html"><img src="{{ asset('me/logoeduck.svg') }}" width="150px" alt="educk logo"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-awesome fas fa-bars"></span>
      <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#home">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#problematica">PROBLEMATICA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#nosotros">NOSOTROS</a>
        </li>

        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle page-scroll" href="#video" id="navbarDropdown" role="button"
            aria-haspopup="true" aria-expanded="false">VIDEO</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="article-details.html"><span class="item-text">ARTICLE
                DETAILS</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS
                CONDITIONS</span></a>
            <div class="dropdown-items-divide-hr"></div>
            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY
                POLICY</span></a>
          </div>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#modulos">MÓDULOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="#proyecto">PROYECTOS</a>
        </li>
      </ul>
      <span class="nav-item">
        <button class="btn-outline-sm" data-toggle="modal" data-target="#formModal">PROBAR DEMO</button>
      </span>
    </div>
  </div>
</nav>
