<?php

use Utility\Navbar;
global $navbar;

?>

<div class="container d-flex align-items-center">

  <a href="/" class="logo me-auto"><img src="/assets/img/maternal-and-child.png" alt="Hospital Logo"></a>
  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

  <?php
  if (!$navbar) {
    echo <<<_END
          <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
              <li><a class="nav-link scrollto " href="/#hero">Home</a></li>
              <li><a class="nav-link scrollto" href="/#about">About</a></li>
              <li><a class="nav-link scrollto" href="/#services">Services</a></li>
              <li><a class="nav-link scrollto" href="/news.php">News</a></li>
              <!-- <li><a class="nav-link scrollto" href="#departments">Departments</a></li> -->
              <!-- <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li> -->
              <li class="dropdown">
                <a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a class="nav-link scrollto" href="/#gallery">Gallery</a></li>
                  <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
                  <!--<li class='d-md-none'><a class="nav-link scrollto" href="/covid-19.php">COVID-19 Response</a></li>
                  <li><a class="nav-link scrollto" href="/staff.php">Staff</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>-->
                  <!--<li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>-->
                </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav>
          <!-- .navbar -->

          <a href="/#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Book an</span> Appointment</a>

_END;
  } else {
    echo Navbar::createNavbar($navbar);
  }
  ?>
</div>