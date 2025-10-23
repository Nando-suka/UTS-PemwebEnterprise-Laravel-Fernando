<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KLUG - Konsultan Pendidikan Internasional</title>

  <!-- Font Google Ubuntu-->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

   <!-- Font Awesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <!-- Bootstrap Icons CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
   <!-- Material Icons CDN -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Ubuntu light -->
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

   <!-- Global stylesheet -->
   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

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

    /* 🌈 Navbar Full Width */
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

    /* 🔠 Logo */
    .logo {
      color: white;
      font-size: 28px;
      font-weight: bold;
      font-family: 'Ubuntu', sans-serif;
      text-transform: uppercase;
      letter-spacing: 1px;
      z-index: 1001;
      flex-shrink: 0;
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
      font-size: 13px;
      text-transform: capitalize;
      transition: all 0.2s ease-in-out;
      text-decoration: none;
      display: block;
      padding: 5px 0;
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

    /* Hero Section with Overlay Banner */
    .hero-section {
  position: relative;
  width: 100%;
  height: 500px;
  background: 
    linear-gradient(135deg, rgba(70, 7, 78, 0.8) 0%, rgba(25, 123, 208, 0) 100%),
    url('images/aset1.png');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  color: white;
}


    .hero-banner {
      position: absolute;
      bottom: 40px;
      left: 50px;
      background: none;
      color: white;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
      max-width: 500px;
    }

    .hero-banner h1 {
      font-size: 30px;
      font-weight: 700;
      margin-bottom: 10px;
      line-height: 1.2;
    }

    .hero-btn {
      background: transparent;
      border: 2px solid white;
      color: white;
      border-radius: 25px;
      padding: 8px 20px;
      font-size: 14px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 10px;
      display: inline-flex;
      align-items: center;
      gap: 5px;
    }

    .hero-btn:hover {
      background: white;
      color: #197BD0;
    }

    .hero-stat {
      position: absolute;
      bottom: 40px;
      right: 50px;
      background: rgba(255, 255, 255, 0.9);
      color: #197BD0;
      padding: 10px 20px;
      border-radius: 50px;
      font-weight: 700;
      font-size: 18px;
    }

    .tips-title {
        font-family: 'Ubuntu', sans-serif;
        font-weight: 300; /* Light (Ubuntu-Light) */
        font-size: 20px;
        text-align: left;
        line-height: 36px; /* Line spacing sesuai */
        color: #FFFFFF; /* atau sesuaikan warna dari desain */
        letter-spacing: 0.5px; /* opsional, agar tampak lebih elegan */
    }

    /* Section Tentang Kami */
    .tentang-kami-section {
      background-color: white;
      border: 2px solid #E5E5E5;
      border-radius: 8px;
      padding: 40px 50px;
      margin: 50px 0;
    }

    .section-title {
      font-size: 24px;
      font-weight: 700;
      color: #4A4A4A;
      text-transform: uppercase;
      margin-bottom: 25px;
      letter-spacing: 1px;
      text-align: center;
      line-height: 29px;
      font-family: 'Ubuntu', sans-serif;
    }

    .section-description {
      font-size: 15px;
      line-height: 1.8;
      color: #555;
      text-align: left;
    }

    /* Mitra Logo */
    .mitra-logo {
      background: white;
      padding: 30px;
      border: 1px solid #E5E5E5;
      border-radius: 8px;
      height: 150px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: box-shadow 0.3s ease;
      margin-bottom: 30px;
    }

    .mitra-logo:hover {
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .mitra-logo img {
      max-width: 100%;
      max-height: 80px;
      object-fit: contain;
      filter: grayscale(100%);
      transition: filter 0.3s ease;
    }

    .mitra-logo:hover img {
      filter: grayscale(0%);
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
      color: rgba(255, 255, 255, 0.9);
      font-size: 14px;
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

    /* 📱 RESPONSIVE - Tablet & Mobile */
    @media (max-width: 1100px) {
      .custom-navbar {
        padding: 0 40px;
        gap: 20px;
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

    @media (max-width: 1337px) {
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
        width: 100%;
        justify-content: space-between;
        margin-top: 15px;
        order: 3;
      }

      .search-wrapper {
        flex: 1;
        max-width: 200px;
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

      .hero-section {
        height: 300px;
      }

      .hero-banner {
        left: 15px;
        bottom: 15px;
        max-width: 300px;
        padding: 12px 16px;
      }

      .hero-banner h2 {
        font-size: 18px;
      }

      .hero-stat {
        right: 15px;
        bottom: 15px;
        font-size: 14px;
        padding: 6px 12px;
      }
    }

    @media (max-width: 576px) {
      .custom-navbar {
        padding: 15px 20px;
      }

      .logo {
        font-size: 24px;
      }

      .search-wrapper {
        width: 150px;
      }

      .tentang-kami-section {
        padding: 30px 20px;
      }

      .section-title {
        font-size: 20px;
      }

      .section-description {
        font-size: 14px;
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
        height: 250px;
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

/* ====================== HUBUNGI KAMI SECTION ====================== */
.hubungi-section {
  background: #fff;
  padding: 80px 100px;
  text-align: center;
  border-top: 1px solid #eee;
}

.hubungi-section h2 {
  color: #4A4A4A !important;
  font-family: 'Ubuntu', sans-serif;
  font-size: 24px;
  font-weight: 700;
  text-transform: uppercase;
  line-height: 29px;
  margin-bottom: 12px;
}

.hubungi-section p {
  font-weight: 300;
  font-size: 16px;
  line-height: 28px;
  color: #555;
  margin-bottom: 20px;
}

.hubungi-section h6 {
  color: #4A4A4A !important;
  font-family: 'Ubuntu', sans-serif;
  font-size: 24px;
  line-height: 29px;
  margin-bottom: 8px;
}

.hubungi-section .btn {
  border-radius: 25px;
  padding: 10px 35px;
  font-weight: 500;
  margin: 10px;
}

.btn-lokasi {
  background: linear-gradient(90deg, #46074E 0%, #197BD0 80%);
  color: #fff;
  border: none;
  box-shadow: 0 6px 18px rgba(25,123,208,0.18);
}

.btn-kirim {
  border: 1px solid #195395;
  color: #195395;
}

.btn-kirim:hover {
  background: #195395;
  color: #fff;
}

  @media (max-width: 992px) {
    .artikel-card { height: auto; }
    .artikel-img { width: 150px; height: 100px; }
  }

    /* Container Form - plain (no white box or shadow) */
    .form-wrapper {
      max-width: 1200px;
      margin: 0 auto;
      background: transparent; /* keep it plain */
      padding: 50px;
      border-radius: 0; /* remove rounded card look */
      box-shadow: none; /* remove visible shadow */
    }

    /* Header - KIRIM PESAN */
    .form-title {
      width: 200px;
      height: 45px;
      font-family: 'Ubuntu', sans-serif;
      font-size: 24px;
      font-weight: 700;
      color: #4A4A4A;
      text-align: left;
      line-height: 29px;
      margin-bottom: 40px;
    }

    /* Form Labels */
    .form-label {
      font-family: 'Ubuntu', sans-serif;
      font-size: 16px;
      font-weight: 400;
      color: #4A4A4A;
      text-align: left;
      line-height: 28px;
      margin-bottom: 8px;
      display: block;
    }

    /* Required asterisk */
    .required {
      color: #d32f2f;
    }

    /* Form Inputs */
    .form-control {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #d0d0d0;
      border-radius: 4px;
      font-family: 'Ubuntu', sans-serif;
      font-size: 14px;
      color: #333;
      transition: all 0.3s ease;
      background-color: #fafafa;
    }

    .form-control:focus {
      outline: none;
      border-color: #197BD0;
      background-color: white;
      box-shadow: 0 0 0 2px rgba(25, 123, 208, 0.1);
    }

    .form-control::placeholder {
      color: #999;
      font-size: 13px;
    }

    /* Textarea */
    textarea.form-control {
      resize: vertical;
      min-height: 120px;
    }

    /* Row for 2 columns */
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 25px;
      margin-bottom: 25px;
    }

    .form-group {
      margin-bottom: 25px;
    }

    /* reCAPTCHA Container */
    .recaptcha-container {
      width: 302px;
      height: 77px;
      margin: 30px 0;
    }

    /* Submit Button */
    .btn-kirim {
  width: 200px;                  /* sesuai width */
  height: 45px;                  /* sesuai height */
  border-radius: 22.5px;         /* setengah tinggi = bentuk oval */
  background: transparent;       /* transparan di tengah */
  border: 1px solid transparent; /* supaya gradient border bisa diterapkan */
  font-family: 'Ubuntu', sans-serif; /* tipe font sesuai */
  font-size: 15px;               /* ukuran font */
  color: #336195;                /* warna teks */
  letter-spacing: 0.5px;
  font-weight: 600;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;

  /* border gradient trick */
  background-image: linear-gradient(#fff, #fff),
                    linear-gradient(90deg, #46074E 0%, #197BD0 80%);
  background-origin: border-box;
  background-clip: content-box, border-box;
  border: 1px solid transparent;
  transition: all 0.3s ease;
}

/* efek hover agar tombol tampak hidup */
.btn-kirim:hover {
  background-image: linear-gradient(90deg, #46074E 0%, #197BD0 80%);
  color: #fff;
}


    /* Bottom section with captcha and button */
    .form-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 30px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .form-row {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .form-wrapper {
        padding: 30px 20px;
      }

      .form-footer {
        flex-direction: column;
        gap: 20px;
      }

      .recaptcha-container {
        width: 100%;
        display: flex;
        justify-content: center;
      }

      .btn-submit {
        margin: 0 auto;
      }
    }

    @media (max-width: 576px) {
      .form-title {
        font-size: 20px;
      }

      .form-label {
        font-size: 14px;
      }

      .recaptcha-container {
        transform: scale(0.9);
        transform-origin: left center;
      }
    }

    /* Section utama - align with form container */
    .lokasi-kami {
      /* match the form-wrapper container so the left edges line up */
      max-width: 1200px;
      margin: 0 auto;
      color: #4A4A4A;
      font-family: 'Ubuntu', sans-serif;
    }

    /* Position title and cards using the same inset as the form padding (50px) */
    .lokasi-kami .section-title {
      text-align: left;
      padding-left: 50px; /* matches .form-wrapper padding */
    }

    .lokasi-kami .lokasi-card {
      max-width: 751px; /* keep cards a reasonable width */
      margin-left: 50px; /* align card content with title */
      padding-left: 25px; /* internal padding inside the card */
      padding-right: 25px;
    }

    /* Judul utama */
    .section-title {
      font-size: 24px;
      font-weight: 600;
      color: #4A4A4A;
      margin-bottom: 40px;
      line-height: 29px;
    }

    /* Kartu lokasi */
    .lokasi-card {
      background-color: #fff;
      border-radius: 6px;
      padding: 25px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
      margin-bottom: 25px;
    }

    /* Subjudul seperti 'KANTOR PUSAT' */
    .lokasi-subtitle {
      font-size: 18px;
      font-weight: 600;
      color: #4A4A4A;
      line-height: 22px;
      margin-bottom: 15px;
    }

    /* Teks isi alamat */
    .lokasi-text {
      font-size: 16px;
      line-height: 30px;
      color: #4A4A4A;
      font-family: 'Ubuntu Light', 'Ubuntu', sans-serif;
    }

    @media (max-width: 768px) {
      .lokasi-kami {
        padding: 0 20px;
      }

      .section-title {
        font-size: 20px;
        text-align: center;
      }

      .lokasi-card {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <!-- Overlay untuk mobile menu -->
  <div class="overlay" id="overlay"></div>

  <!-- 🔹 Navbar -->
  <nav class="custom-navbar">
    <!-- Logo -->
    <div class="logo">klug</div>

    <!-- Hamburger Menu Button -->
    <button class="hamburger" id="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Menu Navigasi -->
    <ul class="nav" id="navMenu">
        <li class="nav-item"><a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link { Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a></li>
        <li class="nav-item"><a class="nav-link  {{ Request::is('layanan') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan Kami</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a></li>
        <li class="nav-item"><a class="nav-link active" href="{{ route('hubungi') }}">Hubungi Kami</a></li>
    </ul>

    <!-- 🔍 Pencarian + Tombol -->
    <div class="navbar-right">
      <!-- Search Bar dengan Material Icons -->
      <div class="search-wrapper">
        <span class="material-icons search-icon">search</span>
        <input type="text" class="search-input" placeholder="Ketik pencarian">
      </div>
      <button class="btn-daftar">DAFTAR ON-LINE</button>
    </div>
  </nav>

  <!-- Hero Section with Banner Overlay -->
  <div class="hero-section">
    <div class="hero-banner">
      <h3>Hubungi Kami</h3>
    </div>
  </div>
 <!-- Untuk Bagian Kirim Pesan-->
  <div class="form-wrapper">
    <!-- Title -->
    <h1 class="form-title">KIRIM PESAN</h1>

    <!-- Form -->
    <form id="contactForm">
      <!-- Row 1: Nama & Email -->
      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Nama<span class="required">*</span></label>
          <input type="text" class="form-control" placeholder="Masukkan nama Anda" required>
        </div>
        <div class="form-group">
          <label class="form-label">E-Mail<span class="required">*</span></label>
          <input type="email" class="form-control" placeholder="contoh@email.com" required>
        </div>
      </div>

      <!-- Row 2: Perusahaan/Organisasi & Telepon -->
      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Perusahaan / Organisasi</label>
          <input type="text" class="form-control" placeholder="Nama Perusahaan / Organisasi">
        </div>
        <div class="form-group">
          <label class="form-label">Telepon</label>
          <input type="tel" class="form-control" placeholder="Nomor Telepon Anda">
        </div>
      </div>

      <!-- Row 3: Isi Pesan -->
      <div class="form-group">
        <label class="form-label">Isi Pesan<span class="required">*</span></label>
        <textarea class="form-control" placeholder="Tulis pesan Anda di sini..." required></textarea>
      </div>

      <!-- Footer: reCAPTCHA & Submit Button -->
      <div class="form-footer">
        <!-- reCAPTCHA -->
        <div class="recaptcha-container">
          <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
        </div>

        <!-- Submit Button -->
        <button class="btn-kirim">KIRIM PESAN</button>
      </div>
    </form>
  </div>

  <!--Section untuk bagian LOKASI KAMI-->
  <section class="lokasi-kami container my-5">
  <h2 class="section-title">LOKASI KAMI</h2>

  <div class="lokasi-card">
    <h3 class="lokasi-subtitle">KANTOR PUSAT</h3>
    <p class="lokasi-text">
      Gedung Ir. H. M. Soenario - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
      Phone: (+62 21) 398 38705 - Fax: (+62 21) 316 1701<br>
      Hotline: +6281511940071 / +62811998167
    </p>
  </div>

  <div class="lokasi-card">
    <h3 class="lokasi-subtitle">KANTOR CABANG</h3>
    <p class="lokasi-text">
      Gedung Ir. H. M. Soenario - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat<br>
      Phone: (+62 21) 398 38705 - Fax: (+62 21) 316 1701<br>
      Hotline: +6281511940071 / +62811998167
    </p>
  </div>
</section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Form Submit Handler
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Validasi reCAPTCHA
      const recaptchaResponse = grecaptcha.getResponse();
      
      if (recaptchaResponse.length === 0) {
        alert('Mohon verifikasi reCAPTCHA terlebih dahulu!');
        return;
      }

      // Ambil data form
      const formData = new FormData(this);
      
      // Simulasi submit
      alert('Pesan berhasil dikirim!\n\nTerima kasih telah menghubungi kami.');
      
      // Reset form
      this.reset();
      grecaptcha.reset();
    });
  </script>
  <!-- Footer -->
  <footer class="site-footer">
    <p class="copyright">Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Hamburger Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    const overlay = document.getElementById('overlay');
    const navLinks = document.querySelectorAll('.nav-link');

    // Toggle menu saat hamburger diklik
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      navMenu.classList.toggle('active');
      overlay.classList.toggle('active');
      document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : 'auto';
    });

    // Tutup menu saat overlay diklik
    overlay.addEventListener('click', () => {
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
      overlay.classList.remove('active');
      document.body.style.overflow = 'auto';
    });

    // Tutup menu saat link diklik
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navMenu.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = 'auto';
      });
    });
  </script>
</body>
</html>