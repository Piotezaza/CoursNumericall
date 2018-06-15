<?php get_header(); ?>

		
		<section id="section-hentry" class="wrapper">

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
							<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
								<div class="hentry-container">
									<?php 
										the_post_thumbnail(
											'marble-thumbnail', 
											array
											(
											'class'=>'hentry-thumbnail'
											)
										); 
									?>
									<div class="hentry-text">
										<!-- 
										On utilise les templates tags à l'intérieur de la boucle pour afficher les contenue dynamiques de l'article en cours de génération
									-->
									<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
									<p class="metas">Mise en ligne le: <?php the_date();?> / par: <?php the_author();?> / Dans: <?php the_category(', '); ?></p>

									<p><?php the_excerpt(); ?></p>
									</div>									
								</div>
							</article>
				<?php			
						} // end while
					} // end if
				?>
		</section>

<?php get_footer(); ?>