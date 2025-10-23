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
        url('images/gatescambride.png');
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
      font-family: 'Ubuntu', sans-serif;
      font-size: 36px;
      font-weight: 500;
      color: #FFFFFF;
      line-height: 43px;
      text-align: left;
      margin-bottom: 10px;
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

    /* Layanan Cards */
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
      background: linear-gradient(135deg, #46074E 0%, rgba(25, 123, 208, 0) 100%);
      display: flex;
      align-items: flex-end;
      padding: 20px;
    }

    .layanan-label {
      color: white;
      font-size: 18px;
      font-weight: 600;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
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

    /* Artikel Cards */
    .artikel-card {
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease;
      margin-bottom: 30px;
      cursor: pointer;
    }

    .artikel-card:hover {
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
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

    /* ====================== PROFIL SECTION ====================== */
.profil-section {
  padding: 80px 100px;
  background: #fff;
  color: #333;
  font-family: 'Ubuntu', sans-serif;
}

.profil-section h2 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.profil-section p {
  font-weight: 300;
  font-size: 16px;
  line-height: 28px;
  color: #555;
}

/* Visi & Misi */
.visi-misi {
  margin-top: 60px;
}

.visi-misi .card {
  border: none;
  background: transparent;
}

.visi-misi img {
  width: 100%;
  border-radius: 6px;
  margin-bottom: 20px;
}

.visi-misi h3 {
  font-weight: 700;
  font-size: 18px;
  margin-bottom: 10px;
}

.visi-misi p {
  font-weight: 300;
  font-size: 16px;
  line-height: 28px;
  color: #555;
}

/* Tombol layanan kami */
.btn-layanan {
  border: 1px solid #195395;
  color: #195395;
  border-radius: 25px;
  padding: 8px 30px;
  font-weight: 500;
  margin-top: 30px;
  background: transparent;
  transition: all 0.3s ease;
}

.btn-layanan:hover {
  background: #195395;
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

.section-judul {
  font-family: 'Ubuntu', sans-serif;
  font-size: 24px;
  font-weight: 700;
  color: #4A4A4A;
  line-height: 29px;
  text-align: center;
  margin-bottom: 20px;
}

.section-kantorPusat {
  font-family: 'Ubuntu', sans-serif;
  font-size: 22px;
  font-weight: 400;
  color: #4A4A4A;
  line-height: 22px;
  text-align: center;
  margin-bottom: 10px;
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

/* Responsive */
@media (max-width: 768px) {
  .profil-section, .hubungi-section {
    padding: 50px 30px;
  }
}

.layanan-section {
  background: #fff;
  width: 100%;
  padding: 80px 0;
}

.layanan-card {
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  height: 250px;
}

.layanan-card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* Overlay gradasi dan garis putih */
.layanan-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, #46074E 0%, rgba(25, 123, 208, 0) 100%);
  display: flex;
  align-items: flex-end;
  padding: 20px;
}

/* Garis putih di sisi kiri (bukan bingkai) */
.layanan-inner-border {
  position: absolute;
  top: 1%;
  left: 20px;
  width: 3px;
  height: 70%;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 3px;
}

/* Label tetap muncul di atas overlay */
.layanan-label {
  position: relative;
  z-index: 2;
  font-size: 17px;
  font-weight: 600;
  letter-spacing: 0.5px;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  padding-left: 20px; /* agar teks tidak menempel ke garis */
}


.layanan-label {
  position: relative;
  z-index: 2;
  font-size: 17px;
  font-weight: 600;
  letter-spacing: 0.5px;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

/* Responsif */
@media (max-width: 768px) {
  .layanan-card {
    height: 220px;
  }
  .layanan-label {
    font-size: 15px;
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
        <li class="nav-item"><a class="nav-link active" href="{{ route('layanan') }}">Layanan Kami</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a></li>
        <li class="nav-item"><a class="nav-link {{ Request::is('hubungi') ? 'active' : '' }}" href="{{ route('hubungi') }}">Hubungi Kami</a></li>
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
      <h1>Layanan Kami</h1>
    </div>
  </div>

  <!-- Layanan Kami Section -->
<section class="layanan-section py-5">
  <div class="container text-center">
    <div class="row justify-content-center g-4">
      <!-- Card 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="layanan-card">
          <img src="images/bachelor.png" alt="Studi S1">
          <div class="layanan-overlay">
            <div class="layanan-inner-border"></div>
            <p class="layanan-label">Studi S1 - Bachelor</p>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4 col-sm-6">
        <div class="layanan-card">
          <img src="images/master.png" alt="Studi S2">
          <div class="layanan-overlay">
            <div class="layanan-inner-border"></div>
            <p class="layanan-label">Studi S2 - Master</p>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4 col-sm-6">
        <div class="layanan-card">
          <img src="images/kursus.png" alt="Studi S3">
          <div class="layanan-overlay">
            <div class="layanan-inner-border"></div>
            <p class="layanan-label">Kursus Bahasa Asing</p>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="col-md-4 col-sm-6">
        <div class="layanan-card">
          <img src="images/phd.jpg" alt="Study Tour">
          <div class="layanan-overlay">
            <div class="layanan-inner-border"></div>
            <p class="layanan-label">Studi S3 - Ph.D</p>
          </div>
        </div>
      </div>
      <!-- Card 5 -->
      <div class="col-md-4 col-sm-6">
        <div class="layanan-card">
          <img src="images/studytour.png" alt="Ausbildung">
          <div class="layanan-overlay">
            <div class="layanan-inner-border"></div>
            <p class="layanan-label">Study Tour</p>
          </div>
        </div>
      </div>
      <!-- Card 6 -->
      <div class="col-md-4 col-sm-6">
        <div class="layanan-card">
          <img src="images/ausbildung.jpg" alt="Kursus Bahasa Asing">
          <div class="layanan-overlay">
            <div class="layanan-inner-border"></div>
            <p class="layanan-label">Ausbildung</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== HUBUNGI KAMI SECTION ===================== -->
<section class="hubungi-section">
      <div class="container">
        <p class="section-judul">HUBUNGI KAMI</p>
        <p class="section-kantorPusat">KANTOR PUSAT</p>
        <p>
          Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat <br>
          Phone : (+62 21) 398 38706 · Fax : (+62 21) 316 1701 <br>
          Hotline : +6281151940071 / +62811998167
        </p>
        <button class="btn btn-lokasi">LOKASI KAMI</button>
        <button class="btn btn-kirim">KIRIM PESAN</button>
      </div>
    </section>

  <!-- Footer -->
  <footer class="site-footer">
    <p class="copyright">Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Ambil elemen yang diperlukan
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('navMenu');
    const overlay = document.getElementById('overlay');
    
    // Toggle menu saat hamburger diklik
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      navMenu.classList.toggle('active');
      overlay.classList.toggle('active');
    });
    
    // Tutup menu saat overlay diklik
    overlay.addEventListener('click', () => {
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
      overlay.classList.remove('active');
    });
  </script>
</body>
</html>