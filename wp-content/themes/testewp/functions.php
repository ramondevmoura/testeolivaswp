
<?php

add_theme_support('post-thumbnails' );




function create_project_function(){
  $labels = array(
      'name' => _x('Projects', 'post type general name', 'your_text_domain'),
      'singular_name' => _x('Project', 'post type Singular name', 'your_text_domain'),
      'add_new' => _x('Adicionar Novo', '', 'your_text_domain'),
      'add_new_item' => __('Adicionar novo projeto', 'your_text_domain'),
      'edit_item' => __('Editar Projeto', 'your_text_domain'),
      'new_item' => __('Novo Projeto', 'your_text_domain'),
      'all_items' => __('Todos Projetos', 'your_text_domain'),
      'view_item' => __('Ver Projeto', 'your_text_domain'),
      'search_items' => __('Procurar Projeto', 'your_text_domain'),
      'not_found' => __('Nenhum Projeto Encontrado', 'your_text_domain'),
      'not_found_in_trash' => __('Nenhum projeto encontrado no lixo', 'your_text_domain'),
      'parent_item_colon' => '',
      'menu_name' => __('Projects', 'your_text_domain')
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'project'),
    'capability_type' => 'page',
    'has_archive' => true,
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-format-gallery',
    'supports' => array('title', 'thumbnail')
);
$labels = array(
  'name' => __('Categorias'),
  'singular_name' => __('Categoria'),
  'search_items' => __('Procurar'),
  'popular_items' => __('Mais usados'),
  'all_items' => __('Todas as categorias'),
  'parent_item' => null,
  'parent_item_colon' => null,
  'edit_item' => __('Add novo'),
  'update_item' => __('Atualizar'),
  'add_new_item' => __('Add nova categoria'),
  'new_item_name' => __('Novo')
);

register_taxonomy('project_category', array('projects'), array(
  'hierarchical' => true,
  'labels' => $labels,
  'singular_label' => 'project_category',
  'all_items' => 'Categoria',
  'query_var' => true,
  'rewrite' => array('slug' => 'cat'))
  ); 
  register_post_type('projects', $args);
  flush_rewrite_rules();
}
add_action('init', 'create_project_function', 0);

?>