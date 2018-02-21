<script type="text/javascript">$('.dropdown-toggle').dropdown()</script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container d-flex flex-column flex-md-row justify-content-between menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="/" name="DataBlog Logo"><img src="{{ asset('img/logo.png') }}"></a>

  <div class="collapse navbar-collapse menu_btns" id="navbarTogglerDemo03">

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 btns">
      <li class="nav-item dropdown ">
               <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categorías</a>
               <div class="dropdown-menu btns_categories">
                  <a class="dropdown-item" href="#">Data</a>
                  <a class="dropdown-item" href="#">Estadistica</a>
                  <a class="dropdown-item" href="#">Ciencias</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Crear Categoría</a>
               </div>
            </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Proyectos</a>
      </li>
    </ul>


    <div class="my-2 my-lg-0 busqueda_flex">

    <form class="form-inline mr-sm-2">
      <input class="form-control mr-sm-2" type="search" placeholder="Consulta un Articulo" aria-label="Search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
    </form>

    <ul class="navbar-nav btns">
     <li class="nav-item">
        <a class="nav-link" href="#">Acceder</a>
      </li>
      <span>|</span>
     <li class="nav-item">
        <a class="nav-link" href="#">Registrarse</a>
      </li>
    </ul>

    </div>

  </div>
</div>
</nav>
