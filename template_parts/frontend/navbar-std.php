<nav>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-inner">
        <div class="inner">
          <div class="identity-col">
            <a href="<?= base_url(); ?>">
              <img src="<?= base_url(); ?>/public/img/logo.png" class="is-desktop" alt="">
              <img src="<?= base_url(); ?>/public/img/logo.png" class="is-mobile" alt="">
              <span class="title">E-Tourism Melinggih Village</span>
            </a>
          </div>
          <div class="menu-col menu-col-desk">
            <ul>
              <li class="<?= $navbar_active == 'home' ? 'active':''; ?>">
                <a href="<?= base_url(); ?>">
                  Home Page
                </a>
              </li>
              <li class="<?= $navbar_active == 'catalog' ? 'active':''; ?>">
                <a href="<?= base_url(); ?>/catalog.php">
                  Catalog
                </a>
              </li>
              <li class="<?= $navbar_active == 'paket-wisata' ? 'active':''; ?>">
                <a href="<?= base_url(); ?>/paket-wisata.php">
                  Tour Packages
                </a>
              </li>
              <li class="<?= $navbar_active == 'history' ? 'active':''; ?>">
                <a href="<?= base_url(); ?>/history.php">
                  History
                </a>
              </li>
              <li class="<?= $navbar_active == 'about' ? 'active':''; ?>">
                <a href="<?= base_url(); ?>/about.php">
                  About
                </a>
              </li>
              <li class="<?= $navbar_active == 'contact' ? 'active':''; ?>">
                <a href="<?= base_url(); ?>/contact.php">
                  Contact
                </a>
              </li>
            </ul>
          </div>

          <div class="menu-col menu-col-mob">
            <div class="hamburger">
              <span class="bars"></span>
            </div>

            <div class="menu">
              <div class="inner">
                <ul>
                  <li class="list-std <?= $navbar_active == 'home' ? 'active':''; ?>">
                    <a href="<?= base_url(); ?>">
                      Home Page
                    </a>
                  </li>
                  <li class="list-std <?= $navbar_active == 'catalog' ? 'active':''; ?>">
                    <a href="<?= base_url(); ?>/catalog.php">
                      Catalog
                    </a>
                  </li>
                  <li class="list-std <?= $navbar_active == 'paket-wisata' ? 'active':''; ?>">
                    <a href="<?= base_url(); ?>/paket-wisata.php">
                      Tour Packages
                    </a>
                  </li>
                  <li class="list-std <?= $navbar_active == 'history' ? 'active':''; ?>">
                    <a href="<?= base_url(); ?>/history.php">
                      History
                    </a>
                  </li>
                  <li class="list-std <?= $navbar_active == 'about' ? 'active':''; ?>">
                    <a href="<?= base_url(); ?>/about.php">
                      About
                    </a>
                  </li>
                  <li class="list-std <?= $navbar_active == 'contact' ? 'active':''; ?>">
                    <a href="<?= base_url(); ?>/contact.php">
                      Contact
                    </a>
                  </li> 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>