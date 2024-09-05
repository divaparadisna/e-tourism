<?php
  include(__DIR__.'/app/functions.php');
  $metaData = [
    'title' => config('app.name')
  ];
  $navbar_active = 'about';
  include(__DIR__.'/template_parts/frontend/open.php');
  include(__DIR__.'/template_parts/frontend/navbar-std.php');
?>

<header class="header-std-feat-page">
  <img src="<?= base_url(); ?>/public/img/about/header-featured-img.jpg" alt="">
  <div class="abs-content">
    <h1 class="title">Development Team</h1>
  </div>
</header>

<section class="our-teams pt-5 pb-5">
  <div class="container py-3">
    <div class="row row-item mt-5">
      <div class="col-md-4 col-item mt-5 mb-5">
        <div class="inner">
          <div class="profile">
            <div>
              <img src="<?= base_url(); ?>/public/img/blank-profile.jpg" alt="">
            </div>
          </div>
          <div class="content">
            <h5 class="guide-name">Supervisor 1</h5>
            <p>GUSTI NGURAH MEGA NATA, S.kom., M.T.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-item mt-5 mb-5">
        <div class="inner">
          <div class="profile">
            <div>
              <img src="<?= base_url(); ?>/public/img/blank-profile.jpg" alt="">
            </div>
          </div>
          <div class="content">
            <h5 class="guide-name">Supervisor 2</h5>
            <p>NI WAYAN CAHYA AYU PRATAMI, S.E., M.M</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-item mt-5 mb-5">
        <div class="inner">
          <div class="profile">
            <div>
              <img src="<?= base_url(); ?>/public/img/blank-profile.jpg" alt="">
            </div>
          </div>
          <div class="content">
            <h5 class="guide-name">Author</h5>
            <p>KADEK DIVA PARADISNA</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  include(__DIR__.'/template_parts/frontend/footer.php');
  include(__DIR__.'/template_parts/frontend/close.php');
?>