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
  $("#form-agregar").on("submit", function (e) {
      e.preventDefault();

      $.ajax({
          url: "/wp-admin/admin-ajax.php",
          type: "POST",
          data: {
              action: "mi_plugin_form",
              trabajo_actual: $("#trabajo_actual").val(),
              nombre_institucion: $("#nombre_institucion").val(),
              tipo: $("#tipo").val(),
              nivel: $("#nivel").val(),
          },
          success: function (response) {
            const newRow = $("<tr></tr>");
            newRow.append($("<td></td>").text($("#trabajo_actual").val()));
            newRow.append($("<td></td>").text($("#nombre_institucion").val()));
            newRow.append($("<td></td>").text($("#tipo").val()));
            newRow.append($("<td></td>").text($("#nivel").val()));
        
            $("#tabla-trabajos tbody").append(newRow);
        
            // Opcional: Limpiar los campos del formulario
            $("#form-agregar").trigger("reset");
        },
        
      });
  });
});

jQuery(document).ready(function ($) {
  $("#btn-añadir").on("click", function () {
      // Aquí va el código que se ejecutará cuando el usuario haga clic en el botón "Agregar"
      window.location.href = "http://192.168.131.134/index.php/agregar-trabajo/";
  });
});

jQuery(document).ready(function ($) {
  $("#btn-cancelarmi").on("click", function () {
      // Aquí va el código que se ejecutará cuando el usuario haga clic en el botón "cancelar"
      window.location.href = "http://192.168.131.134/index.php/modificar-informacion-personal/";

  });
});

jQuery(document).ready(function ($) {
  $("#btn-cancelar").on("click", function () {
      // Aquí va el código que se ejecutará cuando el usuario haga clic en el botón "cancelar"
      window.location.href = "http://192.168.131.134/index.php/21-2/";

  });
});

