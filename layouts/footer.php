<?php
global $scripts, $cdn;
?>

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="footer-info">
            <h3><img src="/assets/img/maternal-and-child.png" alt=""></h3>
            <p>
              Behind Immigration Office,<br /> Off ABUAD/Poly Road,<br>
              Ado-Ekiti, Ekiti State, Nigeria<br><br>
              <strong>Phone:</strong> +234 803 388 6173<br>
              <strong>Email:</strong> <a href="mailto:maternalchild@gmail.com" class="text-dark-">maternalchild2008@gmail.com</a><br>
            </p>
            <div class="social-links mt-3">
              <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
              <!-- <a href="//web.facebook.com" class="facebook" target="_blank" rel="noopener noreferrer"><i class="bx bxl-facebook"></i></a> -->
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="/#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/#about">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/#services">Services</a></li>
            <!-- <li><i class="bx bx-chevron-right"></i> <a href="/terms">Terms of service</a></li> -->
            <!-- <li><i class="bx bx-chevron-right"></i> <a href="/privacy">Privacy policy</a></li> -->
          </ul>
        </div>

        <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our monthly newsletter to get notified about our upcoming activities, events or outreaches.</p>
          <form action="/forms/newsletter.php" method="post" id="subscribeForm">
            <input type="email" name="email" required><input type="submit" value="Subscribe">
          </form>

        </div> -->

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Maternal-Child Specialists' Clinics</span></strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<?php

if ($cdn) {
  echo <<<_END
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
  _END;
} else {
  echo <<<_
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    _;
}

?>
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/purecounter/purecounter.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>
<?php
if ($scripts) {
  foreach ($scripts as $script) {
    echo "<script src='$script'></script>";
  }
}
?>
<script src="https://www.google.com/recaptcha/api.js" async defer>
</script>

</body>

</html>