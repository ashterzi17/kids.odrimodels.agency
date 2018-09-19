<?php 
/*
Template Name: Контакты
*/  
?>

<?php get_header() ?>
<main>
		<section class="contact-us">
      <div class="container">
        <div class="contact-flex">
        <div class="contact-info">
          <h2  class="contact-info__heading"><?php the_title() ?></h2>
          <ul class="contact-info__list">
            <li class="contact-info__list-item address">   65007, Одесса, Пантелеймоновская 110, Fresh Market, 2-ой этаж</li>
            <li class="contact-info__list-item phone"> +380 (63) 299 84 14, +380 (67) 173 31 79</li>
            <li class="contact-info__list-item email"> <a class="contact-info__link"  href="mailto:info@odrimodels.agency?subject=feedback">info@odrimodels.agency</a></li>
       
          </ul>

          <h2 class="contact-info__heading contact-info__heading--mod">Соц. сети</h2class>
         <div class="social-media social-media--mod">
					<a href="https://www.facebook.com/odriMM/" class="social-media__link social-media__link--mod"><span class="fb"></span></a>
        			<a href="https://www.youtube.com/channel/UC3D9X5SwgREexSF1w6QqKIQ" class="social-media__link social-media__link--mod"><span class="yt"></span></a>
        			<a href="https://www.instagram.com/odri_models/" class="social-media__link social-media__link--mod"><span class="insta"></span></a>
				</div>
        </div>
        <div class="contact-map">
          <h2 class="contact-map__heading">Мы на карте</h2>
          <div class="map" id="map-main"></div>
        </div>
        </div>
      </div>
    </section>
	</main>


<?php get_footer() ?>
