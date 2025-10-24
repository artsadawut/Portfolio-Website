<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - My Website</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    body {
      font-family: 'Prompt', sans-serif;
      background-color: #f8f9fa;
      scroll-behavior: smooth;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #1e3c72, #2a5298);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
    }

    .navbar a {
      color: #fff !important;
      font-weight: 500;
    }

    .navbar a:hover {
      color: #ffd700 !important;
      transition: color 0.3s ease;
    }

    /* Header */
    header {
      background: linear-gradient(to right, #1e3c72, #2a5298);
      color: white;
      text-align: center;
      padding: 120px 0 100px;
      position: relative;
    }

    header::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 80px;
      background: linear-gradient(to top, #f8f9fa, transparent);
    }

    /* Section */
    .section {
      padding: 80px 0;
    }

    /* Profile Picture */
    .profile-pic {
      width: 180px;
      height: 240px;
      border-radius: 10px;
      object-fit: cover;
      border: 5px solid #1e3c72;
      margin-bottom: 20px;
      transition: transform 0.3s;
    }

    .profile-pic:hover {
      transform: scale(1.05);
    }

    /* Project Cards */
    .project-card {
      transition: transform 0.3s, box-shadow 0.3s;
      border: none;
      border-radius: 12px;
    }

    .project-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
    }

    .project-card img {
      border-top-left-radius: 12px;
      border-top-right-radius: 12px;
      height: 220px;
      object-fit: cover;
    }

    /* Footer */
    footer {
      background-color: #1e3c72;
      color: white;
      text-align: center;
      padding: 25px 0;
    }

    footer a {
      color: #ffd700;
    }

    footer a:hover {
      text-decoration: underline;
    }

    /* Animation */
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s forwards;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Portfolio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">เกี่ยวกับฉัน</a></li>
          <li class="nav-item"><a class="nav-link" href="#education">การศึกษา</a></li>
          <li class="nav-item"><a class="nav-link" href="#experience">ประสบการณ์</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills">ทักษะ</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">ผลงาน</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">ติดต่อเรา</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header>
    <div class="container fade-in">
      <h1 class="fw-bold">Portfolio ของ <span style="color: #ffd700;">นายอัษฎาวุธ ภาระจำ</span></h1>
      <p class="lead mt-3">นักพัฒนาเว็บไซต์ | Freelance Developer</p>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="section fade-in text-center">
    <div class="container">
      <h2 class="mb-4 fw-bold text-primary">เกี่ยวกับฉัน</h2>
      <img src="ano.jpg" alt="Profile Picture" class="profile-pic">
      <p class="lead text-muted mt-3 mx-auto" style="max-width: 700px;">
        ฉันชื่อ เอ็กซ์ เป็นนักพัฒนาเว็บไซต์ที่หลงใหลในเทคโนโลยีและการออกแบบที่สวยงาม 
        ใช้ PHP, JavaScript และ Frameworks ต่างๆ เพื่อสร้างเว็บคุณภาพสูงและใช้งานง่าย
      </p>
    </div>
  </section>

  <!-- Education Section -->
  <section id="education" class="section bg-light fade-in">
    <div class="container">
      <h2 class="text-center mb-4 fw-bold text-primary">ประวัติการศึกษา</h2>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card mb-3 shadow-sm border-0 rounded-3">
            <div class="card-body">
              <h5 class="fw-bold text-primary">ปริญญาตรี สาขาเทคโนโลยีคอมพิวเตอร์</h5>
              <p class="mb-1">วิทยาลัยเทคนิคพะเยา</p>
              <small class="text-muted">2561 - 2565</small>
            </div>
          </div>
          <div class="card mb-3 shadow-sm border-0 rounded-3">
            <div class="card-body">
              <h5 class="fw-bold text-primary">ประกาศนียบัตรมัธยมศึกษาตอนปลาย (ม.6)</h5>
              <p class="mb-1">โรงเรียนดอกคำใต้วิทยาคม</p>
              <small class="text-muted">2558 - 2560</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Experience Section -->
  <section id="experience" class="section fade-in">
    <div class="container">
      <h2 class="text-center mb-4 fw-bold text-primary">ประสบการณ์ทำงาน</h2>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card mb-3 shadow-sm border-0 rounded-3">
            <div class="card-body">
              <h5 class="fw-bold text-success">Web Developer (Freelance)</h5>
              <p>พัฒนาเว็บไซต์ให้กับลูกค้าทั่วไปและธุรกิจขนาดเล็ก เช่น เว็บไซต์ร้านค้า และระบบจัดการข้อมูล</p>
              <small class="text-muted">2568 - ปัจจุบัน</small>
            </div>
          </div>
          <div class="card mb-3 shadow-sm border-0 rounded-3">
            <div class="card-body">
              <h5 class="fw-bold text-success">Web Developer & Network Cabling Repair (Internship)</h5>
              <p>ฝึกงานที่โรงพยาบาลพะเยา พัฒนาเว็บไซต์ และเรียนรู้การซ่อมแซมระบบเครือข่าย</p>
              <small class="text-muted">2568 - 2569</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Skills Section -->
  <section id="skills" class="section bg-light fade-in text-center">
    <div class="container">
      <h2 class="mb-5 fw-bold text-primary">ทักษะของฉัน</h2>
      <div class="row justify-content-center">
        <div class="col-md-2 col-6 mb-4">
          <i class="fa-brands fa-html5 fa-3x text-danger"></i>
          <h6 class="mt-2">HTML5</h6>
        </div>
        <div class="col-md-2 col-6 mb-4">
          <i class="fa-solid fa-code fa-3x text-primary"></i>
          <h6 class="mt-2">C++</h6>
        </div>
        <div class="col-md-2 col-6 mb-4">
          <i class="fa-brands fa-js fa-3x text-warning"></i>
          <h6 class="mt-2">JavaScript</h6>
        </div>
        <div class="col-md-2 col-6 mb-4">
          <i class="fa-brands fa-php fa-3x text-info"></i>
          <h6 class="mt-2">PHP</h6>
        </div>
        <div class="col-md-2 col-6 mb-4">
          <i class="fa-solid fa-scissors fa-3x text-success"></i>
          <h6 class="mt-2">CapCut</h6>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
