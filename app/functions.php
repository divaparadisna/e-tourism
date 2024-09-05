<?php
include(__DIR__.'/config.php');

/**
 * Base Url
 */
function base_url()
{
  return sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'], ''.'/e-tourism-desa-melinggih'
  );
}

/**
 * Config
 */
function config($key = '')
{
  $arrDataConfig = [
    'app.name' => config::SITE_NAME
  ];

  return $arrDataConfig[$key];
}

function baseAuth_header()
{
  include(dirname(__DIR__).'/parts/auth/header.php');
}

function baseAuth_footer()
{
  include(dirname(__DIR__).'/parts/auth/footer.php');
}

function baseDsh_header($title = "")
{
  include(dirname(__DIR__).'/parts/dashboard/header.php');
}

function baseDsh_navbar()
{
  include(dirname(__DIR__).'/parts/dashboard/navbar.php');
}

function baseDsh_sidebar($active = "")
{
  include(dirname(__DIR__).'/parts/dashboard/sidebar.php');
}

function baseDsh_footer()
{
  include(dirname(__DIR__).'/parts/dashboard/footer.php');
}

function baseDsh_footerPlugins()
{
  include(dirname(__DIR__).'/parts/dashboard/footer-plugins.php');
}

$navbar_active = ''; // initialize the variable

// set the active menu item based on the current page
if (isset($_GET['page'])) {
  $navbar_active = $_GET['page'];
} else {
  $navbar_active = 'home'; // default to home page
}

function generate_nav_menu() {
  $menu_items = array(
    'home' => 'Home Page',
    'catalog' => 'Catalog',
    'history' => 'History',
    'about' => 'About',
    'contact' => 'Contact',
    'paket-wisata' => 'Paket Wisata'
  );

  $output = '<ul>';
  foreach ($menu_items as $key => $label) {
    $active = ($navbar_active == $key) ? 'active' : '';
    if (isset($submenu_items[$key])) {
      $output .= '<li class="' . $active . '"><a href="' . base_url() . '/' . $key . '.php">' . $label . '</a><ul>';
      foreach ($submenu_items[$key] as $submenu_key => $submenu_label) {
        $output .= '<li><a href="' . base_url() . '/' . $key . '/' . $submenu_key . '">' . $submenu_label . '</a></li>';
      }
      $output .= '</ul></li>';
    } else {
      $output .= '<li class="' . $active . '"><a href="' . base_url() . '/' . $key . '.php">' . $label . '</a></li>';
    }
  }
  $output .= '</ul>';

  return $output;
}
