<?php
/*
Plugin Name: EDUVIDA Plugin
Description: Un simple plugin para mostrar contenido personalizado de EDUVIDA.
Version: 1.0
Author: GRUPO7
*/
function eduvida_enqueue_scripts() {
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css', array(), '5.15.3');
  wp_enqueue_style('eduvida-css', plugin_dir_url(__FILE__) . 'eduvida.css');

  wp_enqueue_script('jquery');
  wp_enqueue_script('eduvida-js', plugin_dir_url(__FILE__) . 'eduvida.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'eduvida_enqueue_scripts');

function eduvida_shortcode() {
  ob_start();
  ?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
</head>

<div class="header-container">
    <div class="logo">GIZ</div>
    <div class="search-icon"><i class="fas fa-search"></i></div>
    <div class="menu-container">
        <ul class="menu">
            <li class="menu-item"><a href="#">Inicio</a></li>
            <li class="menu-item"><a href="#">Contactos</a></li>
            <li class="menu-item"><a href="#">Ver</a></li>
            <li class="menu-item"><a href="#">Editar</a></li>
            <li class="menu-item"><a href="#">Mi perfil</a></li>
        </ul>
    </div>
</div>

<div class="profile-container">
    <div class="mi-plugin-imagen-container">
        <img src="6073874.png" alt="Imagen" class="mi-plugin-imagen-perfil">
	    <input type="file" id="mi-plugin-cargar-imagen" class="mi-plugin-cargar-imagen" style="display:none;">
	    <label for="mi-plugin-cargar-imagen" class="mi-plugin-cambiar-imagen">Cambiar imagen</label>
    </div>

    <div class="profile-info">
        <div class="profile-name">Nombre de usuario</div>
        <div class="profile-profession">
            <i class="fas fa-book"></i>
            <span>Profesión</span>
        </div>
        <div class="profile-location">
            <i class="fas fa-map-marker-alt"></i>
            <span>Ubicación</span>
        </div>
    </div>
    <div class="upload-container">
        <input type="file" id="upload-profile-image" />
    </div>
</div>

<div class="button-container" onclick="window.location.href='http://192.168.131.134/index.php/modificar-informacion-personal/'">
    <button class="edit-profile-btn">
        <i class="fas fa-edit"></i> Editar perfil
    </button>
    
    <button class="messages-btn">
        <i class="fas fa-envelope"></i> Mensajes
    </button>
</div>

<div class="add-content-container">
    <div class="circle-plus" id="circle-plus" onclick="window.location.href='http://192.168.131.134/index.php/subir-proyecto/'">
        <i class="fas fa-plus"></i>
    </div>
    <p>Subir un nuevo proyecto, experiencia, video o imagen</p>
</div>

<div class="options-container">
    <ul class="options">
        <li class="option-item"><a href="http://192.168.131.134/index.php/videos/">Videos</a></li>
        <li class="option-item"><a href="http://192.168.131.134/index.php/imagenes/">Imágenes</a></li>
        <li class="option-item"><a href="http://192.168.131.134/index.php/textos/">Textos</a></li>
    </ul>
</div>


  <?php
  return ob_get_clean();
}

add_shortcode('eduvida', 'eduvida_shortcode');
