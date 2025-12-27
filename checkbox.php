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
			<div class="rdm-sys-typography--title-large"><div class="rdm-topbar--body-headline">Checkbox</div></div>
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

    <h1 class="rdm-sys-typography--display-medium">Checkbox</h1>

    <!-- Form container -->
    <form class="rdm-form--container" action="#" method="post" target="_self">

        <!-- Form type: outlined -->
        <div class="rdm-form--outlined">

            

            <!-- Body section -->
            <div class="rdm-form--body">
                
                <h2 class="rdm-sys-typography--title-large">Enabled (unchecked)</h2>
                <div class="rdm-checkbox--wrapper">
                    <label class="rdm-checkbox--container">
                        <input type="checkbox" class="rdm-checkbox--input" id="cb1" name="checkbox1">
                        <span class="rdm-checkbox--checkmark"></span>
                        <span class="rdm-checkbox--label">Opción sin marcar</span>
                    </label>
                </div>

                <h2 class="rdm-sys-typography--title-large">Enabled (checked)</h2>
                <div class="rdm-checkbox--wrapper">
                    <label class="rdm-checkbox--container">
                        <input type="checkbox" class="rdm-checkbox--input" id="cb2" name="checkbox2" checked>
                        <span class="rdm-checkbox--checkmark"></span>
                        <span class="rdm-checkbox--label">Opción marcada</span>
                    </label>
                </div>

                <h2 class="rdm-sys-typography--title-large">Disabled (unchecked)</h2>
                <div class="rdm-checkbox--wrapper">
                    <label class="rdm-checkbox--container">
                        <input type="checkbox" class="rdm-checkbox--input" id="cb3" name="checkbox3" disabled>
                        <span class="rdm-checkbox--checkmark"></span>
                        <span class="rdm-checkbox--label">Opción deshabilitada sin marcar</span>
                    </label>
                </div>

                <h2 class="rdm-sys-typography--title-large">Disabled (checked)</h2>
                <div class="rdm-checkbox--wrapper">
                    <label class="rdm-checkbox--container">
                        <input type="checkbox" class="rdm-checkbox--input" id="cb4" name="checkbox4" checked disabled>
                        <span class="rdm-checkbox--checkmark"></span>
                        <span class="rdm-checkbox--label">Opción deshabilitada marcada</span>
                    </label>
                </div>

                <h2 class="rdm-sys-typography--title-large">Grupo de opciones</h2>
                <div class="rdm-checkbox--wrapper">
                    <label class="rdm-checkbox--container">
                        <input type="checkbox" class="rdm-checkbox--input" id="cb5" name="option1" value="javascript">
                        <span class="rdm-checkbox--checkmark"></span>
                        <span class="rdm-checkbox--label">JavaScript</span>
                    </label>
                </div>
                <div class="rdm-checkbox--wrapper">
                    <label class="rdm-checkbox--container">
                        <input type="checkbox" class="rdm-checkbox--input" id="cb6" name="option2" value="python">
                        <span class="rdm-checkbox--checkmark"></span>
                        <span class="rdm-checkbox--label">Python</span>
                    </label>
                </div>
                <div class="rdm-checkbox--wrapper">
                    <label class="rdm-checkbox--container">
                        <input type="checkbox" class="rdm-checkbox--input" id="cb7" name="option3" value="php">
                        <span class="rdm-checkbox--checkmark"></span>
                        <span class="rdm-checkbox--label">PHP</span>
                    </label>
                </div>

            </div>

            <!-- Action section aligment: left, center, right -->
            <div class="rdm-form--action-left">
                <p>
                    <!-- reset -->
                    <button type="reset" class="rdm-button--text">
                    <div class="rdm-button--container">
                        <div class="rdm-button--media">
                            <span class="material-symbols-rounded">refresh</span>
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
