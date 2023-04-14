<?php
/*
Plugin Name: Mi Plugin
Description: Un plugin personalizado para manejar el formulario y la tabla de trabajos.
Version: 1.0
Author: GRUPO 7
*/

function mi_plugin_shortcode() {
    ob_start();
    ?>
<!-- Aquí va el código HTML de tu formulario y tabla -->
  <head>
    <link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) . 'estilos.css'; ?>">
  </head>
  <body>

  <div class="mi-plugin-perfil-container">
    <div class="mi-plugin-imagen-container">
      <img src="6073874.png" alt="Imagen de perfil" class="mi-plugin-imagen-perfil">
	<input type="file" id="mi-plugin-cargar-imagen" class="mi-plugin-cargar-imagen" style="display:none;">
	<label for="mi-plugin-cargar-imagen" class="mi-plugin-cambiar-imagen">Cambiar imagen</label>
    </div>
    <div class="mi-plugin-info-perfil">
      <label for="mi-plugin-nombre" class="mi-plugin-etiqueta">Nombre:</label>
      <input type="text" id="mi-plugin-nombre" class="mi-plugin-nombre">
      <label for="mi-plugin-apellido" class="mi-plugin-etiqueta">Apellido:</label>
      <input type="text" id="mi-plugin-apellido" class="mi-plugin-apellido">
    </div>
  </div>
  
    <form>
      <div class="col">
        <label for="correo" class="mi-plugin-etiqueta">Correo:</label>
        <input type="email" id="correo" class="correo" name="correo" required />
        
        <label for="contraseña" class="mi-plugin-etiqueta">Contraseña:</label>        
        <input type="password" id="contraseña" class="contrasena" name="contraseña" required />
        <label for="confirmar_contraseña" class="mi-plugin-etiqueta">Confirmar contraseña:</label>
        <input
          type="password"
          id="confirmar_contraseña"
          class="conficontra"
          name="confirmar_contraseña"
          required
        />
        <label for="sexo" class="mi-plugin-etiqueta">Sexo:</label>
        <select id="sexo" class="sex" name="sexo" required>
          <option value="">Seleccionar</option>
          <option value="femenino">Femenino</option>
          <option value="masculino">Masculino</option>
          <option value="otro">Otro</option>
        </select>
        
        <label for="municipio" class="mi-plugin-etiqueta">Municipio:</label>
        <input type="text" id="municipio" class="municipio" name="municipio" required />

        <label id="nivelformacion" class="mi-plugin-etiqueta">Nivel Formación:</label>
        <select id="nivelformacion" class="formacion" name="nivelformacion" required>
          <option value="">Seleccionar</option>
          <option value="Educación preescolar">Educación preescolar</option>
          <option value="Educación primaria">Educación primaria</option>
          <option value="Educación secundaria">Educación secundaria</option>
          <option value="Educación terciaria o superior">Educación terciaria o superior</option>
          <option value="Educación continua o formación profesional">Educación continua o formación profesional</option>
        </select>
      </div>
      
      <div class="col">
        <label for="fecha_nacimiento" class="mi-plugin-etiqueta">Fecha de nacimiento:</label>
        <input
          type="date"
          id="fecha_nacimiento"
          class="fecna"
          name="fecha_nacimiento"
          required/>
          
        <label for="telefono" class="mi-plugin-etiqueta">Teléfono:</label>
        <input type="tel" id="telefono" class="telefono"name="telefono" required />
        
        <label for="origen_etnico" class="mi-plugin-etiqueta">Origen étnico:</label>
        <input type="text" id="origen_etnico" class="Oetnico" name="origen_etnico" required />
        
        <label for="idioma_Materno" class="mi-plugin-etiqueta">Idioma Materno:</label>
        <input type="text" id="idioma_Materno" class="Imaterno" name="idioma_Materno" required />
        
        <label for="departamento" class="mi-plugin-etiqueta">Departamento:</label>
        <select id="departamento" class="Departamento" name="departamento" required>
          <option value="">Seleccionar</option>
          <option value="Alta Verapaz">Alta Verapaz</option>
          <option value="Baja Verapaz">Baja Verapaz</option>
          <option value="Chimaltenango">Chimaltenango</option>
          <option value="Chiquimula">Chiquimula</option>
          <option value="El Progreso">El Progreso</option>
          <option value="Escuintla">Escuintla</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Huehuetenango">Huehuetenango</option>
          <option value="Izabal">Izabal</option>
          <option value="Jalapa">Jalapa</option>
          <option value="Jutiapa">Jutiapa</option>
          <option value="Peten">Petén</option>
          <option value="Quetzaltenango">Quetzaltenango</option>
          <option value="Quiche">Quiché</option>
          <option value="Retalhuleu">Retalhuleu</option>
          <option value="Sacatepequez">Sacatepéquez</option>
          <option value="San Marcos">San Marcos</option>
          <option value="Santa Rosa">Santa Rosa</option>
          <option value="Solola">Sololá</option>
          <option value="Suchitepequez">Suchitepéquez</option>
          <option value="Totonicapan">Totonicapán</option>
          <option value="Zacapa">Zacapa</option>
        </select>
      </div>
    </form>
    <br />

    <table id="tabla">
      <caption>
        Trabajo:
      </caption>
      <thead>
        <tr>
          <th>Trabajo actual</th>
          <th>Nombre de la institución</th>
          <th>Tipo</th>
          <th>Nivel</th>
        </tr>
      </thead>
      <tbody>
        <!-- Filas de la tabla con información sobre trabajos -->
      </tbody>
    </table>
    <br />
