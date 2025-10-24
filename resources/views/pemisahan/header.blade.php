<!-- Overlay untuk mobile menu -->
<div class="overlay" id="overlay"></div>

<!-- 🔹 Navbar -->
<nav class="custom-navbar">
    <!-- Logo -->
    <div class="logo-container">
      <!-- Menaruh Desain Gambar-->
       <img src="{{ asset('images/inaklug.png') }}" alt="logo dari klug" class="logo-img">
       <span class="logo-text">Inaklug</span>
    </div>

  <!-- Hamburger Menu Button -->
  <button class="hamburger" id="hamburger">
    <span></span>
    <span></span>
    <span></span>
  </button>

  <!-- Menu Navigasi -->
  <ul class="nav" id="navMenu">
    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}">Home</a></li>
    <li class="nav-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a></li>
    <li class="nav-item"><a class="nav-link {{ Request::is('layanan') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan Kami</a></li>
    <li class="nav-item"><a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a></li>
    <li class="nav-item"><a class="nav-link {{ Request::is('hubungi') ? 'active' : '' }}" href="{{ route('hubungi') }}">Hubungi Kami</a></li>
  </ul>

  <!-- Pencarian + Tombol -->
  <div class="navbar-right">
    <!-- Search Bar dengan Material Icons -->
    <div class="search-wrapper">
      <span class="material-icons search-icon">search</span>
      <input type="text" class="search-input" placeholder="Ketik pencarian">
    </div>
    <button class="btn-daftar">DAFTAR ON-LINE</button>
  </div>
</nav>

@push('scripts')
<script>
  // Menandai link navigasi aktif berdasarkan URL (tanpa storage)
  (function () {
    const LINKS_SELECTOR = '.nav-link';
    const norm = s => (s || '').replace(/^[.\/]+/, '');

    function setActiveByLocation() {
      const path = window.location.pathname.split('/').pop() || 'index.html';
      document.querySelectorAll(LINKS_SELECTOR).forEach(l => {
        const lh = norm(l.getAttribute('href') || '');
        const lLast = lh.split('/').pop();
        const isMatch = (lh === path) || (lLast === path) || (path.endsWith(lLast));
        l.classList.toggle('active', isMatch);
      });
    }

    document.addEventListener('DOMContentLoaded', setActiveByLocation);
  })();

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

  // Tutup menu saat resize ke desktop
  window.addEventListener('resize', () => {
    if (window.innerWidth > 992) {
      hamburger.classList.remove('active');
      navMenu.classList.remove('active');
      overlay.classList.remove('active');
      document.body.style.overflow = 'auto';
    }
  });
</script>
@endpush