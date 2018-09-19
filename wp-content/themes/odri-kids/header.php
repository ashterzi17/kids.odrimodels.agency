<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ODRI MODELS MANAGEMENT KIDS - Детское модельное агентство и модельная школа</title>
<!--   <link rel="stylesheet" href="src/scss/normalize.css">
  <link rel="stylesheet" href="src/css/main.css">
  <script src="src/js/jquery-3.2.1.min.js"></script> -->
  <?php wp_head() ?>
</head>
<body>
  <header class="kids-header">
    <div class="container">
    <!--  <div class="logo-section"><div class="logo"><img src="" alt="" class="logo"></div></div> -->
      <nav class="kids-nav">
        <?php wp_nav_menu( array(
          'container'       => 'ul',
          'container_class' => 'kids-nav-list',
          'menu_class'      => 'kids-nav-list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ) ); ?>
        <!-- <ul class="kids-nav-list">
          <li class="kids-nav-list__item"><a href="" class="kids-nav-list__link">модели</a>
          </li>
          <li class="kids-nav-list__item"><a href="" class="kids-nav-list__link">модельная школа</a></li>
          <li class="kids-nav-list__item"><a href="" class="kids-nav-list__link">мероприятия</a>
          </li>
          <li class="kids-nav-list__item kids-nav-list__item--mod"><a href="" class="kids-nav-list__link ">
            <?php the_custom_logo(); ?>
              
            </a></li>
          <li class="kids-nav-list__item"><a href="" class="kids-nav-list__link">стать моделью</a></li>
          <li class="kids-nav-list__item"><a href="" class="kids-nav-list__link">новости</a></li>
          <li class="kids-nav-list__item"><a href="" class="kids-nav-list__link">контакты</a></li>
        </ul> -->
      </nav>
    </div>
  </header>