<!-- Botón Añadir -->
    <div clas="button-anadir">
    	<button
        type="button"
	id="btn-añadir"
	class="add-button" style="float: right;">Añadir</button>
    </div>

<div class="save-cancel-button-container">
      <br />
      <br />
      <br />
      <button
        type="button"
        id="btn-guardar"
        class="sav-button"
        onclick="mostrarConfirmacion();">Guardar</button>

        <div class="confirmation-dialog" id="confirmationDialog">
          <div class="confirmation-content">
            <h3>¿Estás seguro?</h3>
            <p>¿Deseas continuar con la acción seleccionada?</p>
            <button class="elegant-btn confirm-btn" onclick="handleConfirmation(true)">Aceptar</button>
            <button class="elegant-btn cancel-btn" onclick="handleConfirmation(false)">Cancelar</button>
          </div>
        </div>

      <button
        type="button"
        id="btn-cancelar"
        class="cancell-button"
        onclick="window.location.href='http://192.168.131.134/index.php/21-2/'">Cancelar</button>
</div>
    <tbody>
            <?php foreach ($trabajos as $trabajo) : ?>
                <tr>
                    <td><?php echo esc_html($trabajo->trabajo_actual); ?></td>
                    <td><?php echo esc_html($trabajo->nombre_institucion); ?></td>
                    <td><?php echo esc_html($trabajo->tipo); ?></td>
                    <td><?php echo esc_html($trabajo->nivel); ?></td>
                </tr>
            <?php endforeach; ?>
     </tbody>

    <script>
      document.getElementById('btn-anadir').addEventListener('click', function() {
      document.getElementById('Agregar-trabajo').style.display = 'block';});
    </script>
    
    <script>
        function mostrarConfirmacion() {
            document.getElementById("confirmationDialog").style.display = "block";
          }

          function handleConfirmation(result) {
            if (result) {
              // agregar la lógica que necesitas cuando el usuario confirme la acción
              console.log("El usuario ha confirmado la acción");
            } else {
              console.log("El usuario ha cancelado la acción");
            }
            document.getElementById("confirmationDialog").style.display = "none";
          }
    </script>

  </body>


    <script src="<?php echo plugin_dir_url(__FILE__) . 'scripst.js'; ?>"></script>
    <?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode('mi_plugin', 'mi_plugin_shortcode');

