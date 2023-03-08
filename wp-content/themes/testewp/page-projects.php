<?php
	//Template Name: Projetos
?>

<?php
		get_header();
	?>
</div>
</section>
	<section class="sobre-time">
		<div class="center">
			
              <div class="w15"> 
                <form action="">
                    <?php
                    $categories = get_terms( array(
                        'taxonomy' => 'project_category',
                        'hide_empty' => true,
                    ) );
                
                    if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
                        foreach ( $categories as $category ) {
                            ?>
                            <div class="">
                                </br>
                                <input type="checkbox" name="categories[]" id="category-<?php echo $category->term_id; ?>" value="<?php echo $category->slug; ?>" />
                                <label for="category-<?php echo $category->term_id; ?>"><?php echo $category->name; ?></label>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <br/>
                    <button type="submit">Filtrar</button>
                </form>
              </div>          
                <?php
                    $args = array(
                        'post_type' => 'projects',
                        'posts_per_page' => -1,
                    );
                    
                    if ( isset( $_GET['categories'] ) && ! empty( $_GET['categories'] ) ) {
                        $args['tax_query'] = array(
                            array(
                                'taxonomy' => 'project_category',
                                'field' => 'slug',
                                'terms' => $_GET['categories'],
                            ),
                        );
                    }
                    
                    $the_query = new WP_Query( $args );
                    
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>
                            <div class="box-single-diferenciais">
                              <img src="<?php the_post_thumbnail_url(); ?>" />
                              <h3><?php the_title();?></h3>
                              <p><?php the_field('description_project');?></p>
                              </br>
                              <p><?php the_field('date_project');?></p>
                              <a href="<?php echo get_permalink( ); ?>">Saiba Mais</a>
                              </br>
                            </div><!--box-single-diferenciais-->	
                          
                        <?php endwhile; 
                    else :
                        // No posts found
                    endif;
                    
                    wp_reset_postdata();
                    ?>
        </div>

              
			
		</div>

    
	</section>


<?php get_footer(); ?>

