<?php
  include(__DIR__.'/app/functions.php');
  $metaData = [
    'title' => config('app.name')
  ];
  $navbar_active = 'contact';
  include(__DIR__.'/template_parts/frontend/open.php');
  include(__DIR__.'/template_parts/frontend/navbar-std.php');
?>

<header class="header-std-feat-page">
  <img src="<?= base_url(); ?>/public/img/contact/header-featured-img.jpg" alt="">
  <div class="abs-content">
    <h1 class="title">Contact Person</h1>
  </div>
</header>

<section class="contact-us pt-5 pb-5">
  <div class="container py-3">
    <div class="row mt-5">
      <div class="col-md-12">
        <h2 class="title">Contact Us</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15786.968597040088!2d115.23045419875584!3d-8.42696386579519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2224a6d2ee63b%3A0x5030bfbca830e70!2sMelinggih%2C%20Payangan%2C%20Gianyar%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1716318782230!5m2!1sen!2sid" class="maps-frame" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="box-icon">
          <ul>
            <li>
              <a href="https://wa.me/+6281285717932?text=Booking%20Now%20" target="_blank">
                <div class="frame">
                  <i class="fa fa-address-book-o"></i>
                </div>
                <p>Contact</p>
              </a>
            </li>
            <li>
              <a href="https://mail.google.com/mail/?view=cm&fs=1&to=divaparadisna019@gmail.com" target="_blank">
                <div class="frame">
                  <i class="fa fa-envelope-o"></i>
                </div>
                <p>Email</p>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/divaparadisna/" target="_blank">
                <div class="frame">
                  <i class="fa fa-instagram"></i>
                </div>
                <p>Instagram</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
  include(__DIR__.'/template_parts/frontend/footer.php');
  include(__DIR__.'/template_parts/frontend/close.php');
?>