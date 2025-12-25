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
			<div class="rdm-sys-typography--title-large"><div class="rdm-topbar--body-headline">Text field</div></div>
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


    <h1 class="rdm-sys-typography--display-medium">Text field</h1>

    <!-- Form container -->
    <form class="rdm-form--container" action="#" method="post" target="_self">

        <!-- Form type: filled, elevated, outlined -->
        <div class="rdm-form--outlined">

            <!-- Body section -->
            <div class="rdm-form--body">
                <!-- Text Field: Filled -->
                <div class="rdm-textfield--wrapper">
                    <div class="rdm-textfield--container rdm-textfield--filled">
                        <div class="rdm-textfield--control">
                            <input id="tf_nombre" type="text" name="nombre" placeholder=" " aria-describedby="tf_nombre_help" autocomplete="name">
                            <label class="rdm-textfield--label" for="tf_nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="rdm-textfield--support">
                        <span id="tf_nombre_help">Ingresa tu nombre completo</span>
                    </div>
                </div>

                <!-- Text Field: Outlined -->
                <div class="rdm-textfield--wrapper">
                    <div class="rdm-textfield--container rdm-textfield--outlined">
                        <div class="rdm-textfield--control">
                            <input id="tf_correo" type="email" name="correo" placeholder=" " aria-describedby="tf_correo_help" autocomplete="email">
                            <label class="rdm-textfield--label" for="tf_correo">Nombre completo</label>
                        </div>
                    </div>
                    <div class="rdm-textfield--support">
                        <span id="tf_correo_help">Usa un correo válido</span>
                    </div>
                </div>

            </div>

            <!-- Action section aligment: left, center, right -->
            <div class="rdm-form--action-right">
            <p>
                <!-- reset (tonal recomendado para secundaria) -->
                <button type="reset" class="rdm-button--text">
                <div class="rdm-button--container">
                    <div class="rdm-button--media">
                        <span class="material-symbols-rounded">clear</span>
                    </div>
                    <div class="rdm-button--body">
                        <span class="rdm-sys-typography--label-large">Limpiar</span>
                    </div>
                </div>
                </button>

                <!-- submit (filled primario recomendado) -->
                <button type="submit" class="rdm-button--filled">
                <div class="rdm-button--container">
                    <div class="rdm-button--media">
                        <span class="material-symbols-rounded">send</span>
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

