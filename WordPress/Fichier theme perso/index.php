<?php get_header(); ?>

		
		<section id="section-hentry" class="wrapper">
			<div class="container">

				<?php 
				/*
					Avant tout ça, il y a la query (qu'on ne voit pas)
					La requête de WordPress remplit un objet et des fonctions avec des paramètres préétablis qui permet d'afficher le contenu d'un ou plusieurs articles dans la boucle

					On test s'il y a des articles/pages à afficher
				*/ 
					if ( have_posts() ) 
					{
						// Tant qu'il reste quelque chose à afficher, continue
						while ( have_posts() ) 
						{
							// Définit le contenu courant de l'article
							the_post(); 
				?>
							<article class="col">
								<!-- 
									On utilise les templates tags à l'intérieur de la boucle pour afficher les contenue dynamiques de l'article en cours de génération
								 -->
								<h1><?php the_title(); ?></h1>
								<p class="metas">Mise en ligne le: <?php the_date();?> / par: <?php the_autor();?></p>

								<?php the_content(); ?>
							</article>
				<?php			
						} // end while
					} // end if
				?>
			</div>
		</section>

<?php get_footer(); ?>