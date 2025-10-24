<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - นายอัษฎาวุธ ภาระจำ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr-next/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #1e3c72;
            --secondary-color: #2a5298;
            --highlight-color: #ffd700;
            --bg-light: #f8f9fa;
        }

        body {
            font-family: 'Prompt', sans-serif;
            background-color: var(--bg-light);
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            background: var(--primary-color); /* ใช้สีหลักเดียวกับ gradient */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s;
        }
        /* Style for fixed navbar on scroll */
        .navbar.scrolled {
            background-color: var(--primary-color);
        }

        .navbar a {
            color: #fff !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
        }

        .navbar a:hover,
        .navbar .nav-item .active {
            color: var(--highlight-color) !important;
            transition: color 0.3s ease;
        }

        /* Header (Hero Section) */
        header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            text-align: center;
            padding: 150px 0 120px; /* เพิ่ม padding ด้านบน */
            position: relative;
            overflow: hidden; /* ป้องกันขอบ header เกิน */
        }
        
        header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        /* Section */
        .section {
            padding: 100px 0; /* เพิ่ม padding ให้ส่วนต่างๆ */
            background-color: #ffffff; /* กำหนดสีพื้นหลังชัดเจน */
        }
        
        .section-title {
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--highlight-color);
            border-radius: 2px;
        }
        
        .bg-light-blue {
            background-color: #e9f0f8; /* สีพื้นหลังอ่อนๆ สำหรับสลับ Section */
        }

        /* Profile Picture */
        .profile-pic {
            width: 180px;
            height: 240px;
            border-radius: 10px;
            object-fit: cover;
            border: 6px solid var(--highlight-color); /* เปลี่ยนกรอบเป็นสีไฮไลท์ */
            margin-bottom: 25px;
            box-shadow: 0 0 0 6px var(--primary-color); /* เพิ่มเงาซ้อน */
            transition: transform 0.3s;
        }

        /* Info List (สำหรับข้อมูลส่วนตัว) */
        .info-list li {
            font-size: 1.05rem;
            padding-left: 0;
            border-bottom: 1px dashed rgba(0, 0, 0, 0.1);
            padding-bottom: 8px;
            margin-bottom: 10px;
        }

        /* Education & Experience Timeline/Card */
        .timeline-card {
            border: none;
            border-left: 5px solid var(--primary-color); /* ทำเป็นเส้น Timeline */
            border-radius: 0;
            padding-left: 20px;
            position: relative;
            background: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        .timeline-card:hover {
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        /* Skills Icons */
        .skill-item {
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            transition: all 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .skill-item:hover {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        .skill-item:hover i {
            color: var(--highlight-color) !important; /* เปลี่ยนสีไอคอนใน hover */
        }

        /* Project Cards */
        .project-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .project-card img {
            height: 250px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.5s ease;
        }
        
        .project-card:hover img {
            transform: scale(1.05);
        }

        /* Contact Form */
        .contact-card {
            background-color: #ffffff;
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 25px 0;
            border-top: 5px solid var(--highlight-color);
        }

        footer a {
            color: var(--highlight-color);
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

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="main-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="#">
                <i class="fa-solid fa-code me-2"></i> Artsadawut P.
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#about">เกี่ยวกับฉัน</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">การศึกษา</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">ประสบการณ์</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">ทักษะ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">ผลงาน</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">ติดต่อ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container fade-in" style="animation-delay: 0.1s;">
            <h1 class="text-white">Portfolio ของ <span style="color: var(--highlight-color);">นายอัษฎาวุธ ภาระจำ</span></h1>
            <p class="lead mt-3 fs-4 text-light">
                <i class="fa-solid fa-laptop-code me-2"></i> นักพัฒนาเว็บไซต์ | Freelance Developer
            </p>
            <a href="#projects" class="btn btn-warning btn-lg mt-4 fw-bold shadow-lg" style="letter-spacing: 1px;">
                ดูผลงานของฉัน <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </header>

    <section id="about" class="section fade-in text-center">
        <div class="container">
            <h2 class="section-title text-center">เกี่ยวกับฉัน</h2>
            
            <div class="row justify-content-center mb-5">
                <div class="col-lg-3 col-md-4 mb-4">
                    <img src="ano.jpg" alt="Profile Picture" class="profile-pic">
                </div>
                <div class="col-lg-7 col-md-8 text-md-start text-center">
                    <h3 class="fw-bold text-dark">นักพัฒนาเว็บไซต์ผู้สร้างสรรค์</h3>
                    <p class="lead text-muted mt-3">
                        ฉันชื่อ **เอ็กซ์ (นายอัษฎาวุธ)** เป็นนักพัฒนาเว็บไซต์ที่หลงใหลในการใช้เทคโนโลยีเพื่อสร้างสรรค์โซลูชันที่มีประสิทธิภาพและใช้งานง่าย 
                        ฉันมีความถนัดในการใช้ **PHP** และ **JavaScript** รวมถึง Frameworks ต่างๆ เพื่อสร้างเว็บคุณภาพสูง ทั้งด้านหน้าบ้าน (Frontend) และหลังบ้าน (Backend)
                        พร้อมที่จะเรียนรู้และนำเสนอสิ่งใหม่ๆ เสมอ
                    </p>
                </div>
            </div>

            <h4 class="fw-bold text-primary mb-4 border-bottom pb-2 d-inline-block">
                <i class="fa-solid fa-id-card me-2"></i> ข้อมูลส่วนตัว
            </h4>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-6 text-start">
                    <ul class="list-unstyled info-list">
                        <li><i class="fa-solid fa-user-tie text-primary me-3"></i> ชื่อ-นามสกุล: <strong>นายอัษฎาวุธ ภาระจำ</strong></li>
                        <li><i class="fa-solid fa-cake-candles text-primary me-3"></i> วันเกิด: 8 ธันวาคม 2548</li>
                        <li><i class="fa-solid fa-location-dot text-primary me-3"></i> ที่อยู่: อำเภอดอกคำใต้ จังหวัดพะเยา</li>
                        <li><i class="fa-solid fa-envelope text-primary me-3"></i> อีเมล: <a href="mailto:artsadawut05@gmail.com" class="text-decoration-none text-dark fw-medium">artsadawut05@gmail.com</a></li>
                        <li><i class="fa-solid fa-phone text-primary me-3"></i> โทรศัพท์: 091-234-5678</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="section bg-light-blue fade-in">
        <div class="container">
            <h2 class="section-title text-center">ประวัติการศึกษา</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-4 timeline-card">
                        <div class="card-body">
                            <h5 class="fw-bold text-primary mb-1">ปริญญาตรี สาขาเทคโนโลยีคอมพิวเตอร์</h5>
                            <p class="mb-1 fw-medium">วิทยาลัยเทคนิคพะเยา</p>
                            <small class="text-muted"><i class="fa-solid fa-calendar-alt me-1"></i> 2561 - 2565</small>
                            <p class="mt-2 mb-0">เน้นการเรียนรู้ด้านการพัฒนาซอฟต์แวร์, ระบบเครือข่าย, และเทคโนโลยีเว็บ</p>
                        </div>
                    </div>
                    <div class="card mb-4 timeline-card">
                        <div class="card-body">
                            <h5 class="fw-bold text-primary mb-1">ประกาศนียบัตรมัธยมศึกษาตอนปลาย (ม.6)</h5>
                            <p class="mb-1 fw-medium">โรงเรียนดอกคำใต้วิทยาคม</p>
                            <small class="text-muted"><i class="fa-solid fa-calendar-alt me-1"></i> 2558 - 2560</small>
                            <p class="mt-2 mb-0">สายวิทย์-คณิต</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="section fade-in">
        <div class="container">
            <h2 class="section-title text-center">ประสบการณ์ทำงาน</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-4 timeline-card">
                        <div class="card-body">
                            <h5 class="fw-bold text-success mb-1">Web Developer (Freelance)</h5>
                            <p class="mb-1 fw-medium">นักพัฒนาอิสระ</p>
                            <small class="text-muted"><i class="fa-solid fa-calendar-alt me-1"></i> 2568 - ปัจจุบัน</small>
                            <ul class="mt-3 text-muted">
                                <li>พัฒนาเว็บไซต์แบบ Full-stack ให้กับลูกค้าหลากหลาย เช่น เว็บ E-commerce และระบบจัดการข้อมูล (CMS)</li>
                                <li>รับผิดชอบตั้งแต่การออกแบบ UI/UX จนถึงการติดตั้งและดูแลระบบบน Server</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mb-4 timeline-card">
                        <div class="card-body">
                            <h5 class="fw-bold text-success mb-1">Web Developer & Network Cabling Repair (Internship)</h5>
                            <p class="mb-1 fw-medium">โรงพยาบาลพะเยา</p>
                            <small class="text-muted"><i class="fa-solid fa-calendar-alt me-1"></i> 2568 - 2569</small>
                            <ul class="mt-3 text-muted">
                                <li>ช่วยทีมงานพัฒนาเว็บไซต์ภายในของโรงพยาบาล</li>
                                <li>เรียนรู้และปฏิบัติการซ่อมแซมและดูแลระบบเครือข่ายเบื้องต้น</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="section bg-light-blue fade-in text-center">
        <div class="container">
            <h2 class="section-title">ทักษะของฉัน</h2>
            
            <h4 class="text-primary mb-4 fw-bold">Development & Technology</h4>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="skill-item">
                        <i class="fa-brands fa-html5 fa-3x text-danger"></i>
                        <h6 class="mt-2 fw-medium">HTML5</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="skill-item">
                        <i class="fa-brands fa-css3-alt fa-3x text-info"></i>
                        <h6 class="mt-2 fw-medium">CSS3</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="skill-item">
                        <i class="fa-brands fa-js fa-3x text-warning"></i>
                        <h6 class="mt-2 fw-medium">JavaScript</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="skill-item">
                        <i class="fa-brands fa-php fa-3x text-primary"></i>
                        <h6 class="mt-2 fw-medium">PHP</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="skill-item">
                        <i class="fa-solid fa-database fa-3x text-secondary"></i>
                        <h6 class="mt-2 fw-medium">MySQL</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="skill-item">
                        <i class="fa-brands fa-bootstrap fa-3x text-purple" style="color: #7952b3;"></i>
                        <h6 class="mt-2 fw-medium">Bootstrap</h6>
                    </div>
                </div>
            </div>

            <h4 class="text-primary mb-4 fw-bold">Other Skills</h4>
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="skill-item">
                        <i class="fa-solid fa-code fa-3x text-success"></i>
                        <h6 class="mt-2 fw-medium">C++</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="skill-item">
                        <i class="fa-solid fa-scissors fa-3x text-danger"></i>
                        <h6 class="mt-2 fw-medium">CapCut</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4">
                    <div class="skill-item">
                        <i class="fa-solid fa-network-wired fa-3x text-info"></i>
                        <h6 class="mt-2 fw-medium">Network</h6>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="projects" class="section fade-in text-center">
        <div class="container">
            <h2 class="section-title">ผลงานของฉัน</h2>
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card project-card shadow">
                        <img src="gameitem.jpg" alt="Ragna Shop Project" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Ragna Shop</h5>
                            <p class="text-muted">เว็บไซต์ขายไอเท็มในเกม ระบบบริหารจัดการสินค้าและผู้ใช้งาน</p>
                            <a href="project1.php" class="btn btn-primary btn-sm mt-2 fw-medium" target="_blank">
                                <i class="fa-solid fa-eye me-1"></i> ดูรายละเอียด
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card project-card shadow">
                        <img src="Portfolio.png" alt="Portfolio Website" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">Portfolio Website (v1)</h5>
                            <p class="text-muted">ออกแบบเว็บไซต์ Portfolio ส่วนตัวด้วย Bootstrap 5</p>
                            <a href="project2.php" class="btn btn-primary btn-sm mt-2 fw-medium" target="_blank">
                                <i class="fa-solid fa-eye me-1"></i> ดูรายละเอียด
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card project-card shadow">
                        <img src="capcut.jpg" alt="CapCut Projects" loading="lazy">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">CapCut Video Editing</h5>
                            <p class="text-muted">ตัวอย่างผลงานตัดต่อวิดีโอสร้างสรรค์ด้วย CapCut</p>
                            <a href="project3.php" class="btn btn-primary btn-sm mt-2 fw-medium" target="_blank">
                                <i class="fa-solid fa-eye me-1"></i> ดูรายละเอียด
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="section bg-light-blue py-5 fade-in">
        <div class="container py-4">
            <h2 class="section-title text-center mb-5">
                <i class="fa-solid fa-comment-dots me-2"></i> ติดต่อเรา
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="card contact-card p-4 p-md-5 rounded-4">
                        <form class="needs-validation" novalidate>
                            <div class="mb-4">
                                <label for="name" class="form-label fw-bold text-secondary">ชื่อของคุณ</label>
                                <input type="text" class="form-control form-control-lg border-2 rounded-3" id="name"
                                    placeholder="กรุณากรอกชื่อของคุณ" required>
                                <div class="invalid-feedback">
                                    กรุณากรอกชื่อของคุณ
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold text-secondary">อีเมล</label>
                                <input type="email" class="form-control form-control-lg border-2 rounded-3" id="email"
                                    placeholder="example@email.com" required>
                                <div class="invalid-feedback">
                                    กรุณากรอกอีเมลที่ถูกต้อง
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label fw-bold text-secondary">ข้อความ / รายละเอียดงาน</label>
                                <textarea class="form-control border-2 rounded-3" id="message" rows="5"
                                    placeholder="พิมพ์ข้อความหรือรายละเอียดงานที่ต้องการติดต่อ..." required></textarea>
                                <div class="invalid-feedback">
                                    กรุณากรอกข้อความ
                                </div>
                            </div>
                            <div class="d-grid mt-5">
                                <button type="submit" class="btn btn-primary btn-lg fw-bold rounded-pill shadow-sm"
                                    style="letter-spacing: 1px;">
                                    ส่งข้อความ <i class="fa-solid fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p class="mb-0">&copy; 2025 Artsadawut P. Portfolio. All rights reserved.</p>
            <small>สร้างด้วย ❤️ และ <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a></small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Form Validation
        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
        
        // Active Navbar Link on Scroll (Optional, but enhances UX)
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

            function updateNav(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === `#${entry.target.id}`) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }

            const observer = new IntersectionObserver(updateNav, {
                root: null,
                rootMargin: "0px 0px -70% 0px", // 70% of the viewport height from the bottom
                threshold: 0.1
            });

            sections.forEach(section => {
                observer.observe(section);
            });
        });
        
    </script>
</body>

</html>