<?php
  include(__DIR__.'/app/functions.php');
  $metaData = [
    'title' => config('app.name')
  ];
  $navbar_active = 'catalog';
  include(__DIR__.'/template_parts/frontend/open.php');
  include(__DIR__.'/template_parts/frontend/navbar-std.php');
?>

<header class="header-std-feat-page">
  <img src="<?= base_url(); ?>/public/img/catalog/header-featured-img.jpg" alt="">
  <div class="abs-content">
    <h1 class="title">Catalog E-Tourism Melinggih Village</h1>
  </div>
</header>

<section class="grid-package pt-3 pb-5">
  <div class="container py-3">
    <div class="row row-item mt-5">
      <?php include('template_parts/item_wisata/arung-jeram-sungai-ayung.php'); ?>
      <?php include('template_parts/item_wisata/jogging-track.php'); ?>
      <?php include('template_parts/item_wisata/trekking-cycling-tour.php'); ?>
      <?php include('template_parts/item_wisata/umah-padi-cooking-class.php'); ?>
      <?php include('template_parts/item_wisata/green-gadjah-ubud-bali.php'); ?>
      <?php include('template_parts/item_wisata/the-abhinaya-villa.php'); ?>
      <?php include('template_parts/item_wisata/soodama-villas.php'); ?>
      <?php include('template_parts/item_wisata/tour-guide-spl-trans.php'); ?>
    </div>
  </div>
</section>

<?php
  include(__DIR__.'/template_parts/frontend/footer.php');
  include(__DIR__.'/template_parts/frontend/close.php');
?>