<?php
  include(__DIR__.'/app/functions.php');
  $metaData = [
    'title' => config('app.name')
  ];
  $navbar_active = 'home';
  include(__DIR__.'/template_parts/frontend/open.php');
  include(__DIR__.'/template_parts/frontend/navbar-std.php');
?>

<header class="slideshow-header">
  <div id="caroSlideHome" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url(); ?>/public/img/home-slideshow/slide-1.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption">
          <div class="inner">
            <h2 class="cap-title animated fadeInUp" style="animation-delay: .5s">E-Tourism Melinggih Village</h2>
            <p class="cap-desc animated fadeIn" style="animation-delay: 1s">Melinggih Village is located in Payangan District, Gianyar Regency, Bali, and is an interesting tourist destination to explore. With an area of ​​approximately 4.87 km², this village is located on a plateau with an altitude of between 500 and 600 meters above sea level. Melinggih Village consists of five Banjar Dinas: Melinggih, Payangandesa, Badung, Geria, and Sema. With a population of approximately 7,465 people, the people of Melinggih Village are known for their diverse livelihoods that reflect their rich culture and dynamic daily life.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url(); ?>/public/img/home-slideshow/slide-3.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption">
          <div class="inner">
            <h2 class="cap-title animated fadeInUp" style="animation-delay: .5s">Fresh Air Beautiful Village</h2>
            <p class="cap-desc animated fadeIn" style="animation-delay: 1s">Known for its highland characteristics, Melinggih Village offers cool air and a peaceful atmosphere, making it an ideal place to unwind. Visitors can explore authentic rural life and experience a peace that is rarely found elsewhere. With a tropical climate and an average daily temperature of around 26°C, this village is a perfect choice for those seeking tranquility amidst pristine and fresh nature.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="abs-navigate-to-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#caroSlideHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#caroSlideHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="featured-video">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h2 class="title">Melinggih Village Promotion Video</h2>
        <video style="width:100%;" poster="<?= base_url(); ?>/public/video/melinggih-wonderfull-poster.png" controls="" class="mt-4">
          <source src="<?= base_url(); ?>/public/video/melinggih-wonderfull.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
</section>

<?php
  include(__DIR__.'/template_parts/frontend/footer.php');
  include(__DIR__.'/template_parts/frontend/close.php');
?>