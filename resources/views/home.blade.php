<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KLUG - Konsultan Pendidikan Internasional</title>

  <!-- Font Google Ubuntu (including light 300) -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Global stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

   <!-- Font Awesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!-- Bootstrap Icons CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
   <!-- Material Icons CDN -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Ubuntu', sans-serif;
      background-color: #f8f9fa;
    }

    /*  Navbar Full Width */
    .custom-navbar {
      width: 100%;
      min-height: 80px;
      background: linear-gradient(to right, #46074E 0%, #197BD0 80%);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 80px;
      position: relative;
      gap: 40px;
    }

    /* 🔠 Logo dengan teks Inaklug */
    .logo-container {
      display: flex;
      align-items: center;
      gap: 15px;
      z-index: 1001;
    }

    .logo-img {
      width: 77px;
      height: 40px;
      object-fit: contain;
    }

    .logo-text {
      color: white;
      font-size: 24px;
      font-weight: bold;
      font-family: 'Ubuntu', sans-serif;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    /* 🔗 Menu Navigasi */
    .nav {
      display: flex;
      gap: 40px;
      margin: 0;
      padding: 0;
      list-style: none;
      align-items: center;
      flex: 1;
      justify-content: center;
    }

    .nav-link {
      color: white !important;
      font-family: 'Ubuntu', sans-serif;
      font-size: 16px;
      text-transform: capitalize;
      transition: all 0.2s ease-in-out;
      text-decoration: none;
      display: block;
      padding: 5px 0;
      border-bottom: 2px solid transparent;
    }

    /* Border putih untuk menu aktif */
    .nav-link.active {
      border-bottom: 2px solid white;
    }

    .nav-link:hover {
      text-decoration: underline;
      color: #d1d1d1 !important;
    }

    /* 🔍 Kotak Pencarian */
    .search-wrapper {
      position: relative;
      width: 250px;
    }
    
    .search-icon {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: rgba(255, 255, 255, 0.8);
      font-size: 18px;
    }
    
    .search-input {
      width: 100%;
      padding: 8px 12px 8px 40px;
      border: none;
      background: transparent;
      border-radius: 0;
      color: white;
      font-size: 14px;
      outline: none;
      transition: all 0.3s ease;
      border-bottom: 2px solid rgba(255, 255, 255, 0.3);
    }
    
    .search-input::placeholder {
      color: rgba(255, 255, 255, 0.7);
      font-size: 13px;
    }
    
    .search-input:focus {
      border-bottom: 2px solid white;
    }

    /* 🧭 Bagian kanan navbar */
    .navbar-right {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    /* 🍔 Hamburger Menu Button (Hidden by default) */
    .hamburger {
      display: none;
      flex-direction: column;
      cursor: pointer;
      z-index: 1001;
      background: none;
      border: none;
      padding: 5px;
    }

    .hamburger span {
      width: 25px;
      height: 3px;
      background-color: white;
      margin: 3px 0;
      transition: 0.3s;
      border-radius: 2px;
    }

    /* Animasi Hamburger jadi X */
    .hamburger.active span:nth-child(1) {
      transform: rotate(-45deg) translate(-5px, 6px);
    }

    .hamburger.active span:nth-child(2) {
      opacity: 0;
    }

    .hamburger.active span:nth-child(3) {
      transform: rotate(45deg) translate(-5px, -6px);
    }

    /* Elemen untuk mobile */
    .mobile-nav-actions {
      display: none;
      flex-direction: column;
      gap: 15px;
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.3);
    }

    .mobile-search-wrapper {
      position: relative;
      width: 100%;
    }

    .mobile-search-wrapper .search-input {
      width: 100%;
      padding: 12px 12px 12px 40px;
      border: none;
      background: transparent;
      border-radius: 0;
      color: white;
      font-size: 14px;
      outline: none;
      transition: all 0.3s ease;
      border-bottom: 2px solid rgba(255, 255, 255, 0.5);
    }

    .mobile-search-wrapper .search-input::placeholder {
      color: rgba(255, 255, 255, 0.7);
      font-size: 13px;
    }

    .mobile-search-wrapper .search-input:focus {
      border-bottom: 2px solid white;
    }

    .mobile-search-wrapper .search-icon {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      color: rgba(255, 255, 255, 0.8);
      font-size: 18px;
    }

    .mobile-btn-daftar {
      background: transparent;
      border: 2px solid white;
      color: white;
      border-radius: 25px;
      padding: 12px 20px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      text-align: center;
      width: 100%;
    }

    .mobile-btn-daftar:hover {
      background: white;
      color: #197BD0;
    }

    /* Hero Section with Overlay Banner */
    .hero-section {
      position: relative;
      width: 100%;
      height: 100vh;
      margin: 0;
      overflow: hidden;
    }

    .hero-image {
      width: 100%;
      height: 100%;
      object-fit: fill;
    }

    .overlay {
      position: absolute;
      width: 621px;
      height: 166px;
      left: 123px;
      top: 516px;
    }

    .content-box {
      position: absolute;
      width: 621px;
      height: 120px;
      left: 123px;
      top: 562px;
      background: linear-gradient(90deg, #46074E 0%, rgba(25, 123, 208, 0.8) 100%);
      box-shadow: 10px 10px 4px rgba(0, 0, 0, 0.2);
      display: flex;
      align-items: center;
      padding: 0 46px 0 46px;
    }

    .vertical-line {
      position: absolute;
      width: 1px;
      height: 140px;
      left: 150px;
      top: 516px;
      background: rgba(255, 255, 255, 0.4);
    }

    .text-content {
      position: absolute;
      width: 285px;
      height: 60px;
      left: 169px;
      top: 594px;
      color: #FFFFFF;
      font-family: 'Ubuntu', sans-serif;
      font-size: 20px;
      line-height: 30px;
      text-align: left;
    }

    /* Menu bagian button */
    .cta-button {
      position: absolute;
      width: 210px;
      height: 45px;
      left: 499px;
      top: 600px;
      border-radius: 22.5px;
      border: 1px solid #FFFFFF;
      background: transparent;
      color: #FFFFFF;
      font-family: 'Ubuntu', sans-serif;
      font-size: 14px;
      cursor: pointer;
      transition: all 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .cta-button:hover {
      background: rgba(255, 255, 255, 0.1);
      transform: translateY(-2px);
    }

    .cta-button::after {
      content: '∨';
      font-size: 12px;
    }

    /* Section Tentang Kami - flat */
    .tentang-kami-section {
      background-color: transparent;
      border: none;
      border-radius: 0;
      padding: 40px 50px;
      margin: 50px 0;
    }

    .section-title {
      font-size: 24px;
      font-weight: 700;
      color: #4A4A4A;
      text-transform: uppercase;
      margin-bottom: 29px;
      letter-spacing: 1px;
      text-align: center;
      line-height: 29px;
      font-family: 'Ubuntu';
    }

    .section-description {
      font-size: 18px;
      line-height: 1.8;
      color: #4A4A4A;
      text-align: center;
    }

    /* Layanan Cards - flat look */
    .layanan-card {
      position: relative;
      width: 100%;
      max-width: 360px;
      height: 270px;
      border-radius: 6px;
      overflow: hidden;
      cursor: pointer;
      box-shadow: none;
      transition: none;
      margin-bottom: 20px;
    }

    .layanan-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .layanan-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(70,7,78,0.45) 0%, rgba(25,123,208,0.25) 100%);
      display: flex;
      align-items: flex-end;
      padding: 20px;
    }

    /* Garis putih di sisi kiri untuk layanan cards */
    .layanan-inner-border {
      position: absolute;
      top: 15%;
      left: 20px;
      width: 3px;
      height: 70%;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 3px;
    }

    .layanan-label {
      color: white;
      font-size: 18px;
      font-weight: 600;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    /* Mitra Logo */
    .mitra-logo {
      background: transparent;
      padding: 10px 0;
      border: none;
      border-radius: 0;
      height: 150px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: none;
      margin-bottom: 30px;
    }

    /* Show logos as-is with no filters or hover effects */
    .mitra-logo img {
      max-width: 100%;
      max-height: 80px;
      object-fit: contain;
      filter: none;
      transition: none;
    }

    /* Banner Konseling */
    .banner-konseling {
      background: linear-gradient(to right, #46074E 0%, #197BD0 100%);
      border-radius: 10px;
      padding: 40px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 50px 0;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .banner-content h3 {
      color: white;
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .banner-content p {
      color: #FFFFFF;
      font-family: 'Ubuntu', sans-serif;
      font-weight: 300;
      font-size: 16px;
      text-align: left;
      line-height: 24px;
      margin: 0;
    }

    .btn-konsultasi {
      background: transparent;
      border: 2px solid white;
      color: white;
      border-radius: 25px;
      padding: 10px 30px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      white-space: nowrap;
    }

    .btn-konsultasi:hover {
      background: white;
      color: #197BD0;
    }

    /* Artikel Cards - flat */
    .artikel-card {
      background: transparent;
      border-radius: 0;
      overflow: hidden;
      box-shadow: none;
      transition: none;
      margin-bottom: 30px;
      cursor: pointer;
    }

    .artikel-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .artikel-content {
      padding: 20px;
    }

    .artikel-title {
      font-size: 16px;
      font-weight: 600;
      color: #333;
      line-height: 1.4;
      margin: 0;
      text-align: center;
    }

    .btn-artikel-lainnya {
      background: transparent;
      border: 2px solid #197BD0;
      color: #197BD0;
      border-radius: 25px;
      padding: 10px 35px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: block;
      margin: 40px auto;
    }

    .btn-artikel-lainnya:hover {
      background: #197BD0;
      color: white;
    }

    /* ====================== HUBUNGI KAMI SECTION ====================== */
    .hubungi-section {
      background: #fff;
      padding: 80px 100px;
      text-align: center;
      border-top: 1px solid #eee;
    }

    .hubungi-section h2 {
      font-size: 20px;
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    .hubungi-section p {
      font-weight: 300;
      font-size: 16px;
      line-height: 28px;
      color: #555;
      margin-bottom: 20px;
    }

    .hubungi-section .btn {
      border-radius: 25px;
      padding: 10px 35px;
      font-weight: 500;
      margin: 10px;
    }

    /* Button lokasi dan kirim */
    .btn-lokasi {
      width: 200px;
      height: 45px;
      background: linear-gradient(90deg, #46074E 0%, #197BD0 80%);
      color: #FFFFFF;
      border: none;
      border-radius: 22.5px;
      font-family: 'Ubuntu', sans-serif;
      font-size: 15px;
      font-weight: 500;
      line-height: 18px;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }

    /* Efek hover lembut */
    .btn-lokasi:hover {
      opacity: 0.9;
      transform: translateY(-2px);
    }

    .btn-kirim {
      width: 200px;
      height: 45px;
      border-radius: 22.5px;
      background: transparent;
      border: 1px solid transparent;
      background-image: linear-gradient(white, white),
                      linear-gradient(90deg, #46074E 0%, #197BD0 80%);
      background-origin: border-box;
      background-clip: padding-box, border-box;
      color: #336195;
      font-family: 'Ubuntu', sans-serif;
      font-size: 15px;
      font-weight: 500;
      line-height: 18px;
      text-align: center;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    /* Hover efek halus */
    .btn-kirim:hover {
      background-image: linear-gradient(90deg, #46074E 0%, #197BD0 80%);
      color: #fff;
      transform: translateY(-2px);
    }

    /* Footer */
    .site-footer {
      background-color: #333;
      color: white;
      padding: 20px 0;
      text-align: center;
    }

    .copyright {
      margin: 0;
      font-size: 14px;
    }

    /* ====================== BREAKPOINT 1547px ====================== */
    @media (max-width: 1547px) {
      .custom-navbar {
        padding: 15px 30px;
        flex-wrap: wrap;
      }

      /* Show Hamburger */
      .hamburger {
        display: flex;
      }

      /* Hide menu by default */
      .nav {
        position: fixed;
        top: 0;
        right: -100%;
        width: 280px;
        height: 100vh;
        background: linear-gradient(to bottom, #46074E 0%, #197BD0 80%);
        flex-direction: column;
        padding: 100px 30px 30px 30px;
        gap: 20px;
        transition: right 0.4s ease;
        box-shadow: -5px 0 15px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        overflow-y: auto;
      }

      /* Show menu when active */
      .nav.active {
        right: 0;
      }

      .nav-link {
        font-size: 16px;
        padding: 10px 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      }

      /* Navbar right di mobile */
      .navbar-right {
        display: none; /* Sembunyikan di mobile */
      }

      /* Elemen pencarian dan tombol daftar di dalam menu mobile */
      .mobile-nav-actions {
        display: flex;
      }

      /* Overlay gelap saat menu terbuka */
      .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: none;
        z-index: 999;
      }

      .overlay.active {
        display: block;
      }

      /* Hero Section Adjustments */
      .hero-section {
        height: 500px;
      }

      .overlay {
        width: 500px;
        left: 80px;
        top: 350px;
      }

      .content-box {
        width: 500px;
        left: 80px;
        top: 396px;
      }

      .vertical-line {
        left: 110px;
        top: 350px;
      }

      .text-content {
        left: 130px;
        top: 430px;
      }

      .cta-button {
        left: 400px;
        top: 440px;
      }
    }

    /* 📱 RESPONSIVE - Tablet & Mobile */
    @media (max-width: 1100px) {
      .custom-navbar {
        padding: 0 40px;
        justify-content: space-between;
      }
      
      .navbar-right {
        gap: 5px;
      }
      
      .search-wrapper {
        width: 200px;
      }

      .nav {
        gap: 30px;
      }

      .hero-section {
        height: 400px;
      }

      .hero-banner {
        left: 20px;
        bottom: 20px;
        max-width: 400px;
        padding: 15px 20px;
      }

      .hero-banner h2 {
        font-size: 20px;
      }

      .hero-stat {
        right: 20px;
        bottom: 20px;
        font-size: 16px;
        padding: 8px 16px;
      }
    }

    @media (max-width: 768px) {
      .hero-section {
        height: 350px;
      }

      .overlay {
        width: 400px;
        left: 50px;
        top: 250px;
      }

      .content-box {
        width: 400px;
        left: 50px;
        top: 296px;
      }

      .vertical-line {
        left: 80px;
        top: 250px;
      }

      .text-content {
        left: 100px;
        top: 320px;
        font-size: 18px;
      }

      .cta-button {
        left: 320px;
        top: 330px;
        width: 180px;
        height: 40px;
      }
    }

    @media (max-width: 576px) {
      .custom-navbar {
        padding: 15px 20px;
      }

      .logo-text {
        font-size: 20px;
      }

      .search-wrapper {
        width: 150px;
      }

      .tentang-kami-section {
        padding: 30px 20px;
      }

      .section-title {
        font-size: 24px;
      }

      .section-description {
        font-size: 18px;
      }

      .layanan-card {
        height: 220px;
      }

      .banner-konseling {
        flex-direction: column;
        padding: 30px 25px;
        text-align: center;
      }

      .banner-content h3 {
        font-size: 20px;
      }

      .btn-konsultasi {
        margin-top: 20px;
      }

      .hero-section {
        height: 300px;
      }

      .overlay {
        width: 300px;
        left: 20px;
        top: 180px;
      }

      .content-box {
        width: 300px;
        left: 20px;
        top: 226px;
      }

      .vertical-line {
        left: 50px;
        top: 180px;
        height: 120px;
      }

      .text-content {
        left: 70px;
        top: 240px;
        font-size: 16px;
        width: 200px;
      }

      .cta-button {
        left: 220px;
        top: 250px;
        width: 150px;
        height: 35px;
        font-size: 12px;
      }

      .hero-banner {
        left: 10px;
        bottom: 10px;
        max-width: 250px;
        padding: 10px 14px;
      }

      .hero-banner h2 {
        font-size: 16px;
      }

      .hero-stat {
        right: 10px;
        bottom: 10px;
        font-size: 12px;
        padding: 4px 8px;
      }
    }
  </style>
</head>
<body>

  @include('pemisahan.header')
  <!-- Hero Section with Banner Overlay -->
  <div class="hero-section">
        <img src="{{ asset('images/aset1.png') }}" alt="Historic Building" class="hero-image">
        
        <div class="overlay"></div>
        <div class="content-box"></div>
        <div class="vertical-line"></div>
        
        <div class="text-content">
            INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI ?
        </div>
        
        <button class="cta-button">
            SELENGKAPNYA
        </button>
    </div>

  <!-- BOOTSTRAP CONTAINER -->
  <div class="container" style="max-width: 1120px; padding-left: 0; padding-right: 0;">
    
    <!-- SECTION TENTANG KAMI -->
    <section class="tentang-kami-section">
      <h2 class="section-title">TENTANG KAMI</h2>
      <p class="section-description">
        INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah <br />memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan <br /> wisata dan berkarir di negara maju di dunia.
      </p>
    </section>

    <!-- SECTION LAYANAN KAMI -->
    <section class="my-5">
      <p class="section-title">LAYANAN KAMI</p>
      
      <!-- Bootstrap Row & Col -->
      <div class="row g-3">
        <!-- Card 1: Studi S1 -->
        <div class="col-lg-4 col-md-6">
          <div class="layanan-card mx-auto">
            <img src="{{ asset('images/bachelor.png') }}" alt="Studi S1 Bachelor">
            <div class="layanan-overlay">
              <div class="layanan-inner-border"></div>
              <span class="layanan-label">Studi S1 - Bachelor</span>
            </div>
          </div>
        </div>

        <!-- Card 2: Studi S2 -->
        <div class="col-lg-4 col-md-6">
          <div class="layanan-card mx-auto">
            <img src="{{ asset('images/master.png') }}" alt="Studi S2 Master">
            <div class="layanan-overlay">
              <div class="layanan-inner-border"></div>
              <span class="layanan-label">Studi S2 - Master</span>
            </div>
          </div>
        </div>

        <!-- Card 3: Studi S3 -->
        <div class="col-lg-4 col-md-6">
          <div class="layanan-card mx-auto">
            <img src="{{ asset('images/phd.jpg') }}" alt="Studi S3 Ph.D">
            <div class="layanan-overlay">
              <div class="layanan-inner-border"></div>
              <span class="layanan-label">Studi S3 - Ph.D</span>
            </div>
          </div>
        </div>

        <!-- Card 4: Kursus Bahasa -->
        <div class="col-lg-4 col-md-6">
          <div class="layanan-card mx-auto">
            <img src="{{ asset('images/kursus.png') }}" alt="Kursus Bahasa Asing">
            <div class="layanan-overlay">
              <div class="layanan-inner-border"></div>
              <span class="layanan-label">Kursus Bahasa Asing</span>
            </div>
          </div>
        </div>

        <!-- Card 5: Study Tour -->
        <div class="col-lg-4 col-md-6">
          <div class="layanan-card mx-auto">
            <img src="{{ asset('images/studytour.png') }}" alt="Study Tour">
            <div class="layanan-overlay">
              <div class="layanan-inner-border"></div>
              <span class="layanan-label">Study Tour</span>
            </div>
          </div>
        </div>

        <!-- Card 6: Ausbildung -->
        <div class="col-lg-4 col-md-6">
          <div class="layanan-card mx-auto">
            <img src="{{ asset('images/ausbildung.jpg') }}" alt="Ausbildung">
            <div class="layanan-overlay">
              <div class="layanan-inner-border"></div>
              <span class="layanan-label">Ausbildung</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION MITRA KAMI -->
    <section class="my-5 pb-5">
      <h2 class="section-title">MITRA KAMI</h2>
      
      <!-- Bootstrap Row & Col -->
      <div class="row">
        <!-- Logo 1 -->
        <div class="col-lg-3 col-md-6 col-6">
          <div class="mitra-logo">
            <img src="{{ asset('images/aviation.jpg') }}" alt="24Aviation">
          </div>
        </div>

        <!-- Logo 2 -->
        <div class="col-lg-3 col-md-6 col-6">
          <div class="mitra-logo">
            <img src="{{ asset('images/adrew.png') }}" alt="St Andrew's College">
          </div>
        </div>

        <!-- Logo 3 -->
        <div class="col-lg-3 col-md-6 col-6">
          <div class="mitra-logo">
            <img src="{{ asset('images/htw.png') }}" alt="HTW Berlin">
          </div>
        </div>

        <!-- Logo 4 -->
        <div class="col-lg-3 col-md-6 col-6">
          <div class="mitra-logo">
            <img src="{{ asset('images/studygroup.png') }}" alt="Study Group">
          </div>
        </div>
      </div>
    </section>

    <!-- BANNER KONSELING -->
    <section class="banner-konseling">
      <div class="banner-content">
        <h3>GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h3>
        <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
      </div>
      <button class="btn-konsultasi">MULAI KONSULTASI ▼</button>
    </section>

    <!-- SECTION ARTIKEL TERBARU -->
    <section class="my-5">
      <h2 class="section-title" style="text-align: center;">ARTIKEL TERBARU</h2>
      
      <!-- Bootstrap Row & Col -->
      <div class="row">
        <!-- Artikel 1 -->
        <div class="col-lg-6 col-md-6">
          <div class="artikel-card">
            <img src="{{ asset('images/studijerman.png') }}" 
                 alt="5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman" 
                 class="artikel-image">
            <div class="artikel-content">
              <h3 class="artikel-title">5 Fakta yang Harus Kamu Ketahui <br />Sebelum Studi ke Jerman</h3>
            </div>
          </div>
        </div>

        <!-- Artikel 2 -->
        <div class="col-lg-6 col-md-6">
          <div class="artikel-card">
            <img src="{{ asset('images/korona.png') }}" 
                 alt="Uni Eropa Menghadapi Virus Korona" 
                 class="artikel-image">
            <div class="artikel-content">
              <h3 class="artikel-title">Uni Eropa Menghadapi Virus Korona</h3>
            </div>
          </div>
        </div>

        <!-- Artikel 3 -->
        <div class="col-lg-6 col-md-6">
          <div class="artikel-card">
            <img src="{{ asset('images/bahasajerman.png') }}" 
                 alt="Belajar Bahasa Jerman Bersama Goethe Insistut" 
                 class="artikel-image">
            <div class="artikel-content">
              <p class="artikel-title">Belajar Bahasa Jerman Bersama <br />Goethe Insistut</p>
            </div>
          </div>
        </div>

        <!-- Artikel 4 -->
        <div class="col-lg-6 col-md-6">
          <div class="artikel-card">
            <img src="{{ asset('images/gatescambride.png') }}" 
                 alt="Apa Itu Gates Cambridge? Yuk Cari Tahu" 
                 class="artikel-image">
            <div class="artikel-content">
              <h3 class="artikel-title">Apa Itu Gates Cambridge?Yuk <br /> Cari Tahu</h3>
            </div>
          </div>
        </div>
      </div>

      <!-- Tombol Artikel Lainnya -->
      <button class="btn-artikel-lainnya">ARTIKEL LAINNYA</button>
    </section>

    <!-- ===================== HUBUNGI KAMI SECTION ===================== -->
    <section class="hubungi-section">
      <div class="container">
        <h2>HUBUNGI KAMI</h2>
        <h6 class="text-uppercase mb-3">KANTOR PUSAT</h6>
        <p>
          Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat <br>
          Phone : (+62 21) 398 38706 · Fax : (+62 21) 316 1701 <br>
          Hotline : +6281151940071 / +62811998167
        </p>
        <button class="btn btn-lokasi">LOKASI KAMI</button>
        <button class="btn btn-kirim">KIRIM PESAN</button>
      </div>
    </section>

  </div>
  <!-- Footer -->
  @include('pemisahan.footer')

</body>
</html>