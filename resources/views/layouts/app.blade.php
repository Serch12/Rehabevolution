<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
      
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Link Swiper's CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo-rehab.png')}}">
    <title>Rehab Evolution</title>
    <style>

    .swiper {
      width: 100%;
      /*padding-top: 50px;*/
      padding-bottom: 200px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
    }
  </style>
</head>
<div class="" style="background-color:#00ABE1;padding:10px 0px;">
  <div align="center"  class="container" >
    <span style="padding:15px;color:white;">
      <i class="fa fa-phone" aria-hidden="true"></i>
        <strong>55 8717 2501</strong>
    </span>
    <span style="color:white;">
      <i class="fa fa-envelope" aria-hidden="true"></i>
    <a href="mailto:contacto@rehabevolution.com" style="color:white;"><strong>contacto@rehabevolution.com</strong></a>
    </span>
  </div>
</div>
@include('layouts.menu')
<div id="app">
    {{-- @include('layouts.nav') --}}
    @yield('content')
    <div class="content-overlay"></div>
    @include('layouts.footer') 
</div>      
   <!-- Modal Structure -->
<!-- ./wrapper -->
<!-- Scripts -->
<!-- Compiled and minified JavaScript -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<!-- scripts js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="{{asset('assets/js/carrusel.js')}}"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      autoplay: {
            delay: 3000, // Cambia el intervalo de cambio automático en milisegundos (en este caso, 3 segundos)
        },
    });
  </script>
<!-- Código de instalación Cliengo para https://rehabevolution.com/rehab/ --> <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/63f9024945fdee0025696965/63f9024b45fdee0025696969.js?platform=dashboard'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
</html>
