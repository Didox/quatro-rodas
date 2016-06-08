<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png"> -->
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<div id="container">

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf inner-header">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<a id="logo" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/library/images/logo-site.png"></a>


					<nav role="navigation" class="main-nav" itemscope="" itemtype="http://schema.org/SiteNavigationElement">

						<?php
							// wp_nav_menu( array(
						 //        'container' => false,
						 //        'container_class' => 'menu cf',
						 //        'menu' => __( 'The Main Menu', 'bonestheme' ),
						 //        'menu_class' => 'nav top-nav cf',
						 //        'theme_location' => 'main-nav',
						 //        'before' => '',
						 //        'after' => '',
						 //        'link_before' => '',
						 //        'link_after' => '',
						 //        'depth' => 0,
						 //        'fallback_cb' => '',
							// ));
						?>
						
						<div class="icon-wrap">
							<div class="icons icons-close"></div>
						</div>
						
						<ul id="menu-menu-principal" class="nav top-nav cf">
							<li id="menu-item-24" class="no-thumbs menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-24">
								<a href="#">Carros</a>
						
								<ul class="sub-menu">
									<li id="menu-item-34" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-34">
										<a href="#">Audi</a>
									</li>
									<li id="menu-item-35" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-35">
										<a href="#">Bentley</a>
									</li>
									<li id="menu-item-36" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-36">
										<a href="#">BMW</a>
									</li>
									<li id="menu-item-37" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37">
										<a href="#">Chevrolet</a>
									</li>
									<li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-38">
										<a href="#">Chrysler</a>
									</li>
									<li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39">
										<a href="#">Chevrolet</a>
									</li>
									<li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40">
										<a href="#">Dodge</a>
									</li>
									<li id="menu-item-41" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41">
										<a href="#">Ferrari</a>
									</li>
									<li id="menu-item-42" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-42">
										<a href="#">Fiat</a>
									</li>
									<li id="menu-item-43" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-43">
										<a href="#">Ford</a>
									</li>
									<li id="menu-item-44" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-44">
										<a href="#">Honda</a>
									</li>
									<li id="menu-item-45" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-45">
										<a href="#">Hyundai</a>
									</li>
									<li id="menu-item-46" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-46">
										<a href="#">JAC Motos</a>
									</li>
									<li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-47">
										<a href="#">Jaguar</a>
									</li>
									<li id="menu-item-48" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48">
										<a href="#">Jeep</a>
									</li>
									<li id="menu-item-49" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-49">
										<a href="#">Kia</a>
									</li>
									<li id="menu-item-50" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-50">
										<a href="#">Lamborghini</a>
									</li>
									<li id="menu-item-51" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-51">
										<a href="#">Mercedes-Benz</a>
									</li>
									<li id="menu-item-52" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-52">
										<a href="#">Mitsubishi</a>
									</li>
									<li id="menu-item-53" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-53">
										<a href="#">Volkswagen</a>
									</li>
								</ul>
							</li>
							<li id="menu-item-25" class="thumbs menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25">
								<a href="#">Testes</a>
					
								<ul class="sub-menu">
									<div class="wrap">
										<li id="menu-item-55" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-55"><a href="#">Ver tudo de testes</a>
										<ul class="sub-menu">
											<li id="menu-item-60" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-60">
												<a href="#">
													<img src="<?php bloginfo('template_url') ?>/library/images/testes-1.jpg">
													<span class="title">Ford Focus Fastback Titanium Plus</span>
												</a>
											</li>
											<li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61">
												<a href="#">
													<img src="<?php bloginfo('template_url') ?>/library/images/testes-2.jpg">
													<span class="title">Audi A6 2.0 TFSI</span>
												</a>
											</li>
											<li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62">
												<a href="#">
													<span class="title">Ford EcoSport 1.6 Powershift</span>
													<span class="desc">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</span>
												</a>
											</li>
											<li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-63">
												<a href="#">
													<img src="<?php bloginfo('template_url') ?>/library/images/testes-3.jpg">
													<span class="title">Audi Q3 1.4</span>
												</a>
											</li>
											<li id="menu-item-64" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64">
												<a href="#">
													<img src="<?php bloginfo('template_url') ?>/library/images/testes-4.jpg">
													<span class="title">BMW 420i Cabriolet</span>
												</a>
											</li>
										</ul>
									</li>
									<li id="menu-item-56" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-56">
										<a href="#">Comparativos</a>
									</li>
									<li id="menu-item-57" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-57">
										<a href="#">Impressões</a>
									</li>
									<li id="menu-item-58" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-58">
										<a href="#">Longa Duração</a>
									</li>
									<li id="menu-item-59" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-59">
										<a href="#">Teste de Pista</a>
									</li>
								</div>
							</ul>
						</li>
						<li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26">
							<a href="#">Notícias</a>
						</li>
						<li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27">
							<a href="#">Auto-serviço</a>
						</li>
						<li id="menu-item-28" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28">
							<a href="#">Guia de Compras</a>
						</li>
						<li id="menu-item-29" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29">
							<a href="#">Tabela FIPE</a>
						</li>
						<li id="menu-item-54" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-54">
							<a href="#">Assine</a>
						</li>
					</ul>
				</nav>
			</div>

			<nav role="navigation" class="secondary-nav cf">
				<div class="wrap">
					<ul class="nav">
						<li class="label"><a href="#">+Acessados</a></li>
						<li><a href="#">Salão do Automável</a></li>
						<li><a href="#">Renegade</a></li>
						<li><a href="#">Novo Sandeiro</a></li>
						<li><a href="#">Novo Fox</a></li>
						<li><a href="#">Novo KA</a></li>
						<li><a href="#">HB 20</a></li>
						<li><a href="#">Duster</a></li>
						<li><a href="#">Golf</a></li>
						<li><a href="#">Corolla</a></li>
						<li><a href="#">Civic</a></li>
						<li><a href="#">| A - Z |</a></li>
					</ul>
				</div>
			</nav>					

	</header>
