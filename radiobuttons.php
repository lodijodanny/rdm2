<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>RDM 2.0 - ManGo!</title>
	<link rel="stylesheet" href="css/estilos.css">
	<!-- Script que cambia los atributos de la top bar al hacer scroll -->
	<script src="js/topbar_scroll.js"></script>
	<script src="js/theme_toggle.js"></script>
</head>
<body>

<!-- Top bar -->
<header class="rdm-topbar--position">	

	<!-- Top bar container -->
	<div class="rdm-topbar--small-container" id="topbar">

		<!-- Top bar media -->
		<div class="rdm-topbar--media">
			<a href="index.php"><div class="rdm-topbar--leading-navigation-icon"><span class="material-symbols-rounded">arrow_back</span></div></a>
		</div>

		<!-- Top bar body-->
		<div class="rdm-topbar--body">
			<div class="rdm-sys-typography--title-large"><div class="rdm-topbar--body-headline">Radio Button</div></div>
		</div>

		<!-- Top bar action-->
		<div class="rdm-topbar--action">
			<div class="rdm-topbar--trailing-icon" id="themeToggle" title="Cambiar tema">
				<span class="material-symbols-rounded" id="themeToggleIcon">dark_mode</span>
			</div>
			<div class="rdm-topbar--avatar" style="background-image: url(img/a1.jpg);">
				<div class="rdm-sys-typography--title-medium"></div>
			</div>
		</div>

	</div>
	
</header>

<main class="rdm--contenedor-toolbar">

	<!-- Outlined form -->

	<h1 class="rdm-sys-typography--display-medium">Radio Button</h1>

	<!-- Form container -->
	<form class="rdm-form--container" action="#" method="post" target="_self">

		<!-- Form type: outlined -->
		<div class="rdm-form--outlined">

			<!-- Body section -->
			<div class="rdm-form--body">
				
				<!-- RADIO: Enabled States -->
				<h2 class="rdm-sys-typography--title-large">Enabled (unselected)</h2>
				<p class="rdm-sys-typography--body-medium">Haz click para ver el estado hover, focus y pressed</p>
				<label class="rdm-radio">
					<input type="radio" name="radio1" value="1">
					<span class="rdm-radio__icon"></span>
					<span class="rdm-radio__label">Opción sin seleccionar</span>
				</label>

				<h2 class="rdm-sys-typography--title-large">Enabled (selected)</h2>
				<label class="rdm-radio">
					<input type="radio" name="radio2" value="1" checked>
					<span class="rdm-radio__icon"></span>
					<span class="rdm-radio__label">Opción seleccionada</span>
				</label>

				<!-- RADIO: Disabled States -->
				<h2 class="rdm-sys-typography--title-large">Disabled (unselected)</h2>
				<label class="rdm-radio">
					<input type="radio" name="radio3" value="1" disabled>
					<span class="rdm-radio__icon"></span>
					<span class="rdm-radio__label">Opción deshabilitada sin seleccionar</span>
				</label>

				<h2 class="rdm-sys-typography--title-large">Disabled (selected)</h2>
				<label class="rdm-radio">
					<input type="radio" name="radio4" value="1" checked disabled>
					<span class="rdm-radio__icon"></span>
					<span class="rdm-radio__label">Opción deshabilitada seleccionada</span>
				</label>

				<!-- RADIO: Option Group -->
				<fieldset class="rdm-radio--fieldset">
					<legend class="rdm-sys-typography--title-large">Grupo de opciones</legend>
					<label class="rdm-radio">
						<input type="radio" name="language" value="javascript">
						<span class="rdm-radio__icon"></span>
						<span class="rdm-radio__label">JavaScript</span>
					</label>
					<label class="rdm-radio">
						<input type="radio" name="language" value="python">
						<span class="rdm-radio__icon"></span>
						<span class="rdm-radio__label">Python</span>
					</label>
					<label class="rdm-radio">
						<input type="radio" name="language" value="php">
						<span class="rdm-radio__icon"></span>
						<span class="rdm-radio__label">PHP</span>
					</label>
				</fieldset>

			</div>

			<!-- Action section alignment: left, center, right -->
			<div class="rdm-form--action-left">
				<p>
					<!-- reset -->
					<button type="reset" class="rdm-button--text">
					<div class="rdm-button--container">
						<div class="rdm-button--media">
							<div class="rdm-button--icon"><span class="material-symbols-rounded">refresh</span></div>
						</div>
						<div class="rdm-button--body">
							<span class="rdm-sys-typography--label-large">Limpiar</span>
						</div>
					</div>
					</button>

					<!-- submit -->
					<button type="submit" class="rdm-button--filled">
					<div class="rdm-button--container">
						<div class="rdm-button--media">
							<div class="rdm-button--icon"><span class="material-symbols-rounded">send</span></div>
						</div>
						<div class="rdm-button--body">
							<span class="rdm-sys-typography--label-large">Enviar</span>
						</div>
					</div>
					</button>
				
				</p> 
			</div>
			
		</div>
	</form>

</main>

</body>
</html>
