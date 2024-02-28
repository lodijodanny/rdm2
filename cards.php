<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>RDM 2.0 - ManGo!</title>
	<link rel="stylesheet" href="css/estilos.css">
	<!-- Script que cambia los atributos de la top bar al hacer scroll -->
	<script src="js/topbar_scroll.js"></script>
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
			<div class="rdm-sys-typography--title-large"><div class="rdm-topbar--body-headline">Cards</div></div>
		</div>

		<!-- Top bar action-->
		<div class="rdm-topbar--action">			
			<div class="rdm-topbar--avatar" style="background-image: url(img/a1.jpg);">
				<div class="rdm-sys-typography--title-medium"></div>
			</div>
		</div>

	</div>
	
</header>

<main class="rdm--contenedor-toolbar">

    <!-- Filled card -->

    <h1 class="rdm-sys-typography--display-medium">Filled card</h1>

    <!-- Card container -->
    <article class="rdm-card--container">

        <!-- Card type: filled, elevated, outlined -->
        <div class=" rdm-card--filled">

            <!-- Media section -->
            <div class="rdm-card--media" style="background-image: url(img/1.jpg);">
                <h1 class="rdm-sys-typography--display-medium">Display</h1>
            </div>

            <!-- Body section -->
            <div class="rdm-card--body">
                <h2 class="rdm-sys-typography--display-small">Headline</h2>
                <h3 class="rdm-sys-typography--title-large">Subhead</h3>
                <p class="rdm-sys-typography--body-large">Body large. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptates ullam sunt explicabo et veniam consequuntur eius dolore. Quisquam fuga ipsam optio quibusdam expedita sunt tempora odit totam ab aperiam.</p>
            </div>

            <!-- Action section aligment: left, center, right -->
            <div class="rdm-card--action-left">
            <p>
                <!-- button -->
                <button class="rdm-button--filled">
                <div class="rdm-button--container">
                    <div class="rdm-button--media">
                        <div class="rdm-button--icon"><span class="material-symbols-rounded">add</span></div>
                    </div>
                    <div class="rdm-button--body">
                        <span class="rdm-sys-typography--label-large">Button</span>
                    </div>
                </div>
                </button>

                <!-- button -->
                <button class="rdm-button--filled">
                <div class="rdm-button--container">
                    <div class="rdm-button--body">
                        <span class="rdm-sys-typography--label-large">Button</span>
                    </div>
                </div>
                </button>
            
            </p> 
            </div>

        </div>
    </article>
    
    <!-- Elevated card -->

    <h1 class="rdm-sys-typography--display-medium">Elevated card</h1>

    <!-- Card container -->
    <article class="rdm-card--container">

        <!-- Card type: filled, elevated, outlined -->
        <div class=" rdm-card--elevated">

            <!-- Media section -->
            <div class="rdm-card--media" style="background-image: url(img/1.jpg);">
                <h1 class="rdm-sys-typography--display-medium">Display</h1>
            </div>

            <!-- Body section -->
            <div class="rdm-card--body">
                <h2 class="rdm-sys-typography--display-small">Headline</h2>
                <h3 class="rdm-sys-typography--title-large">Subhead</h3>
                <p class="rdm-sys-typography--body-large">Body large. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptates ullam sunt explicabo et veniam consequuntur eius dolore. Quisquam fuga ipsam optio quibusdam expedita sunt tempora odit totam ab aperiam.</p>
            </div>

            <!-- Action section aligment: left, center, right -->
            <div class="rdm-card--action-right">
                <p>
                    <!-- button -->
                    <button class="rdm-button--filled">
                    <div class="rdm-button--container">
                        <div class="rdm-button--media">
                            <div class="rdm-button--icon"><span class="material-symbols-rounded">add</span></div>
                        </div>
                        <div class="rdm-button--body">
                            <span class="rdm-sys-typography--label-large">Button</span>
                        </div>
                    </div>
                    </button>

                    <!-- button -->
                    <button class="rdm-button--filled">
                    <div class="rdm-button--container">
                        <div class="rdm-button--body">
                            <span class="rdm-sys-typography--label-large">Button</span>
                        </div>
                    </div>
                    </button>
                
                </p> 
            </div>
            
        </div>
    </article>

    <!-- Outlined card -->

    <h1 class="rdm-sys-typography--display-medium">Outlined card</h1>

    <!-- Card container -->
    <article class="rdm-card--container">

        <!-- Card type: filled, elevated, outlined -->
        <div class=" rdm-card--outlined">

            <!-- Media section -->
            <div class="rdm-card--media" style="background-image: url(img/1.jpg);">
                <h1 class="rdm-sys-typography--display-medium">Display</h1>
            </div>

            <!-- Body section -->
            <div class="rdm-card--body">
                <h2 class="rdm-sys-typography--display-small">Headline</h2>
                <h3 class="rdm-sys-typography--title-large">Subhead</h3>
                <p class="rdm-sys-typography--body-large">Body large. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptates ullam sunt explicabo et veniam consequuntur eius dolore. Quisquam fuga ipsam optio quibusdam expedita sunt tempora odit totam ab aperiam.</p>
            </div>

            <!-- Action section aligment: left, center, right -->
            <div class="rdm-card--action-left">
                <p>
                    <!-- button -->
                    <button class="rdm-button--filled">
                    <div class="rdm-button--container">
                        <div class="rdm-button--media">
                            <div class="rdm-button--icon"><span class="material-symbols-rounded">add</span></div>
                        </div>
                        <div class="rdm-button--body">
                            <span class="rdm-sys-typography--label-large">Button</span>
                        </div>
                    </div>
                    </button>

                    <!-- button -->
                    <button class="rdm-button--filled">
                    <div class="rdm-button--container">
                        <div class="rdm-button--body">
                            <span class="rdm-sys-typography--label-large">Button</span>
                        </div>
                    </div>
                    </button>
                
                </p> 
            </div>
            
        </div>
    </article>

</main>

</body>
</html>