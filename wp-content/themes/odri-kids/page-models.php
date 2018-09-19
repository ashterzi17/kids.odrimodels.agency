<?php 
/*
Template Name: Модели
*/  
?>
<?php get_header() ?>
<main>
    <div class="container">
      <h1 class="pagename"><?php the_title( $before = '', $after = '', $echo = true ) ?></h1>
      <section class="models">
        <?php 
          $args = array(
            'numberposts' => 0,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          );
          $posts = get_posts( $args );

          foreach( $posts as $post ){
            setup_postdata($post);
          ?>  
          <div class="model">
            <img src="<?php the_field('object_photo') ?>" alt="" class="model__imgprev">
            <a href="<?php echo get_permalink() ?>" class="model__name"><?php the_title() ?></a>
          </div>
           <?php 
           }
            wp_reset_postdata(); // сброс
          ?>


        
       <!--  <div class="model">
          <img src="src/img/IMG_8752.jpg" alt="" class="model__imgprev">
          <a href="children_info_anastasiyan.php" class="model__name">Анастасия Н.</a>
        </div>
        <div class="model">
          <img src="src/img/IMG_9872.jpg" alt="" class="model__imgprev">
          <a href="children_info_antonina.php" class="model__name">Антонина</a>
        </div>
        <div class="model">
          <img src="src/img/IMG_8752.jpg" alt="" class="model__imgprev">
          <a href="children_info_arsen.php" class="model__name">Арсен</a>
        </div> -->
      </section>

  </main>
<?php get_footer() ?>
