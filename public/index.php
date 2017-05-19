<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Excercice d'intégration - LPATC 2016/2017 - Laurane richter</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,600" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="asset/css/main.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="asset/js/main.js"></script>
</head>
<body>
	<header class="navigation">
		<div class="container-navigation">
			<div class="container-logo">
				<img class="archi-wiki-logo" src="asset/img/logo-archiwiki.png" srcset="asset/img/logo-archiwiki@2x.png 2x, asset/img/logo-archiwiki.png 1x" alt="Logo de l'entreprise Archi-Wiki">
				<p class="legend-logo">Partageons la ville, ses bâtiments, ses lieux…</p>
			</div>
			<nav class="container-header-nav">
				<ul class="header-nav">
					<li class="item"><a href="#">L'association</a></li>
					<li class="item"><a href="#">Open Data</a></li>
					<li class="item"><a href="#">Faire un don</a></li>
					<li class="item"><a href="#">English</a></li>
					<li class="item"><a href="#">Deutsch</a></li>
				</ul>
			</nav>
			<div class="search-nav">
				<i class="fa fa-search" aria-hidden="true"></i>
			</div>
			<div class="more-menu">
				<div class="burger-menu">
				  <div class="burger"></div>  
				</div>
				<p class="show-more-menu">Menu</p>
			</div>
		</div>
		<div class="content-search-nav" aria-labelledby="search-nav-title-head">
			<h3 class="search-nav-title" id="search-nav-title-head">Recherchez à travers nos 11 257 adresses et 61 652 photos :</h3>
			<form>
				<input type="text" name="adress" placeholder="indiquez une adresse, un nom de rue ou de bâtiment">
				<button type="sumbit" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
				<p class="search-more">recherche avancée</p>
			</form>
		</div>
		<div class="content-more-menu">
			<nav>
				<h4 id="association">L'association</h4>
				<ul class="menu-association" aria-labelledby="association">
					<li class="item"><a href="#">Devenir membre</a></li>
					<li class="item"><a href="#">Faire un don</a></li>
					<li class="item"><a href="#">Revue de presse</a></li>
					<li class="item"><a href="#">Nos sources</a></li>
					<li class="item"><a href="#">Nos donateurs</a></li>
				</ul>
			</nav>
			<nav>
				<h4 id="contribution">Contribuer au site</h4>
				<ul class="menu-contribution" aria-labelledby="contribution">
					<li class="item"><a href="#">Consulter l’historique de la page</a></li>
					<li class="item"><a href="#">Aide à la contribution</a></li>
				</ul>
			</nav>
			<div class="connect">
				<i class="fa fa-user" aria-hidden="true"></i>
				<a href="#" class="website-connect">Se connecter</a>
				<a href="#" class="website-subscribe">S'inscrire</a>
			</div>
		</div>
	</header>
	<div id="page-container">
		<section id="intro" aria-labelledby="title-intro">
			<div class="backgroung-img-intro">
				<img src="asset/img/image-en-avant.png" srcset="asset/img/image-en-avant.png 1x, asset/img/image-en-avant@2x.png 2x, asset/img/image-en-avant@3x.png 3x" alt="Photo rue d'immeuble en ville">
			</div>
			<div class="intro-wrap-content">
				<div class="title-intro-content">
					<span class="sub-title">Lumière sur ...</span>
					<h1 id="title-intro">36 rue du vieux marché aux poissons</h1>
					<div class="breadcrumb"><a href="#">France</a> > <a href="#">Strasbourg</a></div>
				</div>
				<div class="intro-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat urna ut augue mattis, vel interdum tortor congue. Nam nec eros hendrerit, ullamcorper lacus ut, lobortis nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris non dolor eleifend, vulputate nisi vitae, posuere eros. Praesent quis tempor felis, eu tristique ante. Maecenas dapibus nisi quis ante feugiat faucibus.</p>
					<a href="#">Découvrir cette fiche ></a>
				</div>
			</div>
		</section>
		<section class="content-search-nav" aria-labelledby="search-nav-title">
			<h3 class="search-nav-title" id="search-nav-title">Recherchez à travers nos 11 257 adresses et 61 652 photos :</h3>
			<form>
				<input type="text" name="adress" placeholder="indiquez une adresse, un nom de rue ou de bâtiment">
				<button type="sumbit" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
				<p class="search-more">recherche avancée</p>
			</form>
		</section>
		<section class="top-articles">
			<div class="about-us">
				<h3 class="title-about-us">Archi-Wiki, c’est qui ?</h3>
				<div class="content-about-us">
					<p>Archi-Wiki est un site collaboratif fonctionnant sur le principe du wiki : offrir un contenu objectif et vérifiable, librement réutilisable, que chacun peut enrichir, modifier et améliorer.</p>
					<p>L’objectif est de recenser les bâtiments et lieux d’une ville, en retraçant leur histoire à travers la date de construction, le nom de l’architecte, les transformations successives, ainsi que de nombreuses photos.</p>
					<p>Archi-wiki a ainsi l’ambition de devenir une sorte de Wikipédia de l’architecture, en constituant une base de données en perpétuelle évolution.</p>
				</div>
				<a href="#" class="link-subscribe">Pour contribuer, inscrivez-vous !</a>
			</div>
			<div class="last-new-article">
				<h3 class="last-new-title">Dernière actualité de l’association : <br> Ode à la création, appel à la contribution</h3>
				<div class="last-new-wrap">
					<div class="last-new-img"></div>
					<div class="last-new-content">
						<p>Ce qui nous intéresse ce n'est pas ce qui existe mais ce qui n'existe pas. Les bibliothèques sont remplies de livres, pourtant ce qui reste à écrire est infiniment plus important. Face à la matérialité du monde c'est pourtant le vide qui est bien plus immense et infini, source de création. Les chercheurs publient, trouvent et donnent de nouvelles pistes qui sont autant de recherches qui posent d'autres questions. Ainsi la quête de connaissance serait insatiable.</p>
						<div class="wrap-link">
							<a href="#">Lire la suite ></a>
							<a href="#" class="to-right">Découvrir les autres actualités ></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="all-article" aria-labelledby="all-article-title">
			<h2 id="all-article-title">Dernières modifications</h2>
			<?php for ($i = 0; $i < 5; ++$i): ?>
			<article>
				<div class="article">
					<div class="article-img"></div>
					<div class="article-contain">
						<h3 class="article-title">36 rue Aubry-et-Rau</h3>
						<div class="breadcrumb"><a href="#">France</a> > <a href="#">Strasbourg</a></div>
						<div class="article-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat urna ut augue mattis, vel interdum tortor congue. Nam nec eros hendrerit, ullamcorper lacus ut, lobortis nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris non dolor eleifend, vulputate nisi vitae, posuere eros.</p>
						</div>
						<a href="#" class="article-know-more">Consulter la fiche ></a>
					</div>
				</div>
			</article>
			<?php endfor; ?>
		</section>
		<aside class="all-comment" aria-labelledby="all-comment-title">
			<h2 id="all-comment-title">Derniers commentaires</h2>
			<?php for ($i = 0; $i < 5; ++$i): ?>
			<div class="comment">
				<h3 class="comment-title">36 rue Aubry-et-Rau</h3>
				<div class="breadcrumb"><a href="#">France</a> > <a href="#">Strasbourg</a></div>
				<div class="comment-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat urna ut augue mattis, vel interdum tortor congue. Nam nec eros hendrerit, ullamcorper lacus ut, lobortis nisi…</p>
				</div>
				<a href="#" class="comment-know-more">Consulter le commentaire ></a>
			</div>
			<?php endfor; ?>
		</aside>
		<section class="btn-see-more">
			<div class="wrap-more-article">
				<button class="more-article animated-button">Toutes les dernières modifications</button>
			</div>
			<div class="wrap-more-comment">
				<button class="more-comment animated-button">Tous les derniers commentaires</button>
			</div>
		</section>
	</div>
	<footer id="page-footer">
		<div class="wrap-footer">
			<div class="footer-menu">
				<img class="archi-wiki-logo-white" src="asset/img/logo-archiwiki-white.png" srcset="asset/img/logo-archiwiki-white@2x.png 2x, asset/img/logo-archiwiki-white.png 1x" alt="Logo de l'entreprise Archi-Wiki en blanc">
				<nav class="container-footer-nav">
					<ul class="footer-nav">
						<li class="item"><a href="#">Nous contacter</a></li>
						<li class="item"><a href="#">Foire aux questions</a></li>
						<li class="item"><a href="#">Mentions légales</a></li>
					</ul>
				</nav>
			</div>
			<div class="footer-partner">
				<h5>Archi-Wiki est un projet financé et soutenu par :</h5>
				<p>Prévoir logo des partenaires, en défausse</p>
			</div>
			<div class="footer-social-networks">
				<a href="#" class=" networks-twiter link-network"><i class="fa fa-twitter" aria-hidden="true"></i> @archi-strasbourg</a>
				<a href="#" class=" networks-facebook link-network"><i class="fa fa-facebook" aria-hidden="true"></i> Archi.Strasbourg</a>
				<a href="#" class=" networks-instagram link-network"><i class="fa fa-instagram" aria-hidden="true"></i> archi_strasbourg</a>
			</div>
		</div>
	</footer>
</body>
</html>