<!DOCTYPE html>
<html>
    <head>
        <?php include("head.php"); ?>
        <title>Création</title>
    </head>
	
	<body>
		<div id="bloc_page">
			<header> 
				<?php include("header.php") ?>
			</header>
		
			<div id="banniere_image">
				<!-- Banderolle décorative -->
				<div id="banniere_description">
					"<em>Il ne suffit pas de vouloir, il faut agir</em>" 
				</div>
			</div>
			
			<div id="ergo">
				<nav>
					<ul>
						<li><a href="#sites">sites</a> </li>
						<li><a href="#ihm">ihm</a> </li>
					</ul>
				</nav>
			</div>
			
			
			<!-- Les sites réalisés -->
			<section>
				<article id="sites">
					<h1><img src="images_cv/illus.png" alt="" class="ico_categorie"/>Sites</h1>
					
					<div>
						<h2>Yourgroups.net (Déc 2010 - Jan 2011)</h2>
						<p style="box-shadow: 0px 2px 4px rgb(28,26,25);
									border: 3px ridge rgb(200,200,200);
									border-radius: 5px;
									padding: 5px;">
							Yourgroups.net est le premier site que j'ai réalisé. <br/>
							Ce réseau social avait pour but de concurrencer Facebook. <br/>
							Son concept reposais sur la possibilité de créer des groupes, et ainsi laisser la possibilité aux internautes 
							d'avoir des espaces de discussion où ils pouvaient discuter librement sans craindre le regard critique d'autres amis. <br/>
							Cependant pendant le développement, Facebook réalisa en octobre 2010 une fonctionnabilité qui permit de créer des groupes.<br/>
							C'est alors qu'après le lancement de Yourgroups.net en décembre 2010, après un mois de fonctionnement, 
							il fut décidé de fermer le site, car les millers d'utilisateurs attendus ne furent pas au rendez-vous.<br/><br/>
							
							Cela reste cependant pour une première expérience dans le web, une très belle prouesse technique dont je suis très fier.<br/><br/>
							
							Les technologies utilisées sont XHTML, CSS2, PHP et MySQL.
						</p>
					</div>
					
					<iframe id="ytplayer" type="text/html" width="640" height="360"
							src="https://www.youtube.com/embed/bOyZUCZwOgI"
							frameborder="0" allowfullscreen > 
					</iframe>
					
				</article>
				
				<article id="ihm">
				
					<h1><img src="images_cv/illus.png" alt="" class="ico_categorie"/>IHM</h1>
					
					<div>
						<h2>Générateur de lettre de motivation (Janvier 2012)</h2>
						<p style="box-shadow: 0px 2px 4px rgb(28,26,25);
									border: 3px ridge rgb(200,200,200);
									border-radius: 5px;
									padding: 5px;">
							Formulaire qui génère une lettre de motivation. <br/>
							Ce logiciel a été codée en C++. La bibliothèque utilisée est Qt.
						</p>
						
						<iframe id="ytplayer" type="text/html" width="640" height="360"
							src="https://www.youtube.com/embed/hf2z1UZ4t2Y"
							frameborder="0" allowfullscreen > 
						</iframe>
					</div>
					
					<div>
						<h2>Equation d'ordre 2 (Mars 2015)</h2>
						<p style="box-shadow: 0px 2px 4px rgb(28,26,25);
									border: 3px ridge rgb(200,200,200);
									border-radius: 5px;
									padding: 5px;">
							Interface Homme-Machine permettant de résoudre une équation du second degré. <br/>
							Cette IHM a été codée en JAVA. Les bibliothèques utilisées sont SWING et AWT.
						</p>
						
						<img src="images_cv/ihm_secondDegre.png" alt="" />
					</div>
					
					<div>
						<h2>Running (Mars 2015)</h2>
						<p style="box-shadow: 0px 2px 4px rgb(28,26,25);
									border: 3px ridge rgb(200,200,200);
									border-radius: 5px;
									padding: 5px;">
							Interface Homme-Machine permettant de calculer la vitesse en fonction de la distance et du temps. <br/>
							Cette IHM a été codée en JAVA. Les bibliothèques utilisées sont SWING et AWT.
						</p>
						
						<img src="images_cv/ihm_running.png" alt="" />
					</div>
					
				</article>
				<a href="#titre_principal"><img src="images_cv/goTop.png" alt="haut de page" title="haut de page" /></a>
				
			</section>
						
			<footer>
				<?php include("footer.php") ?>
			</footer>
		</div>
	</body>
	
</html>