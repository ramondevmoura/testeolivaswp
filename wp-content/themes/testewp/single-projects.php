<?php get_header(); ?>

</br></br></br></br></br>
<section class="sobre-time">
  <div class="center">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="center">
        <div class="center">
          <img width="900px" src="<?php the_post_thumbnail_url(); ?>" />
          </br>
          <div class="center">
          </br>
            <h1 class=""><?php the_title(); ?></h1>
          </br>
            <p><?php the_field('description_project');?></p>
            </br>
            <p><?php the_field('date_project');?></p>
            <p><?php the_taxonomies();?></p>
            </br>
            <a href="<?php the_field('link_project');?>">Conheça o projeto</a>
            </br>
            </br>
          </div>
        </div>
      </div>

      <?php endwhile; endif; ?>

      <?php
      $related_posts = get_posts( array(
          'post_type' => 'projects',
          'posts_per_page' => 3,
          'post__not_in' => array( get_the_ID() ),
          'tax_query' => array(
              array(
                  'taxonomy' => 'project_category',
                  'field' => 'slug',
                  'terms' => wp_get_post_terms( get_the_ID(), 'project_category', array( 'fields' => 'slugs' ) ),
              ),
          ),
      ) );
      
      if ( $related_posts ) :
          ?>
                </br>
                <h2>Posts relacionados:</h2>
                <br/>
                <ul>
                    <?php foreach ( $related_posts as $related_post ) : ?>
                        
                        <a href="<?php echo get_permalink( $related_post ); ?>"><?php echo get_the_title( $related_post ); ?></a>
                    <?php endforeach; ?>
                </ul>
            
          
          <?php
      endif;
      ?>
  </div>    
</section>
<?php get_footer(); ?>







