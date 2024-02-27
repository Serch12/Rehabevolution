<div class="container d-flex">
    <div class="mr-auto p-2">
      <div class="container">
        <a href="http://www.rehabevolution.com"><img src="{{asset('assets/images/Logo_rehab_color.svg')}}" width="150px"></a>
      </div>
  </div>
    <div class="p-2 botonMenu_Overlay">
        <nav class="navbar navbar-expand-md navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav nav-center">
            <li class="nav-item ">
                <a class="nav-link item_menu" href="home">Inicio</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link item_menu" href="nosotros">Nosotros</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link item_menu" href="servicios">Servicios</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link item_menu" href="convenios">Convenios</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link item_menu" href="contacto">Contacto</a>
            </li>
            </ul>
        </div>
        </nav>
    </div>
    <div class="p-2 botonMenu_lineal">
        <div class="d-flex justify-content-between">
            <div id="myNav" class="overlay">
             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="home">Inicio</a>
                  <a href="nosotros">Nosotros</a>
                  <a href="servicios">Servicios</a>
                  <a href="convenios">Convenios</a>
                  <a href="contacto">Contacto</a>
                </div>
            </div>
            <span style="font-size:40px;cursor:pointer;color:#00ABE1;" onclick="openNav()">&#9776;</span>
        </div>
    </div>
</div>