<?php get_header(); ?>
<main>
        <div class="container">
          <section class="model-profile">
            <div class="model-info">
              <h2 class="model-info__name model-info__name--rus"><?php the_title() ?></h2>
              <div class="modelinfonew">
                <ul class="newinfo">
                  <li class="newinfo-item">
                    <span class="newinfo-item__name">Рост</span>
                    <span class="newinfo-item__value"><?php the_field('object_height') ?></span></li>
                  <li class="newinfo-item">
                    <span class="newinfo-item__name">Обувь</span>
                    <span class="newinfo-item__value"><?php the_field('object_shoe_size') ?></span></li>
                  <li class="newinfo-item">
                    <span class="newinfo-item__name">Глаза</span>
                    <span class="newinfo-item__value"><?php the_field('object_hair') ?></span></li>
                  <li class="newinfo-item">
                    <span class="newinfo-item__name">Волосы</span>
                    <span class="newinfo-item__value"><?php the_field('object_eyes') ?></span></li>
                  <li class="newinfo-item">
                    <span class="newinfo-item__name">Возраст</span>
                    <span class="newinfo-item__value"><?php the_field('object_age') ?></span></li>
                </ul>
              </div>
            </div>
            <div class="model-slider">
                <?php 
                the_post();
                the_content(); ?>
            </div>
        </section>
        </div>
    </main>
<?php get_footer(); ?>
