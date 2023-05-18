<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
  <script src="https://kit.fontawesome.com/9c624af873.js" crossorigin="anonymous"></script>





  <?php
  wp_head();
  ?>



</head>

<body>
  <div class="topbar" style="padding-top: 12px;">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="paragraph">
        Urgent: Awesome Template for Charity & Non-profit Site
      </div>
      <div class="socmed">
        <a href="http://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        <a href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        <a href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="http://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
      </div>
    </div>
  </div>

  <div class="logobar">
    <div class="container-fluid">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="logo col-6">
            <img src="<?= get_template_directory_uri() . "/assets/images/logo1.png" ?> " class="logo-1" alt="" />
          </div>


          <div class="mail col-2 d-flex">
            <div><i class="fa-regular fa-envelope"></i></div>
            <div>
              <div class="mail1">Mail:</div>
              <div class="email">info@ngoocharity.com</div>
            </div>
          </div>
          <div class="call col-2 d-flex">
            <div><i class="fa-solid fa-phone"></i></div>
            <div>
              <div class="mail1">Call Us:</div>
              <div class="email">+62 7100 1234</div>
            </div>


          </div>
          <div class="button1 col-2">
            <div class="btn btn-primary">DONATE NOW</div>
          </div>
        </div>
      </div>
    </div>
  </div>










  <div class="menuheader">


<?php
wp_nav_menu(
array(
'menu' => 'primary',
'container' => '',
'theme_location' => 'primary',
'items_wrap' => '<ul id="" class="dropdown dropdown-menu">%3$s</ul>'
)
);
?>
    <div class="dropdown" data-dropdown>
      <button class="link" data-dropdown-button>Home</button>
      <div class="dropdown-menu information-grid">
        <a href="#" class="link">Return</a>

      </div>
    </div>

    <div class="dropdown" data-dropdown>
      <button class="link" data-dropdown-button>About</button>
      <div class="dropdown-menu information-grid">
        <div>
          <div class="dropdown-links">
            <a href="#" class="link">About us</a>
            <a href="#" class="link">History</a>
            <a href="#" class="link">Our goals</a>
          </div>
        </div>
      </div>
    </div>

    <div class="dropdown" data-dropdown>
      <button class="link" data-dropdown-button>Causes</button>
      <div class="dropdown-menu information-grid">
        <div>
          <div class="dropdown-links">
            <a href="#" class="link">Root Causes</a>
            <a href="#" class="link">International Context</a>
          </div>
        </div>
      </div>
    </div>

    <div class="dropdown" data-dropdown>
      <button class="link" data-dropdown-button>Pages</button>
      <div class="dropdown-menu information-grid">
        <div>
          <div class="dropdown-links">
            <a href="#" class="link">Research</a>
            <a href="#" class="link">Numbers</a>
            <a href="#" class="link">Literature</a>
          </div>
        </div>
      </div>
    </div>

    <div class="dropdown" data-dropdown>
      <button class="link" data-dropdown-button>Events</button>
      <div class="dropdown-menu information-grid">
        <div>
          <div class="dropdown-links">
            <a href="#" class="link">Get involved</a>
            <a href="#" class="link">Latest</a>
            <a href="#" class="link">Impact</a>
          </div>
        </div>
      </div>
    </div>

    <div class="dropdown" data-dropdown>
      <button class="link" data-dropdown-button>Contact</button>
      <div class="dropdown-menu information-grid">
        <div>
          <div class="dropdown-links">
            <a href="#" class="link">Address</a>
            <a href="#" class="link">Contact us!</a>
          </div>
        </div>
      </div>
    </div>
  </div>