<section id="projects" class="section fade-in text-center">
  <div class="container">
    <h2 class="mb-4 fw-bold text-primary">ผลงานของฉัน</h2>
    <div class="row">
      
      <!-- Project 1 -->
      <div class="col-md-4 mb-4">
        <div class="card project-card shadow-sm">
          <img src="gameitem.jpg" alt="Project 1">
          <div class="card-body">
            <h5 class="card-title fw-bold">Ragna Shop</h5>
            <p class="text-muted">เว็บไซต์ขายไอเท็มในเกม</p>
            <a href="ragna-shop.php" class="btn btn-outline-primary btn-sm" target="_blank">
              <i class="fa-solid fa-eye me-1"></i> ดูรายละเอียด
            </a>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="col-md-4 mb-4">
        <div class="card project-card shadow-sm">
          <img src="Portfolio.png" alt="Project 2">
          <div class="card-body">
            <h5 class="card-title fw-bold">Portfolio Website</h5>
            <p class="text-muted">ออกแบบเว็บไซต์ Portfolio ส่วนตัว</p>
            <a href="portfolio-detail.php" class="btn btn-outline-primary btn-sm" target="_blank">
              <i class="fa-solid fa-eye me-1"></i> ดูรายละเอียด
            </a>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="col-md-4 mb-4">
        <div class="card project-card shadow-sm">
          <img src="capcut.jpg" alt="Project 3">
          <div class="card-body">
            <h5 class="card-title fw-bold">CapCut Projects</h5>
            <p class="text-muted">ตัดต่อวิดีโอสร้างสรรค์ด้วย CapCut</p>
            <a href="capcut-project.php" class="btn btn-outline-primary btn-sm" target="_blank">
              <i class="fa-solid fa-eye me-1"></i> ดูรายละเอียด
            </a>
          </div>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="col-md-4 mb-4">
        <div class="card project-card shadow-sm">
          <img src="blog.jpg" alt="Project 4">
          <div class="card-body">
            <h5 class="card-title fw-bold">Personal Blog</h5>
            <p class="text-muted">บล็อกส่วนตัวสำหรับแบ่งปันบทความเทคโนโลยี</p>
            <a href="personal-blog.php" class="btn btn-outline-primary btn-sm" target="_blank">
              <i class="fa-solid fa-eye me-1"></i> ดูรายละเอียด
            </a>
          </div>
        </div>
      </div>

      <!-- Project 5 -->
      <div class="col-md-4 mb-4">
        <div class="card project-card shadow-sm">
          <img src="ecommerce.jpg" alt="Project 5">
          <div class="card-body">
            <h5 class="card-title fw-bold">E-Commerce Website</h5>
            <p class="text-muted">เว็บไซต์ร้านค้าออนไลน์พร้อมระบบตะกร้าสินค้า</p>
            <a href="ecommerce.php" class="btn btn-outline-primary btn-sm" target="_blank">
              <i class="fa-solid fa-eye me-1"></i> ดูรายละเอียด
            </a>
          </div>
        </div>
      </div>

      <!-- Project 6 -->
      <div class="col-md-4 mb-4">
        <div class="card project-card shadow-sm">
          <img src="dashboard.jpg" alt="Project 6">
          <div class="card-body">
            <h5 class="card-title fw-bold">Admin Dashboard</h5>
            <p class="text-muted">ระบบจัดการข้อมูลหลังบ้านด้วย PHP + MySQL</p>
            <a href="admin-dashboard.php" class="btn btn-outline-primary btn-sm" target="_blank">
              <i class="fa-solid fa-eye me-1"></i> ดูรายละเอียด
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


  <!-- Contact Section -->
  <section id="contact" class="section bg-light fade-in">
    <div class="container">
      <h2 class="text-center mb-4 fw-bold text-primary">ติดต่อเรา</h2>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card shadow-sm border-0 rounded-4 p-4">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label fw-semibold">ชื่อของคุณ</label>
                <input type="text" class="form-control" id="name" placeholder="กรอกชื่อของคุณ" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label fw-semibold">อีเมล</label>
                <input type="email" class="form-control" id="email" placeholder="artsadawut05@gmail.com" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label fw-semibold">ข้อความ</label>
                <textarea class="form-control" id="message" rows="4" placeholder="พิมพ์ข้อความของคุณที่นี่..." required></textarea>
              </div>