function mi_plugin_enqueue_scripts() {
    wp_enqueue_style('mi-plugin-css', plugin_dir_url(__FILE__) . 'estilos.css');
    wp_enqueue_script('mi-plugin-js', plugin_dir_url(__FILE__) . 'scripst.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mi_plugin_enqueue_scripts');

function mi_plugin_handle_form() {
   // Aquí va el código para manejar el formulario y guardar los datos en la base de datos
  global $wpdb;

  // Verifica el nonce y valida el formulario (opcional pero recomendado)
  check_admin_referer('mi_plugin_form_nonce');

  // Obtiene los datos del formulario
  $trabajo_actual = sanitize_text_field($_POST['trabajo_actual']);
  $nombre_institucion = sanitize_text_field($_POST['nombre_institucion']);
  $tipo = sanitize_text_field($_POST['tipo']);
  $nivel = sanitize_text_field($_POST['nivel']);

  // Inserta los datos en la base de datos
  $wpdb->insert(
      $wpdb->prefix . 'trabajos',
      array(
          'trabajo_actual' => $trabajo_actual,
          'nombre_institucion' => $nombre_institucion,
          'tipo' => $tipo,
          'nivel' => $nivel
      ),
      array('%s', '%s', '%s', '%s')
  );

  // Redirige a la misma página para actualizar la tabla
  wp_redirect(get_permalink());
  exit;
}
add_action('admin_post_nopriv_mi_plugin_form', 'mi_plugin_handle_form');
add_action('admin_post_mi_plugin_form', 'mi_plugin_handle_form');

function mi_plugin_mostrar() {
    global $wpdb;

    // Obtén los registros de la tabla trabajos y mostrar en el index.html digamos
    $trabajos = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}trabajos");

    ob_start();
    ?>
<!-- Aquí va el código HTML de tu formulario y tabla -->
<link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) . 'estilos.css'; ?>">
  </head>
  <body>

  <div class="mi-plugin-perfil-container">
    <div class="mi-plugin-imagen-container">
      <img src="6073874.png" alt="Imagen de perfil" class="mi-plugin-imagen-perfil">
	<input type="file" id="mi-plugin-cargar-imagen" class="mi-plugin-cargar-imagen" style="display:none;">
	<label for="mi-plugin-cargar-imagen" class="mi-plugin-cambiar-imagen">Cambiar imagen</label>
    </div>
    <div class="mi-plugin-info-perfil">
      <label for="mi-plugin-nombre" class="mi-plugin-etiqueta">Nombre:</label>
      <input type="text" id="mi-plugin-nombre" class="mi-plugin-nombre">
      <label for="mi-plugin-apellido" class="mi-plugin-etiqueta">Apellido:</label>
      <input type="text" id="mi-plugin-apellido" class="mi-plugin-apellido">
    </div>
  </div>
  
    <form>
      <div class="col">
        <label for="correo" class="mi-plugin-etiqueta">Correo:</label>
        <input type="email" id="correo" class="correo" name="correo" required />
        
        <label for="contraseña" class="mi-plugin-etiqueta">Contraseña:</label>        
        <input type="password" id="contraseña" class="contrasena" name="contraseña" required />
        <label for="confirmar_contraseña" class="mi-plugin-etiqueta">Confirmar contraseña:</label>
        <input
          type="password"
          id="confirmar_contraseña"
          class="conficontra"
          name="confirmar_contraseña"
          required
        />
        <label for="sexo" class="mi-plugin-etiqueta">Sexo:</label>
        <select id="sexo" class="sex" name="sexo" required>
          <option value="">Seleccionar</option>
          <option value="femenino">Femenino</option>
          <option value="masculino">Masculino</option>
          <option value="otro">Otro</option>
        </select>
        
        <label for="municipio" class="mi-plugin-etiqueta">Municipio:</label>
        <input type="text" id="municipio" class="municipio" name="municipio" required />

        <label id="nivelformacion" class="mi-plugin-etiqueta">Nivel Formación:</label>
        <select id="nivelformacion" class="formacion" name="nivelformacion" required>
          <option value="">Seleccionar</option>
          <option value="Educación preescolar">Educación preescolar</option>
          <option value="Educación primaria">Educación primaria</option>
          <option value="Educación secundaria">Educación secundaria</option>
          <option value="Educación terciaria o superior">Educación terciaria o superior</option>
          <option value="Educación continua o formación profesional">Educación continua o formación profesional</option>
        </select>
      </div>
      
      <div class="col">
        <label for="fecha_nacimiento" class="mi-plugin-etiqueta">Fecha de nacimiento:</label>
        <input
          type="date"
          id="fecha_nacimiento"
          class="fecna"
          name="fecha_nacimiento"
          required/>
          
        <label for="telefono" class="mi-plugin-etiqueta">Teléfono:</label>
        <input type="tel" id="telefono" class="telefono"name="telefono" required />
        
        <label for="origen_etnico" class="mi-plugin-etiqueta">Origen étnico:</label>
        <input type="text" id="origen_etnico" class="Oetnico" name="origen_etnico" required />
        
        <label for="idioma_Materno" class="mi-plugin-etiqueta">Idioma Materno:</label>
        <input type="text" id="idioma_Materno" class="Imaterno" name="idioma_Materno" required />
        
        <label for="departamento" class="mi-plugin-etiqueta">Departamento:</label>
        <select id="departamento" name="departamento" required>
          <option value="">Seleccionar</option>
          <option value="Alta Verapaz">Alta Verapaz</option>
          <option value="Baja Verapaz">Baja Verapaz</option>
          <option value="Chimaltenango">Chimaltenango</option>
          <option value="Chiquimula">Chiquimula</option>
          <option value="El Progreso">El Progreso</option>
          <option value="Escuintla">Escuintla</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Huehuetenango">Huehuetenango</option>
          <option value="Izabal">Izabal</option>
          <option value="Jalapa">Jalapa</option>
          <option value="Jutiapa">Jutiapa</option>
          <option value="Peten">Petén</option>
          <option value="Quetzaltenango">Quetzaltenango</option>
          <option value="Quiche">Quiché</option>
          <option value="Retalhuleu">Retalhuleu</option>
          <option value="Sacatepequez">Sacatepéquez</option>
          <option value="San Marcos">San Marcos</option>
          <option value="Santa Rosa">Santa Rosa</option>
          <option value="Solola">Sololá</option>
          <option value="Suchitepequez">Suchitepéquez</option>
          <option value="Totonicapan">Totonicapán</option>
          <option value="Zacapa">Zacapa</option>
        </select>
      </div>
    </form>
    <br />
    <table id="tabla">
      <caption>
        Trabajo:
      </caption>
      <thead>
        <tr>
          <th>Trabajo actual</th>
          <th>Nombre de la institución</th>
          <th>Tipo</th>
          <th>Nivel</th>
        </tr>
      </thead>
      <tbody>
        <!-- Filas de la tabla con información sobre trabajos -->
      </tbody>
    </table>
    <br />
