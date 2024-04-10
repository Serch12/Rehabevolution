<!DOCTYPE html>

<html class="loading" lang="es" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Sistema | Rehab Evolution</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/Logo_rehab_color.svg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/Logo_rehab_color.svg')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{('estilos_materialize/app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('estilos_materialize/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('estilos_materialize/app-assets/vendors/materialize-stepper/materialize-stepper.min.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{('estilos_materialize/app-assets/css/themes/vertical-modern-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('estilos_materialize/app-assets/css/themes/vertical-modern-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{('estilos_materialize/app-assets/css/pages/form-wizard.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{('estilos_materialize/app-assets/css/custom/custom.css')}}">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
     <!-- BEGIN: Page Main-->
     <div id="app">
        <encuesta-component></encuesta-component>
     </div>
     <br><br>
      <!-- END: Page Main-->
    
    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-shadow navbar-border navbar-shadow footer-fixed" style="background: #25347A;">
    <div class="footer-copyright">
            <div class="container"><span>&copy; 2024 RehabEvolution.</span><span class="right hide-on-small-only">Programado por TI</span></div>
        </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{('estilos_materialize/app-assets/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{('estilos_materialize/app-assets/vendors/materialize-stepper/materialize-stepper.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{('estilos_materialize/app-assets/js/plugins.js')}}"></script>
    <script src="{{('estilos_materialize/app-assets/js/search.js')}}"></script>
    <script src="{{('estilos_materialize/app-assets/js/custom/custom-script.js')}}"></script>
    <script src="{{('estilos_materialize/app-assets/js/scripts/customizer.js')}}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{('estilos_materialize/app-assets/js/scripts/form-wizard.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>