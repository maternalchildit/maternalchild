<?php

use Utility\Navbar;

global $navbar, $cdn;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Maternal-Child Specialists' Clinics</title>
  <meta content="Maternal-Child Specialists' Clinics is a rapidly growing hospital in Ado-Ekiti, the capital city of Ekiti State, Southwest Nigeria with special interest in Comprehensive Maternity Care, Fetomaternal Medicine, Minimal Access Surgery, Advanced Fertility Management and General Gynaecology. We also offer specialised care in Paediatrics, Internal Medicine, General Surgery, Orthopaedics, Urology, Ophthalmology, Oral and Maxillofacial Surgery, Dental Surgery, Ear, Nose and Throat (ENT) Surgery, Laboratory Medicine, Pharmacy and other relevant fields of Medicine and Surgery." name="description">
  <meta content="antenatal care, pregnancy, hospitals in ado-ekiti, hospitals in ekiti, hospitals in nigeria, top hospitals in nigeria, nhis, health insurance" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.ico" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <?php
  if ($cdn) {
    echo <<<_END
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' />
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
      _END;
  } else {
    echo <<<_END
      <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
      <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    _END;
  }
  ?>

  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Mon - Sun, 8AM to 10PM
      </div>
      <!-- <div class="d-none d-md-flex align-items-center">
        <a href="/covid-19.php" class="text-white text-decoration-underline">Read about our responses to COVID-19 in our communitites</a>
      </div> -->
      <div class="align-items-center d-flex">
        <i class="bi bi-phone"></i> Call us now &nbsp;<a href="tel:<?= env('CONTACT_TEL', "+234 816 7666 638") ?>" style="color: inherit"> <?= env('CONTACT_TEL', "+234 816 7666 638"); ?></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <?php require 'nav.php' ?>
  </header><!-- End Header -->