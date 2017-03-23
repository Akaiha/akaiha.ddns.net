<!DOCTYPE html>
<html>
	<head>
		<title>Akaiha | Développeur web en formation</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="ressources/akaihacss.css">
		<!-- Polices -->
		<link href="https://fonts.googleapis.com/css?family=Poiret+One|Raleway" rel="stylesheet">
	</head>

	<body data-spy="scroll" data-target=".navbar" data-offset="60">

		<div class="container-fluid text-center top-content">
			<h1>Bienvenue voyageur !</h1>
			<p>Ceci est mon site vitrine personnel</p>
			<p>Vous trouverez ici la démonstration de mon intérêt pour le développement web et mobile, ainsi que quelques informations sur moi. Bonnne visite !</p>
		</div>
		<!-- NAVBAR -->
		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="140">
		  <div class="container-fluid">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="#">Akaiha</a>
		    </div>
		    <div>
		      <div class="collapse navbar-collapse navbar-right" id="myNavbar">
		        <ul class="nav navbar-nav">
		          <li><a href="#section-parcours">Parcours</a></li>
		          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mes projets <span class="caret"></span></a>
		          	<ul class="dropdown-menu">
		          		<li><a href="travel/index.html" target="_blank">Akaiha Travel</a></li>
		          		<li><a href="snake/index.html" target="_blank">Snake</a></li>
		          		<li><a href="top5/index.html" target="_blank">Top 5</a></li>
		          	</ul>
		          </li>
		          <li><a href="#section-about">A propos</a></li>
		          <li><a href="#section-contact">Me contacter</a></li>
		        </ul>
		      </div>
		    </div>
		  </div>
		</nav>    

		<!-- SECTION Parcours -->
		<div class="container-fluid parcours-container">
			<div class="row">
				<div id="section-parcours" class="col-md-11 col-sm-12 col-xs-12">
					<div class="page-header">
				 		<h1 class="align-left">Mon Parcours</h1>
				 	</div>

				  	<div id="parcours-intro" class="container">
				  		<h4 class="text-center">Jeune technicien réseau, je souhaite acquérir la double compétence de développeur web et mobile</h4>
				  		<div class="container"><hr /></div>
				 	</div>

				  	<div class="container-fluid parcours-content">
				  		<div class="row">
				  			<!-- PARTIE DE GAUCHE -->
				  			<div class="col-md-3 col-sm-12 col-xs-12">
				  				<h1 class="text-center">DAUM Christopher</h1>
				  				<img src="ressources/pictures/moi.jpg" alt="ma photo" class="img-circle center-block">
				  				<hr />
				  				<div class="container-fluid text-center">
				  					<p><a href="#section-contact"><span class="glyphicon glyphicon-envelope"></span> Me contacter par mail</a></p>
				  					<p><a href="https://www.google.fr/maps/place/Rue+des+Pyr%C3%A9n%C3%A9es,+68390+Baldersheim/@47.7705421,7.3439813,13.29z/data=!4m5!3m4!1s0x47919dca8c30c191:0x2cb95ca1a3e6ecb2!8m2!3d47.8053171!4d7.3815144" target="_blank"><span class="glyphicon glyphicon-map-marker"></span> Région de Mulhouse</a></p>
				  				</div>
				  				<hr />
				  				<div class="container-fluid text-center interests">
				  					<h2>Mes centres d'intérêts</h2> <br/>
				  					<p>Membre actif d'une association d'Airsoft orientée Milsim (Elsass Foxes)</p>
				  					<p>Musicien (chant, guitare et batterie)</p>
				  					<p>Membre actif d'une communauté multi-gaming</p>
				  					<p>Fan de culture Japonaise et asiatique de manière générale</p>
				  					<p>Fan de sports extrêmes</p>
				  				</div>
				  			</div>
				  			
				  			<!-- PARTIE DE DROITE (TIMELINE)-->
				  			<div class="col-md-9 col-sm-12 col-xs-12">
					  			<div class="container">
					  				<ul class="timeline">
					  					<li>
					  						<div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
					  						<div class="timeline-panel-container">
					  							<div class="timeline-panel">
					  								<div class="timeline-heading">
					  									<h2>BTS SIO en alternance</h2>
					  									<h4>Section Solutions d'Infrastructure Systèmes et Réseaux</h4>
					  									<p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2015 - 2017</p>
					  								</div>
					  								<div class="timeline-body">
					  									<h3>CNFPT - INET</h3>
					  									<h4>Apprenti Administrateur réseau</h4>
					  									<p>Administration et supervision des serveurs</p>
					  									<p>Gestion du déploiement et suivi des PC mis à disposition des élèves de l’école</p>
					  									<p>Support utilisateurs</p>
					  								</div>
					  							</div>
					  						</div>
					  					</li>

					  					<li>
					  						<div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
					  						<div class="timeline-panel-container-inverted">
					  							<div class="timeline-panel">
					  								<div class="timeline-heading">
					  									<h2>BAC Scientifique</h2>
					  									<h4>Section Sciences de l'Ingénieur spécialisation Informatique et Sciences du Numérique</h4>
					  									<p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2015</p>
					  								</div>
					  							</div>
					  						</div>
					  					</li>

					  					<li>
					  						<div class="timeline-badge"><span class="glyphicon glyphicon-briefcase"></span></div>
					  						<div class="timeline-panel-container">
					  							<div class="timeline-panel">
					  								<div class="timeline-heading">
					  									<h2>Innvotechnic</h2>
					  									<h4>Stagiaire</h4>
					  									<p class="text-muted"><small class="glyphicon glyphicon-time"></small> 2010</p>
					  								</div>
					  								<div class="timeline-body">
					  									<h3>Stage de l'option DP3</h3>
					  									<p>Soudure sur circuits imprimés</p>
					  									<p>Assemblage et contrôle de qualité de capteurs de courant électrique</p>
					  								</div>
					  							</div>
					  						</div>
					  					</li>
					  				</ul>
					  			</div>
					  		</div>
					 	</div>

				  		<a href="ressources/CV_DAUM_Christopher.pdf" download="CV_DAUM_Christopher.pdf" class="btn btn-info center-block pdf-download" role="button">Télécharger mon CV au format PDF</a>
					</div>
				</div>
			</div>
		</div>
		

		<!-- SECTION PROJETS -->
		<div class="container-fluid projets-container">
			<div class="row">
				<div id="section-projets" class="col-md-offset-1 col-md-11 col-sm-12 col-xs-12">

					<div class="page-header">
						<h1 class="align-right">Mes projets</h1>
				 		<p class="align-right">Voici les divers projets que j'ai réalisé au long de ma formation de développeur web en ligne.</p>
					</div>
				

				  	<!-- CAROUSEL -->
				 	<div id="myCarousel" class="carousel slide" data-ride="carousel">
					    <!-- Indicateurs -->
					    <ol class="carousel-indicators">
					      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					      <li data-target="#myCarousel" data-slide-to="1"></li>
					      <li data-target="#myCarousel" data-slide-to="2"></li>
					    </ol>

					    <!-- Wrapper pour les slides -->
					    <div class="carousel-inner" role="listbox">

					    	<div class="item active">
						        <a href="travel/index.html" target="_blank"><img class="img-responsive center-block" src="ressources/pictures/travel.jpg" alt="Agence de voyage" width="900" height="500"></a>
						        <div class="carousel-caption img-rounded">
						        	<h3>Agence de voyage</h3>
						          	<p>Mon premier projet de cours, HTML5 et CSS3 uniquement !</p>
					        	</div>
					      	</div>

					      	<div class="item">
						        <a href="snake/index.html" target="_blank"><img class="img-responsive center-block" src="ressources/pictures/snake.jpg" alt="Snake" width="900"></a>
						        <div class="carousel-caption">
					         		<h3>Snake</h3>
					           		<p>Projet du cours Javascript, un peu de détente dans ce monde !</p>
						        </div>
					      	</div>
		    
					      	<div class="item">
					        	<a href="top5/index.html" target="_blank"><img class="img-responsive center-block" src="ressources/pictures/top5.jpg" alt="Top 5" width="900"></a>
					        	<div class="carousel-caption">
					          		<h3>Top 5</h3>
					          		<p>Un top 5 avec éléments dynamiques pour aborder JQuery !</p>
					        	</div>
					      	</div>

				    	</div>

					    <!-- chevrons de contrôle -->
					    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				      		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				      		<span class="sr-only">Previous</span>
					    </a>
					    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					      	<span class="sr-only">Next</span>
				    	</a>
					</div>

				</div>
			</div>
		</div>

		

		<!-- SECTION A PROPOS -->
		<div class="container-fluid about-container">
			<div class="row">
				<div id="section-about" class="col-md-11 col-sm-12 col-xs-12">
					<div class="page-header">
						<h1 class="align-left">A propos de moi</h1>
					</div>
					<div class="section-content">
						<h3>Qui suis-je ?</h3>
						<p>Je m'appelle Christopher, j'ai 20 ans et je vis en Alsace dans la région de Mulhouse. Je suis depuis longtemps la voie de l'informatique, d'abord dans les réseaux et désormais dans le développement web et mobile.</p>
						<div class="container"><hr /></div>
						<h3>Pourquoi "Akaiha" ?</h3>
						<p>Akaiha signifie "cheveux rouges" en japonais (langue que j'affectionne), c'est un pseudo que j'ai pris en référence à ma frange rouge.</p>
						<div class="container"><hr /></div>
						<h3>Quelles sont mes passions ?</h3>
						<p>Elles sont nombreuses ! Tout d'abord, je suis musicien. Je joue de la guitare depuis 11 ans, chante depuis 7 ans et tout récemment je me suis mis à la batterie.</p>
						<p>Je suis aussi fan de sports extrêmes et atypiques. Je pratique l'<a href="https://fr.wikipedia.org/wiki/Airsoft" target="_blank">airsoft</a> depuis bientôt 3 ans !</p>
						<p>Autre passion à mon actif : le modélisme aérien. Je possède un drone de loisirs qui m'aide à prendre de magnifiques plans aériens.</p>
						<p>Parlons culture ! Je suis un grand passionné de culture asiatique et tout particulièrement Japonaise, un "Otaku" dans le jargon.</p>
						<p>Enfin, je suis un grand joueur sur PC et fait partie d'une équipe multi-gaming très présente dans la communauté francophone.</p>
						<div class="container"><hr /></div>
						<h3>Pourquoi le développement web ?</h3>
						<p>J'ai cette passion pour créer des choses depuis longtemps mais je ne me suis intéressé au développement web que depuis peu en considérant l'intérêt d'une double compétence. J'ai alors investi dans des cours en ligne sur Udemy et OpenClassroom afin d'avoir les bases. Je souhaite désormais en faire mon métier car c'est un aspect de l'informatique que je trouve plus intéressant que la partie systèmes et réseaux</p>
					</div>
				</div>
			</div>
		</div>
		

		<!-- SECTION CONTACT -->
		<div class="container-fluid contact-container">
			<div class="row">
				<div id="section-contact" class="col-md-offset-1 col-md-11 col-sm-12 col-xs-12">
		 			<div class="page-header">
						<h1 class="align-right">Me contacter</h1>
					</div>
					<!-- FORMULAIRE DE CONTACT -->
					<div class="col-lg-10 col-lg-offset-1">
						<form id="contact-form" method="post" action="" role="form"> <!-- La récupération des données se fait sur la même page -->
							
							<div class="row">
								<div class="col-md-4 col-md-offset-2">
									<label for="nom">Nom<span class="red"> *</span></label>
									<input type="text" id="nom" name="nom" class="form-control" placeholder="Votre nom" value="">
									<p class="comments"></p>
								</div>
								
								<div class="col-md-4">
									<label for="prenom">Prénom<span class="red"> *</span></label>
									<input type="text" id="prenom" name="prenom" class="form-control" placeholder="Votre prénom" value="">
									<p class="comments"></p>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-4 col-md-offset-2">
									<label for="email">Email<span class="red"> *</span></label>
									<input type="email" id="email" name="email" class="form-control" placeholder="Votre adresse email" value="">
									<p class="comments"></p>
								</div>
								
								<div class="col-md-4">
									<label for="telephone">Téléphone</label>
									<input type="tel" id="telephone" name="telephone" class="form-control" placeholder="Votre numéro de téléphone" value="">
									<p class="comments"></p>
								</div>
								
								<div class="col-md-8 col-md-offset-2">
									<label for="message">Message<span class="red"> *</span></label>
									<textarea type="text" id="message" name="message" class="form-control" placeholder="Votre message" rows="10" value=""></textarea>
									<p class="comments"></p>
								</div>
								
								<div class="col-md-12 col-md-offset-2">
									<p class="red form-required">* Ces information sont requises</p>
								</div>
								
								<div class="col-md-8 col-md-offset-2">
									<input type="submit" class="form-send" value="Envoyer">
								</div>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid footer-content">
			<p class="small align-right">Ce site est hébergé sur un Raspberry Pi 2 modèle B <span> | </span> <B>Copyright Akaiha</B></p>
		</div>
	
	</body>
	

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="ressources/script.js"></script>
</html>