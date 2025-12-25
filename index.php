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
			<div class="rdm-topbar--leading-navigation-icon"><span class="material-symbols-rounded">menu</span></div>
		</div>

		<!-- Top bar body-->
		<div class="rdm-topbar--body">
			<div class="rdm-sys-typography--title-large"><div class="rdm-topbar--body-headline"><div class="rdm-topbar--mango-logo"></div>	ManGo! RDM 2.0</div></div>
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

	<h1 class="rdm-sys-typography--display-medium">Components</h1>

	<section class="rdm-card--container">
		<div class="rdm-card--outlined">
			
			<!-- Item -->			
			<a href="container.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
					<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">rectangle</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Container</div></div>
					</div>
				</article>			
			</a>

			<!-- Item -->			
			<a href="typography.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
					<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">article</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Typography</div></div>
					</div>
				</article>			
			</a>

			<!-- Item -->			
			<a href="shapes.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">shapes</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Shapes</div></div>
					</div>
				</article>			
			</a>

			<!-- Item -->			
			<a href="elevation.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">layers</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Elevation</div></div>
					</div>
				</article>			
			</a>

			<!-- Item -->			
			<a href="buttons.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">buttons_alt</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Buttons</div></div>
					</div>
				</article>			
			</a>

			<!-- Item -->			
			<a href="cards.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">dashboard</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Cards</div></div>
					</div>
				</article>			
			</a>

			<!-- Item -->			
			<a href="lists.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">view_list</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Lists</div></div>
					</div>
				</article>			
			</a>

			<!-- Item -->			
			<a href="badges.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
					<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">check_circle</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Badges</div></div>
					</div>
				</article>			
			</a>

			<!-- Item -->			
			<a href="topbar.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">toolbar</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Top app bar</div></div>
					</div>
				</article>			
			</a>

			<!-- Item -->			
			<a href="bottombar.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">bottom_app_bar</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Bottom app bar</div></div>	
					</div>
				</article>
			</a>

			<!-- Item -->			
			<a href="navigation_bar.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">bottom_navigation</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Navigation bar</div></div>	
					</div>
				</article>
			</a>

			<!-- Item -->			
			<a href="navigation_drawer.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">dock_to_right</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Navigation drawer</div></div>	
					</div>
				</article>
			</a>

			<!-- Item -->			
			<a href="navigation_rail.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">thumbnail_bar</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Navigation rail</div></div>	
					</div>
				</article>
			</a>

			<!-- Item -->			
			<a href="tabs.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">tabs</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Tabs</div></div>	
					</div>
				</article>
			</a>

			<!-- Item -->			
			<a href="forms.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">dynamic_form</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Forms</div></div>	
					</div>
				</article>
			</a>

			<!-- Item -->
			<a href="text_field.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">text_fields</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Text Field</div></div>
					</div>
				</article>
			</a>

			<!-- Item -->
			<a href="columns.php">
				<article class="rdm-list--container">
					<div class="rdm-list--media">
						<div class="rdm-list--leading-icon"><span class="material-symbols-rounded">view_column</span></div>
					</div>
					<div class="rdm-list--body">
						<div class="rdm-sys-typography--body-large"><div class="rdm-list--body-headline">Columns</div></div>	
					</div>
				</article>
			</a>

		</div>
	</section>

</main>

</body>
</html>
