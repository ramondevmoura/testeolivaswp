<?php
	//Template Name: Home
?>
<?php get_header(); ?>
		<div class="clear"></div>
			<br />
			<br />
			<div class="w50 time-descricao">
				<h2><?php the_field('title_topo');?></h2>
				<p><?php the_field('description_topo');?></p>
				<a target="_blank" href="<?php the_field('link_contact');?>">Entrar em contato</a>
			</div><!--w50-->
			<div class="w50 time-imagem">
				<img src="<?php the_field('image_topo');?>" />
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--topo-->
	<div class="circle"><i class="fas fa-angle-down"></i></div>
	<section class="conteudo-da-pagina">
	</section>

	<section class="clientes-slider">

		<div class="center">
		<div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
			<img src="<?php the_field('images_logos');?>" />
			<img src="<?php the_field('images_logos1');?>" />
			<img src="<?php the_field('images_logos2');?>" />
			<img src="<?php the_field('images_logos3');?>" />
			<img src="<?php the_field('images_logos4');?>" />
			<img src="<?php the_field('images_logos');?>" />
			<img src="<?php the_field('images_logos1');?>" />
			<img src="<?php the_field('images_logos2');?>" />
			<img src="<?php the_field('images_logos3');?>" />
			<img src="<?php the_field('images_logos4');?>" />
		</div>

		</div><!--center-->

	</section>

	
	<section class="sobre-time">
				<div class="center">
						
					<div class="w70">
					<h2 class="center">Conheça um pouco do nosso trabalho:</h2><!--w70-->
						<div class="icons-diferenciais">
							<?php
									$args = array(
										'post_type'=> 'projects',
										'post_per_page'=> 2,
									);
									$query = new WP_Query( $args);
									while ($query->have_posts() ) : $query->the_post(); 
									$termsArray = get_the_terms($post->ID, 'project_category');
									$termsSLug = "";
									foreach ($termsArray as $term) {
										$termsSLug .= $term->slug . ' ';
									}
									?>
									
									
									<div class="center">
										<div class="box-single-diferenciais">
											<img src="<?php the_post_thumbnail_url(); ?>" />
											<h3><?php the_title();?></h3>
											<p><?php the_field('description_project');?></p>
											</br>
											<p><?php the_field('date_project');?></p>
											<p><?php the_taxonomies();?></p>

											</br>
										</div><!--box-single-diferenciais-->	
									</div>	
											
							<?php endwhile; 
							
							wp_reset_postdata();
									
							?>		
						</div>
					</div>
					<div class="clear"></div>
			
		</div>	
	</section>


	

	<section class="depoimentos">
		<div class="center">
			<h2>Depoimentos</h2>
			<div class="depoimentos-box">
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Gabriel Prado</p>
					<img src="<?php echo get_theme_root_uri(); ?>/testewp/images/autor.jpg" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Gabriel Prado</p>
					<img src="<?php echo get_theme_root_uri(); ?>/testewp/images/autor.jpg" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Gabriel Prado</p>
					<img src="<?php echo get_theme_root_uri(); ?>/testewp/images/autor.jpg" />
				</div><!--depoimento-single-->
			</div><!--depoimentos-box-->
		</div>
	</section>
	<script src="<?php echo get_theme_root_uri(); ?>/testewp/js/main.js"></script>
	<?php get_footer(); ?>


	
