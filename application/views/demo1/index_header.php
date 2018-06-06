<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?= $dat_page[0]->title; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro Solo si es Home -->
				<?php if($page === 'home'):  ?>

					<div id="intro">
						<h1>Esta es<br />
						Tu Página</h1>
						<p>Completamente resposiva con HTML5 + CSS3 plantilla diseñada por <a href="https://twitter.com/ajlkn">@ajlkn</a> para <a href="https://html5up.net">HTML5 UP</a><br />
						y desarrollada bajo la lisencia <a href="https://html5up.net/license">Creative Commons license</a>.</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continuar</a></li>
						</ul>
					</div>

				<?php endif; ?>

				<!-- Header -->
					<header id="header">
						<a href="/" class="logo">Massively</a>
					</header>

				<!-- Nav -->
					<nav id="nav">

						<ul class="links">
							<?php foreach ($items_menu as $row) : ?>

								<li class="<?= ($page === $row->var) ? 'active' : '' ?>">
									<a href="<?= $row->link_href ?>"><?= $row->name_link ?></a>
								</li>

							<?php endforeach; ?>
						</ul>

						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav>

					<?php //var_dump($items_menu); ?>

				<!-- Main -->

				<!-- Footer -->

				<!-- Copyright -->
		<!-- End Wrapper -->

		<!-- Scripts -->
	<!-- End body and html -->
