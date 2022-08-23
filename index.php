<?php
require './setup.php';

use Utility\Functions;

$navbar = null;
const TITLE = 'Home';

Functions::extend('header');
?>

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url('/assets/img/IMG_20210503_140559_463.jpg')">
        <div class="container">
          <h2>Welcome to <span>Maternal-Child</span></h2>
          <p>The one-stop shop for safe motherhood in Ekiti State</p>
          <a href="#about" class="btn-get-started scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url('/assets/img/gallery/IMG_20210503_145132_926.jpg')">
        <div class="container">
          <h2>Protecting the leaders of tomorrow</h2>
          <p>Our utmost duty is to ensure the delivery of healthy babies to healthy mothers in a contented family</p>
          <a href="#about" class="btn-get-started scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url('/assets/img/gallery/IMG_20210503_135739_046.jpg')">
        <div class="container">
          <!-- <h2>Sequi ea ut et est quaerat</h2> -->
          <p>We offer focused antenatal care for our clients following them up in our antenatal clinic, giving them evidence based instructions and supporting them throughout the process of pregnancy</p>
          <a href="#about" class="btn-get-started scrollto">Read More</a>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>

  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Featured Services Section ======= -->
  <!-- <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Featured Services Section -->

  <!-- ======= Cta Section ======= -->
  <!-- <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>In an emergency? Need help now?</h3>
        <a class="cta-btn scrollto" href="#appointment">Book an Appointment</a>
      </div>

    </div>
  </section>End Cta Section -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Us</h2>
        <p>Maternal-Child Specialists’ Clinics is a modern healthcare facility in two locations in Ado-Ekiti, Ekiti State, Nigeria.</p>
      </div>

      <div class="row">
        <div class="col-lg-6" data-aos="fade-right">
          <img src="/assets/img/IMG_20210503_140700_799.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>What You Should Know</h3>
          <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
          <ul>
            <li><i class="bi bi-check-circle"></i> It was established on the 1st of March, 2008 as a one-stop shop for safe motherhood in Ekiti State.</li>
            <li><i class="bi bi-check-circle"></i> Maternal-Child Specialists’ Clinics is a rapidly growing hospital in Ado-Ekiti, the capital city of Ekiti State, Southwest Nigeria with special interest in Comprehensive Maternity Care, Fetomaternal Medicine, Minimal Access Surgery, Advanced Fertility Management and General Gynaecology. We also offer specialised care in Paediatrics, Internal Medicine, General Surgery, Orthopaedics, Urology, Ophthalmology, Oral and Maxillofacial Surgery, Dental Surgery, Ear, Nose and Throat (ENT) Surgery, Laboratory Medicine, Pharmacy and other relevant fields of Medicine and Surgery.</li>
            <li><i class="bi bi-check-circle"></i> Our clinic is NHIS accredited as a Primary provider and Secondary provider in Obstetrics & Gynaecology, General Surgery, Paediatrics, General Surgery, Ophthalmology Internal Medicine and Laboratory Medicine.</li>
            <li><i class="bi bi-check-circle"></i> Maternal-Child Specialists’ Clinics is listed as one of the hospital’s recognized by United Nations and WHO for care of their staff.</li>
            <!-- <li><i class="bi bi-check-circle"></i> <a href="/covid-19.php">Read about our responses to COVID-19 in our communitites</a></li> -->
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Counts Section ======= -->
  <!-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>

              <p><strong>Doctors</strong></p>
              <a href="/doctors.php">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Departments</strong></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Health Maintenance Organizations</strong></p>
              <a href="/insurance.php">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong></p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section>End Counts Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</h2>
        <p>Maternal-Child Specialists’ Clinic operates for 24 hours every day of the week with the following services</p>
      </div>


      <!-- ======= Features Section ======= -->
      <section id="features" class="features">
        <div class="container" data-aos="fade-up">

          <div class="row">
            <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
              <div class="icon-box mt-5 mt-lg-0">
                <i class="bx bx-cube-alt"></i>
                <h4>General Gynaecology</h4>
                <p>We have motivated Gynaecologist,s handling the general diseases of women reproductive organs as well as Gynecological Oncology</p>
              </div>
              <div class="icon-box mt-5">
                <i class="bx bx-images"></i>
                <h4>Pharmacy</h4>
                <p>This unit is available for 24 hours, 7 days a week to assist our clients get high-quality drugs & medication</p>
              </div>
              <div class="icon-box mt-5">
                <i class="bx bx-shield"></i>
                <h4>Advanced Fertility Care</h4>
                <p>Since 2008, M&CSC has achieved outstanding successes in advanced fertility management</p>
              </div>
              <div class="icon-box mt-5">
                <i class="fas fa-dna"></i>
                <h4>General Surgery and Urology</h4>
                <p>The services in Maternal-Child Specialists’ Clinics also extend to the surgical specialties where our general Surgeon and urologist attend to our clients with satisfactory outcomes</p>
              </div>
              <div class="icon-box mt-5">
                <i class="bx bxs-flask"></i>
                <h4>Laboratory Medicine</h4>
                <p>This unitOur laboratory service is well-equipped with automated machines running 24 hours, 7 days a week</p>
              </div>
              <div class="icon-box mt-5">
                <i class="bx bx-award"></i>
                <h4>Infant Welfare Clinic</h4>
                <p>We monitor all our newborn babies from first month of delivery till one year of age in our infant welfare clinics monitoring their growth and counseling their mothers on the appropriate infant nutrition</p>
              </div>
              <div class="icon-box mt-5">
                <i class="bi bi-alarm"></i>
                <h4>Radiology</h4>
                <p>Maternal-Child Specialists’ Clinics has a standard X-Ray machine and a 4D ultrasound scan with personnel capable of handling interventional radiology</p>
              </div>
            </div>
            <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
              <div class="image order-1 order-lg-2" style='background-image: url("/assets/img/slide/maternal-child sign shot.jpeg");' data-aos="zoom-in"></div>
            </div>
          </div>
        </div>
      </section><!-- End Features Section -->

      <div class="section-title mt-5">
        <h3>Other Notable Services</h3>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon"><i class="bx bx-food-menu"></i></div>
          <h4 class="title">Kitchen</h4>
          <p class="description">A standard kitchen to refresh our clients and their families</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fas fa-hospital-user"></i></div>
          <h4 class="title">Immunization</h4>
          <p class="description">We run the immunization clinic every Tuesday where we offer routine and special immunizations including Cervical Cancer, Meningitis, Rota virus, Typhoid, Mumps, Measles and Rubella Vaccinations</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon"><i class="fas fa-wheelchair"></i></div>
          <h4 class="title">Out-Patient Services</h4>
          <p class="description">Our medical officers provide home services to patients, particularly for our geriatric and other terminally ill clients</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="fa fa-child"></i></div>
          <h4 class="title">Creche / Daycare</h4>
          <p class="description">Maternal-Child Specialists’ Clinics also offers a daycare system for both staff and clients' children</p>
        </div>
        <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon"><i class="bx bx-female-sign"></i></div>
          <h4 class="title">Comprehensive Maternity Care</h4>
          <p class="description">Maternal-Child Specialists’ Clinic offers contemporary, comprehensive maternity care to women in Ado-Ekiti and its environs to ensure the delivery of healthy babies to a healthy mother in a contented family.</p>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Appointment Section ======= -->
  <section id="appointment" class="appointment section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Book an Appointment</h2>
        <p>Book your appointments easily with our online booking system. All information will be communicated to you via e-mail.</p>
      </div>

      <form action="/forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100" id="appointment-form">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="app_name" placeholder="Your Name" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="app_email" placeholder="Your Email" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="app_phone" placeholder="Your Phone" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="date" name="date" class="form-control datepicker" id="app_date" placeholder="Appointment Date" min="<?= date('Y-m-d') ?>">
          </div>

          <!-- <div class="col-md-4 form-group mt-3">
              <select name="department" id="app_department" class="form-select">
                <option value="">Select Department</option>
                <?php
                // $departments = $db->select('departments', 'name');
                // if ($departments) {
                //   foreach ($departments as $department) {
                //     # code...
                //     echo "<option value='{$department['name']}'>{$department['name']}</option>";
                //   }
                // }
                ?>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="app_doctor" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
            </div> -->
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" id="app_message" rows="5" placeholder="Message (Optional)"></textarea>
        </div>
        <div class="my-3">
          <div class="g-recaptcha" data-sitekey="<?= $_ENV['RECAPTCHA_SITE_KEY'] ?>"></div>
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit" id="book_appointment">Book an Appointment</button></div>
      </form>

    </div>
  </section><!-- End Appointment Section -->

  <!-- ======= Departments Section ======= -->
  <!-- <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Departments</h2>
          <p>We engage different departments to ensure efficient delivery of our services to our clients</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Cardiology</h4>
                  <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Radiology</h4>
                  <p>Voluptas vel esse repudiandae quo excepturi.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>Hematology</h4>
                  <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>Pediatrics</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                  <h4>Gynecology</h4>
                  <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Cardiology</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="/assets/img/departments-1.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Radiology</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="/assets/img/departments-2.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Hematology</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="/assets/img/IMG_20210503_144818_304.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Pediatrics</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="/assets/img/departments-4.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
              <div class="tab-pane" id="tab-5">
                <h3>Gynecology</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <img src="/assets/img/ante-natal-img.jpg" alt="" class="img-fluid">
                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>End Departments Section -->

  <!-- ======= Testimonials Section ======= -->
  <!-- <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Testimonials</h2>
        <p>Dont' take our word for it. Listen to clients who have something to say about us.</p>
      </div>

      <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <?php
          ## load testimonials
          include_once './ops/testimonials.php';
          ?>
        </div>
        <div class="swiper-pagination"></div>

        <div class="testimonial-item mt-3">
          <p>
            <i>Tell us about your experience with us.</i>
          <form action="/forms/testimonial.php" method="post" enctype="multipart/form-data" id="testimonial-form">
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="witness">Name</label>
                <input type="text" name="witness" id="witness" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3 mt-sm-0 col-sm-6">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="occupation, relationship to the facility, etc. optional">
              </div>
              <div class="form-group mt-3 col-12">
                <label for="testimonial">Testimonial</label>
                <textarea name="testimonial" id="testimonial" class="form-control" placeholder="Your experience" required></textarea>
              </div>
              <div class="form-group mt-3 col-sm-8">
                <div class="row">
                  <div class="col-sm-12">
                    <label for="witnesspic">Display Picture</label>
                    <input type="file" name="witnesspic" id="witnesspic" required="required" class="form-control" accept=".jpg, .png">
                  </div>
                  <div class="mt-3 col-sm-4">
                    <img src="" id="testpic" style="height: 120px; border-radius: 50%;display: none">
                  </div>
                </div>
              </div>
              <div class="col-sm-4 mt-3">
                <div class="form-group">
                  <label for="email">E-mail Address</label>
                  <input type="email" name="email" id="testimonial-email" class="form-control">
                </div>
              </div>
              <div class="form-group mt-3">
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
          </p>
        </div>
      </div>

    </div>
  </section> -->
  <!-- End Testimonials Section -->

  <!-- ======= Doctors Section ======= -->
  <!-- <section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Doctors</h2>
        <p>Meet our team of amazing and dedicated frontliners.</p>
      </div>

      <div class="row justify-content-center">
        <?php
        // require_once './ops/doctors.php';
        ?>
      </div>

    </div>
  </section> -->
  <!-- ====== End Doctors Section ====== -->

  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Gallery</h2>
        <p>Take a quick peek inside.</p>
      </div>

      <div class="gallery-slider swiper-container">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><a class="gallery-lightbox" href="/assets/img/gallery/IMG_20210503_135428_447.jpg"><img src="/assets/img/gallery/IMG_20210503_135428_447.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="/assets/img/gallery/IMG_20210503_135635_463.jpg"><img src="/assets/img/gallery/IMG_20210503_135635_463.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="/assets/img/gallery/IMG_20210503_145123_822.jpg"><img src="/assets/img/gallery/IMG_20210503_145123_822.jpg" class="img-fluid" alt=""></a></div>
          <div class="swiper-slide"><a class="gallery-lightbox" href="/assets/img/gallery/IMG_20210503_135617_985.jpg"><img src="/assets/img/gallery/IMG_20210503_135617_985.jpg" class="img-fluid" alt=""></a></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Gallery Section -->

  <!-- ======= Frequently Asked Questioins Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Frequently Asked Questioins</h2>
        <p>Some questions frequently asked questions by our patients</p>
      </div>

      <ul class="faq-list">
        <li>
          <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">How to register as a patient?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq4" class="collapse" data-bs-parent=".faq-list">
            <p class="px-5">
              Walk into any of our branches and register for the type of patient care you would prefer, Personal, Family, Insured Healthcare, Paediatric Care or Antenatal Care.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Can I be attended to at home?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq1" class="collapse" data-bs-parent=".faq-list">
            <p class="px-5">
              Our medical officers provide home services to patients, particularly for our geriatric and other terminally ill clients, 24 hours a day and 7 days a week.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Do you administer immunizations for children?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq2" class="collapse" data-bs-parent=".faq-list">
            <p class="px-5">
              We run the immunization clinic every Tuesday and Thursday where we offer routine and special immunizations including Cervical Cancer, Meningitis, Rota virus, Typhoid, Mumps, Measles and Rubella Vaccinations.
            </p>
          </div>
        </li>

        <li>
          <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Is there post-delivery care available for babies?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
          <div id="faq3" class="collapse" data-bs-parent=".faq-list">
            <p class="px-5">
              We monitor all our newborn babies from first month of delivery till one year of age in our infant welfare clinics monitoring their growth and counseling their mothers on the appropriate infant nutrition.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section><!-- End Frequently Asked Questioins Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Pay us a visit or make use of our available contact channels. You can also send us a message and we'll get back to you.</p>
      </div>

    </div>

    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=7.6078549326575455,5.2524625823370386&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <br>
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            height: 350px;
            width: 100%;
          }
        </style>
        <style>
          .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 100%;
            width: 100%;
          }
        </style>
      </div>
    </div>

    <div class="container">

      <div class="row mt-5">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>Behind Immigration Office, Off ABUAD/Federal Polytechnic Road, Ado-Ekiti, Ekiti State, Nigeria</p>
                <p>Beside SLOT, Oppposite BOVAS Filling Station, Along EKSU Road, Adebayo, Ado-Ekiti, Ekiti State, Nigeria</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>maternalchildhosp@yahoo.com<br>maternalchild2008@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+234 816 128 7998</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="/forms/contact.php" method="post" role="form" class="php-email-form" id="contact-form">
            <div class="row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col form-group mt-3 mt-sm-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" id="message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<?php
Functions::extend('footer');
