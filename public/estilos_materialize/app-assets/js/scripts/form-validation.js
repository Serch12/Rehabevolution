/*
 * Form Validation
 */
$(function () {

  $('select[required]').css({
    position: 'absolute',
    display: 'inline',
    height: 0,
    padding: 0,
    border: '1px solid rgba(255,255,255,0)',
    width: 0
  });

  $("#formValidate").validate({
    rules: {
      name3: {
        required: true,
        minlength: 5
      },
      name33: {
        required: true
      },
      name333: {
        required: true
      },
      email1: {
        required: true
      },
      calle: {
        required: true
      },
      numero: {
        required: true
      },
      codigopostal: {
        required: true
      },
      colonia: {
        required: true
      },
      municipio: {
        required: true
      },
      estado: {
        required: true
      },
      pais: {
        required: true
      },
      telefono: {
        required: true,
        min: 10
      },
      email3: {
        required: true,
        email: true
      },
      email1419: {
        required: true,
        minlength: 10
      },
      tnc_select: "required",
    },
    //For custom messages
    messages: {
      name3: {
        required: "Ingresa un nombre",
        minlength: "Ingresar mínimo 5 caracteres."
      },
      email1419: {
          required: "Ingresa un motivo de consulta",
          minlength: "Ingresar mínimo 10 caracteres."
        },
      telefono: {
        required: "Ingresa un nombre",
        minlength: "Ingresar mínimo 10 numeros."
      },
      
    },
    errorElement: 'div',
    errorPlacement: function (error, element) {
      var placement = $(element).data('error');
      if (placement) {
        $(placement).append(error)
      } else {
        error.insertAfter(element);
      }
    }
  });
});