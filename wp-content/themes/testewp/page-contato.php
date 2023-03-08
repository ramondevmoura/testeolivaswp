<?php
	//Template Name: Contato
?>
	<?php
		get_header();
	?>
</div>
</section>
	<section class="contato">
		<div class="center">
			<div class="w50 contato-info">
				<h2><?php the_field('title_contact');?></h2>
				<br />
				<p><b>Telefone:</b> <?php the_field('tel_contact');?></p>
			
			<div class="mapa-container">
				<div id="mapa"></div>
			</div><!--mapa-->
			</div>

			<div class="w50 contato-form">
			<?php echo do_shortcode( '[contact-form-7 id="54" title="Formulário de contato 1"]' ); ?>
			</div>
			<div class="clear"></div>
		</div>
	</section>


<?php get_footer(); ?>