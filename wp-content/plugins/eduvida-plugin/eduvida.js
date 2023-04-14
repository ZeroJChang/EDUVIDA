jQuery(document).ready(function ($) {
  // Evento de clic en la lupa
  $(".search-icon").on("click", function () {
      // Aquí puedes agregar el código para manejar la funcionalidad de búsqueda
      console.log("Lupa presionada");
  });

  // Evento de clic en los elementos del menú
  $(".menu-item a").on("click", function (event) {
      event.preventDefault(); // Prevenir la acción predeterminada del enlace
      // Aquí puedes agregar el código para manejar la funcionalidad de los elementos del menú
      console.log("Elemento del menú presionado:", $(this).text());
  });
});


// Mostrar el input de archivo al hacer clic en la imagen de perfil
$(".profile-image").on("click", function () {
  $("#upload-profile-image").click();
});

// Actualizar la imagen de perfil cuando se selecciona un archivo
jQuery(document).ready(function ($) {
  $('#mi-plugin-cargar-imagen').on('change', function () {
    if (this.files && this.files[0]) {
      const reader = new FileReader();

      reader.onload = function (e) {
        $('.mi-plugin-imagen-perfil').attr('src', e.target.result);
      };

      reader.readAsDataURL(this.files[0]);
    }
  });
});

jQuery(document).ready(function ($) {
  $("#circle-plus").on("click", function () {
      window.location.href = "http://192.168.131.134/index.php/subir-proyecto/";
  });
});

jQuery(document).ready(function ($) {
  $(".edit-profile-btn").on("click", function () {
      window.location.href = "http://192.168.131.134/index.php/modificar-informacion-personal/";
  });
});


jQuery(document).ready(function ($) {
  $("#upload-file").on("change", function () {
      var fileName = $(this).val().split("\\").pop();
  });
});


// Guardar la imagen de perfil en el servidor
$("#save-profile-image").on("click", function () {
  // agregar el código para guardar la imagen de perfil en el servidor
  // y actualizar la imagen en la base de datos o en algún otro lugar para que la imagen persista
  alert("Guardar imagen en el servidor");
});


// Evento de clic en el elemento de profesión
$(".profile-profession").on("click", function () {
  // agregar el código para manejar la funcionalidad del elemento de profesión
  console.log("Elemento de profesión presionado");
});

// Evento de clic en el elemento de ubicación
$(".profile-location").on("click", function () {
  // agregar el código para manejar la funcionalidad del elemento de ubicación
  console.log("Elemento de ubicación presionado");
});

jQuery(document).ready(function ($) {
	$(".edit-profile-btn").on("click", function () {
	  window.location.href = "http://192.168.131.134/index.php/modificar-informacion-personal/";
  });
});



  
