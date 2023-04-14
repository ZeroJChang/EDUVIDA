<?php
/* Template Name: Subir proyecto */
?>

<?php get_header(); ?>

<div class="upload-project-container">
<!-- Columna izquierda -->
	<div class="left-column">
		<label for="project-title">Título del proyecto:</label>
		<input type="text" id="project-title" name="project-title" />

		<label for="start-date">Fecha de inicio:</label>
		<input type="date" id="start-date" name="start-date" />

		<label for="upload-file">Cargar archivo:</label>
		<div class="custom-file-upload">
			<input type="file" id="upload-file" name="upload-file" />
		</div>


		<div class="buttons-container">
			<button class="publish-btn">Publicar</button>
			<button class="cancel-btn">Cancelar</button>
		</div>
	</div>

	<!-- Columna derecha -->
	<div class="right-column">
	    <label for="description">Descripción:</label>
	    <textarea id="description" name="description" class="large-textarea"></textarea>
    </div>

</div>

<?php get_footer(); ?>