<!-- Botón Añadir -->

    <div clas="button-anadir">
    	<button
        type="button"
	id="btn-añadir"
	class="add-button" style="float: right;">Añadir</button>
    </div>

<div class="save-cancel-button-container">
      <br />
      <br />
      <br />
      <button
        type="button"
        id="btn-guardar"
        class="sav-button"
        onclick="mostrarConfirmacion();">Guardar</button>
      
        <div class="confirmation-dialog" id="confirmationDialog">
          <div class="confirmation-content">
            <h3>¿Estás seguro?</h3>
            <p>¿Deseas continuar con la acción seleccionada?</p>
            <button class="elegant-btn confirm-btn" onclick="handleConfirmation(true)">Aceptar</button>
            <button class="elegant-btn cancel-btn" onclick="handleConfirmation(false)">Cancelar</button>
          </div>
        </div>

      <button
        type="button"
        id="btn-cancelar"
        class="cancell-button"
        onclick="window.location.href='http://192.168.131.134/index.php/21-2/'">Cancelar</button>
    </div>
    
    <tbody>
            <?php foreach ($trabajos as $trabajo) : ?>
                <tr>
                    <td><?php echo esc_html($trabajo->trabajo_actual); ?></td>
                    <td><?php echo esc_html($trabajo->nombre_institucion); ?></td>
                    <td><?php echo esc_html($trabajo->tipo); ?></td>
                    <td><?php echo esc_html($trabajo->nivel); ?></td>
                </tr>
            <?php endforeach; ?>
     </tbody>

    <script>
      document.getElementById('btn-anadir').addEventListener('click', function() {
      document.getElementById('Agregar-trabajo').style.display = 'block';});
    </script>

     <script>
        function mostrarConfirmacion() {
            document.getElementById("confirmationDialog").style.display = "block";
          }

          function handleConfirmation(result) {
            if (result) {
              // agregar la lógica que necesitas cuando el usuario confirme la acción
              console.log("El usuario ha confirmado la acción");
            } else {
              console.log("El usuario ha cancelado la acción");
            }
            document.getElementById("confirmationDialog").style.display = "none";
          }
    </script>
  </body>

    <script src="<?php echo plugin_dir_url(__FILE__) . 'scripst.js'; ?>"></script>
    <?php
    $output = ob_get_clean();
    return $output;
}
add_shortcode('mi_plugin', 'mi_plugin_mostrar');



