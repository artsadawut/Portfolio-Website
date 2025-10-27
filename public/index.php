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

    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            /* สีหลัก (ไม่เปลี่ยน) */
            --primary-color: #1e3c72;
            --secondary-color: #2a5298;
            --highlight-color: #ffd700;
            --transition-speed: 0.3s;

            /* ✅ 2. เปลี่ยนสีพื้นหลังเป็นตัวแปร */
            /* Light Mode (Default) */
            --bg-light: #f8f9fa;
            --section-bg: #ffffff;
            --section-alt-bg: #e9f0f8;
            --card-bg: #ffffff;
            --text-color: #333333;
            --text-muted-color: #6c757d;
            --border-color: rgba(0, 0, 0, 0.1);
        }

        /* ✅ 3. ตั้งค่า Dark Mode */
        body.dark-mode {
            --bg-light: #121212;
            --section-bg: #1a1a1a;
            --section-alt-bg: #222222;
            --card-bg: #2c2c2c;
            --text-color: #f0f0f0;
            --text-muted-color: #a0a0a0;
            --border-color: rgba(255, 255, 255, 0.1);
        }

        /* ✅ 4. ทำให้การเลื่อนนุ่มนวล (สำหรับปุ่ม Back to Top) */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Prompt', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-color);
            transition: background-color var(--transition-speed), color var(--transition-speed);
        }

        /* Navbar (ปรับสีข้อความใน Dark Mode) */
        .navbar {
            background: var(--primary-color);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            transition: background-color 0.3s;
        }

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

        /* ✅ 5. ปุ่มสลับธีม (Theme Toggle) */
        #theme-toggle {
            font-size: 1.1rem;
            width: 40px;
            height: 40px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Header (Hero Section) */
        header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            text-align: center;
            padding: 150px 0 120px;
            position: relative;
            overflow: hidden;
        }

        header h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        /* Section (ใช้ตัวแปร) */
        .section {
            padding: 100px 0;
            background-color: var(--section-bg);
            transition: background-color var(--transition-speed);
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
            background-color: var(--section-alt-bg);
            /* ใช้ตัวแปร */
            transition: background-color var(--transition-speed);
        }

        /* Profile Picture */
        .profile-pic {
            width: 180px;
            height: 240px;
            border-radius: 10px;
            object-fit: cover;
            border: 6px solid var(--highlight-color);
            margin-bottom: 25px;
            box-shadow: 0 0 0 6px var(--primary-color);
            transition: transform 0.3s;
        }

        /* Info List (ใช้ตัวแปร) */
        .info-list li {
            font-size: 1.05rem;
            padding-left: 0;
            border-bottom: 1px dashed var(--border-color);
            /* ใช้ตัวแปร */
            padding-bottom: 8px;
            margin-bottom: 10px;
            transition: border-color var(--transition-speed);
        }

        body.dark-mode .info-list a {
            color: var(--text-color) !important;
            /* แก้ไขสี Link ใน Dark Mode */
            text-decoration: none;
        }

        body.dark-mode .info-list a:hover {
            color: var(--highlight-color) !important;
        }


        /* Timeline/Card (ใช้ตัวแปร) */
        .timeline-card {
            border: none;
            border-left: 5px solid var(--primary-color);
            border-radius: 0;
            padding-left: 20px;
            position: relative;
            background: var(--card-bg);
            /* ใช้ตัวแตัวแปร */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .timeline-card:hover {
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        /* Skills Icons (ใช้ตัวแปร) */
        .skill-item {
            padding: 20px;
            border-radius: 10px;
            background-color: var(--card-bg);
            /* ใช้ตัวแปร */
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
            color: var(--highlight-color) !important;
        }

        /* ✅ 6. แก้ไข Card ทั่วไป (สำหรับ Project) */
        .card {
            background-color: var(--card-bg);
            transition: background-color var(--transition-speed);
        }

        /* Project Cards (ใช้ตัวแปร) */
        .project-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid var(--border-color);
            /* ใช้ตัวแปร */
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

        /* ✅ 7. Override สีข้อความของ Bootstrap ใน Dark Mode */
        body.dark-mode .text-dark {
            color: var(--text-color) !important;
        }

        body.dark-mode .text-muted {
            color: var(--text-muted-color) !important;
        }

        /* Contact Form (ใช้ตัวแปร) */
        .contact-card {
            background-color: var(--card-bg);
            /* ใช้ตัวแปร */
            border: none;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: background-color var(--transition-speed);
        }

        /* ✅ 8. Override Form ใน Dark Mode */
        body.dark-mode .form-control {
            background-color: #333;
            color: #f0f0f0;
            border-color: #555;
        }

        body.dark-mode .form-control:focus {
            background-color: #333;
            color: #f0f0f0;
            border-color: var(--highlight-color);
            box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.25);
        }

        body.dark-mode .form-control::placeholder {
            color: #888;
        }

        body.dark-mode .form-label {
            color: var(--text-muted-color) !important;
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

        /* ✅ 9. ลบ Animation เดิม (AOS จะเข้ามาแทนที่) */
        /* .fade-in { ... }
         * @keyframes fadeInUp { ... }
         */

        /* ✅ 10. สไตล์ปุ่ม "Back to Top" */
        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            background-color: var(--primary-color);
            color: var(--highlight-color);
            border: none;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            font-size: 1.1rem;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: opacity 0.3s, visibility 0.3s, background-color 0.3s;
        }

        #back-to-top:hover {
            background-color: var(--secondary-color);
        }

        #back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        /* ปรับตำแหน่งปุ่มสลับธีมใน Dark Mode (ถ้าทับซ้อน) */
        body.dark-mode #theme-toggle {
            background-color: var(--card-bg);
            border-color: var(--highlight-color);
            color: var(--highlight-color);
        }

        body.dark-mode #theme-toggle:hover {
            background-color: var(--highlight-color);
            color: var(--primary-color);
        }

        /* --- ✅ Dark Mode Fine-Tuning (ส่วนที่เพิ่ม) --- */

        /* 1. แก้ไขเงา (Box Shadow) ที่เป็นสีดำเมื่ออยู่ใน Dark Mode */
        body.dark-mode .timeline-card,
        body.dark-mode .skill-item,
        body.dark-mode .project-card,
        body.dark-mode .contact-card {
            /* ใช้เงาสีขาวจางๆ แทนเงาสีดำ */
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.05);
        }

        /* 1.1 เงาเมื่อ Hover */
        body.dark-mode .timeline-card:hover {
            box-shadow: 0 6px 18px rgba(255, 255, 255, 0.08);
            transform: translateY(-2px);
        }

        body.dark-mode .skill-item:hover,
        body.dark-mode .project-card:hover {
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.15);
            /* เพิ่มความสว่างของเงา */
            transform: translateY(-5px);
            /* เลื่อนขึ้นให้ดูมีมิติ */
        }

        body.dark-mode .skill-item:hover {
            background-color: var(--primary-color);
            color: white;
        }

        body.dark-mode .skill-item:hover i {
            color: var(--highlight-color) !important;
        }

        /* 2. เปลี่ยนสีเส้นขอบ (Border) และเงารอบรูปโปรไฟล์ */
        /* เส้นขอบสีเข้มจะดูจมหายไปในพื้นหลังสีเข้ม เราเปลี่ยนให้ใช้สีไฮไลท์แทน */
        body.dark-mode .profile-pic {
            /* เปลี่ยน box-shadow รอบรูป ให้เป็นสีไฮไลท์แทนสี primary-color */
            box-shadow: 0 0 0 6px var(--highlight-color);
        }

        /* 3. เปลี่ยนสีเส้น Timeline */
        /* ทำให้เส้น Timeline ด้านซ้ายยังคงมองเห็นชัด */
        body.dark-mode .timeline-card {
            border-left-color: var(--highlight-color);
        }

        /* 4. ปรับความสว่างของรูปภาพ (Project Image) */
        /* รูปที่สว่างมาก (เช่น gameitem.jpg) จะดูแสบตาในโหมดมืด ให้ลดความสว่างลง */
        /* **(นี่คือส่วนที่ช่วยแก้ปัญหา "มองไม่เห็น" หรือ "มืด" ในแง่ขององค์ประกอบภาพที่อาจดูทึบในโหมดมืด)** */
        body.dark-mode .project-card img {
            filter: brightness(0.85) contrast(0.95);
            /* ลดความสว่างและความคมชัดลงเล็กน้อย */
            transition: filter 0.5s ease;
        }

        /* เมื่อชี้เมาส์ (Hover) ให้กลับมาสว่างเต็มที่ */
        body.dark-mode .project-card:hover img {
            filter: brightness(1) contrast(1);
            transform: scale(1.05);
        }

        /* 5. เปลี่ยนสี Title/Header ให้ดูไม่มืดเกินไปนัก */
        body.dark-mode .section-title {
            /* เปลี่ยนสีหัวข้อจากสี primary-color (น้ำเงินเข้ม) ให้เป็นสีที่สว่างกว่า */
            color: var(--highlight-color);
            /* ใช้สีเหลืองทองให้โดดเด่น */
        }

        /* 6. แก้ไขสีข้อความในส่วน About/Info List */
        body.dark-mode .info-list li {
            /* ทำให้เส้น dashed ยังคงมองเห็นชัดเจน */
            border-bottom-color: rgba(255, 255, 255, 0.15);
        }

        /* 7. แก้ปัญหา "มองไม่เห็น" ในส่วน Education (Timeline) */
        body.dark-mode .card.timeline-card .text-primary {
            /* หัวข้อ: ปริญญาตรี/ประกาศนียบัตร */
            color: var(--highlight-color) !important;
        }

        body.dark-mode .card.timeline-card .text-muted {
            /* ข้อความรายละเอียด */
            color: var(--text-muted-color) !important;
        }

        body.dark-mode .card.timeline-card .fw-medium {
            /* ชื่อโรงเรียน/วิทยาลัย */
            color: var(--text-color) !important;
        }
        
        /* 8. แก้ปัญหา "มองไม่เห็น" ในส่วน Experience (Timeline) */
        body.dark-mode .card.timeline-card .text-success {
            /* หัวข้อ: Web Developer */
            color: var(--highlight-color) !important;
        }
        
        /* 9. แก้ปัญหาการมองไม่เห็นในส่วน Skills */
        body.dark-mode .skill-item h6 {
            color: var(--text-color) !important;
        }
        
        body.dark-mode .skill-item:hover h6 {
            color: white !important;
        }
        

        /* --- จบส่วน Dark Mode Fine-Tuning --- */
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
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="#about">เกี่ยวกับฉัน</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">การศึกษา</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">ประสบการณ์</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">ทักษะ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">ผลงาน</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">ติดต่อ</a></li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <button id="theme-toggle" class="btn btn-sm btn-outline-warning rounded-circle">🌙</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container" data-aos="fade-in" data-aos-delay="100">
            <h1 class="text-white">Portfolio ของ <span style="color: var(--highlight-color);">นายอัษฎาวุธ ภาระจำ</span></h1>
            <p class="lead mt-3 fs-4 text-light">
                <i class="fa-solid fa-laptop-code me-2"></i> นักพัฒนาเว็บไซต์ | Freelance Developer
            </p>
            <a href="#projects" class="btn btn-warning btn-lg mt-4 fw-bold shadow-lg" style="letter-spacing: 1px;">
                ดูผลงานของฉัน <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </header>

    <section id="about" class="section text-center" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title text-center">เกี่ยวกับฉัน</h2>

            <div class="row justify-content-center mb-5">
                <div class="col-lg-3 col-md-4 mb-4" data-aos="fade-right" data-aos-delay="200">
                    <img src="ano.jpg" alt="Profile Picture" class="profile-pic">
                </div>
                <div class="col-lg-7 col-md-8 text-md-start text-center" data-aos="fade-left" data-aos-delay="300">
                    <h3 class="fw-bold text-dark">นักพัฒนาเว็บไซต์ผู้สร้างสรรค์</h3>
                    <p class="lead text-muted mt-3">
                          ผมคือ Web Developer ที่หลงใหลในการใช้เทคโนโลยีสร้างสรรค์เว็บไซต์ที่ทั้งสวยงาม รวดเร็ว และใช้งานง่าย
                          ถนัดในการพัฒนาเว็บด้วย PHP, JavaScript และ Frameworks ชั้นนำ ทั้งฝั่ง Frontend และ Backend
                          พร้อมเปิดรับทุกความท้าทาย และพัฒนาตัวเองอย่างต่อเนื่อง เพื่อสร้างผลงานที่ตอบโจทย์ผู้ใช้อย่างแท้จริง
                    </p>
                </div>
            </div>

            <h4 class="fw-bold text-primary mb-4 border-bottom pb-2 d-inline-block" data-aos="fade-up" data-aos-delay="400">
                <i class="fa-solid fa-id-card me-2"></i> ข้อมูลส่วนตัว
            </h4>
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="500">
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

    <section id="education" class="section bg-light-blue" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title text-center">ประวัติการศึกษา</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-4 timeline-card" data-aos="fade-left" data-aos-delay="200">
                        <div class="card-body">
                            <h5 class="fw-bold text-primary mb-1">อนุปริญญา สาขาเทคโนโลยีคอมพิวเตอร์</h5>
                            <p class="mb-1 fw-medium">วิทยาลัยเทคนิคพะเยา</p>
                            <small class="text-muted"><i class="fa-solid fa-calendar-alt me-1"></i> 2561 - 2565</small>
                            <p class="mt-2 mb-0 text-muted">เน้นการเรียนรู้ด้านการพัฒนาซอฟต์แวร์, ระบบเครือข่าย, และเทคโนโลยีเว็บ</p>
                        </div>
                    </div>
                    <div class="card mb-4 timeline-card" data-aos="fade-left" data-aos-delay="300">
                        <div class="card-body">
                            <h5 class="fw-bold text-primary mb-1">ประกาศนียบัตรมัธยมศึกษาตอนปลาย (ม.6)</h5>
                            <p class="mb-1 fw-medium">โรงเรียนดอกคำใต้วิทยาคม</p>
                            <small class="text-muted"><i class="fa-solid fa-calendar-alt me-1"></i> 2558 - 2560</small>
                            <p class="mt-2 mb-0 text-muted">สายวิทย์-คณิต</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="section" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title text-center">ประสบการณ์ทำงาน</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-4 timeline-card" data-aos="fade-right" data-aos-delay="200">
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
                    <div class="card mb-4 timeline-card" data-aos="fade-right" data-aos-delay="300">
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

   <section id="skills" class="section bg-light-blue text-center" data-aos="fade-up">
    <div class="container">
        <h2 class="section-title">ทักษะของฉัน</h2>

        <h4 class="text-primary mb-4 fw-bold">Development & Technology</h4>
        <div class="row justify-content-center mb-5">
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="skill-item">
                    <i class="fa-brands fa-html5 fa-3x text-danger"></i>
                    <h6 class="mt-2 fw-medium">HTML5</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="150">
                <div class="skill-item">
                    <i class="fa-brands fa-css3-alt fa-3x text-info"></i>
                    <h6 class="mt-2 fw-medium">CSS3</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="skill-item">
                    <i class="fa-brands fa-js fa-3x text-warning"></i>
                    <h6 class="mt-2 fw-medium">JavaScript</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="250">
                <div class="skill-item">
                    <i class="fa-brands fa-php fa-3x text-primary"></i>
                    <h6 class="mt-2 fw-medium">PHP</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="skill-item">
                    <i class="fa-solid fa-database fa-3x text-secondary"></i>
                    <h6 class="mt-2 fw-medium">MySQL</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="350">
                <div class="skill-item">
                    <i class="fa-brands fa-bootstrap fa-3x text-purple" style="color: #7952b3;"></i>
                    <h6 class="mt-2 fw-medium">Bootstrap</h6>
                </div>
            </div>
        </div>

        <h4 class="text-primary mb-4 fw-bold">Other Skills & Design</h4>
        <div class="row justify-content-center">
            
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="450">
                <div class="skill-item">
                    <i class="fa-solid fa-paintbrush fa-3x" style="color: #31a8ff;"></i>
                    <h6 class="mt-2 fw-medium">Photoshop</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="550">
                <div class="skill-item">
                    <i class="fa-solid fa-code fa-3x text-success"></i>
                    <h6 class="mt-2 fw-medium">C++</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="600">
                <div class="skill-item">
                    <i class="fa-solid fa-scissors fa-3x text-danger"></i>
                    <h6 class="mt-2 fw-medium">CapCut</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="650">
                <div class="skill-item">
                    <i class="fa-solid fa-network-wired fa-3x text-info"></i>
                    <h6 class="mt-2 fw-medium">Network</h6>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-4" data-aos="zoom-in" data-aos-delay="700">
                <div class="skill-item">
                    <i class="fa-solid fa-microchip fa-3x text-warning"></i>
                    <h6 class="mt-2 fw-medium">Hardware</h6>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section id="projects" class="section text-center" data-aos="fade-up">
        <div class="container">
            <h2 class="section-title">ผลงานของฉัน</h2>
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
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

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
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

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
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

  <section id="contact" class="section bg-light-blue py-5" data-aos="fade-up">
    <div class="container py-4">
        <h2 class="section-title text-center mb-5">
            <i class="fa-solid fa-comment-dots me-2"></i> ติดต่อฉัน
        </h2>
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8 text-center">
                <div class="card contact-card p-4 p-md-5 rounded-4">
                    <p class="lead text-muted mb-5">
                        หากสนใจโปรเจกต์ หรือต้องการพูดคุยเรื่องงาน สามารถติดต่อฉันได้โดยตรงทันที
                    </p>

                    <div class="row justify-content-center gy-4">
                        
                        <div class="col-sm-6">
                            <a href="https://www.facebook.com/asadawut.parajam/" target="_blank" 
                               class="btn btn-primary btn-lg w-100 fw-bold rounded-pill shadow" 
                               style="letter-spacing: 1px; background-color: #1877F2; border-color: #1877F2;">
                                <i class="fa-brands fa-facebook me-2"></i>  Facebook
                            </a>
                        </div>
                        
                        <div class="col-sm-6">
                            <a href="tel:0912345678" 
                               class="btn btn-warning btn-lg w-100 fw-bold rounded-pill shadow" 
                               style="letter-spacing: 1px;">
                                <i class="fa-solid fa-phone me-2"></i> โทร: 099-241-8043
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-12 mt-5">
                        <p class="mb-0 text-muted">หรือติดต่อผ่านอีเมล:</p>
                        <a href="mailto:artsadawut05@gmail.com" class="fs-5 fw-medium text-dark text-decoration-none">
                            <i class="fa-solid fa-envelope me-1 text-primary"></i> artsadawut05@gmail.com
                        </a>
                    </div>
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

    <button id="back-to-top" title="กลับขึ้นด้านบน"><i class="fa-solid fa-arrow-up"></i></button>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        // ✅ 15. สั่งให้ AOS ทำงาน
        AOS.init({
            duration: 800, // ระยะเวลา animation
            once: true // ให้ animation ทำงานแค่ครั้งเดียว
        });

        // --- โค้ดเดิมของคุณ ---
        // Form Validation
        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()

        // Active Navbar Link on Scroll
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
                rootMargin: "0px 0px -70% 0px",
                threshold: 0.1
            });

            sections.forEach(section => {
                observer.observe(section);
            });

            // ✅ 11. Dark Mode Toggle Logic
            const themeToggle = document.getElementById('theme-toggle');
            const body = document.body;
            const currentTheme = localStorage.getItem('theme');

            // Set initial theme
            if (currentTheme === 'dark') {
                body.classList.add('dark-mode');
                themeToggle.innerHTML = '☀︎'; // เปลี่ยนไอคอนเป็นพระอาทิตย์
            }

            themeToggle.addEventListener('click', () => {
                body.classList.toggle('dark-mode');

                if (body.classList.contains('dark-mode')) {
                    localStorage.setItem('theme', 'dark');
                    themeToggle.innerHTML = '☀︎'; // เปลี่ยนไอคอนเป็นพระอาทิตย์
                } else {
                    localStorage.setItem('theme', 'light');
                    themeToggle.innerHTML = '☾'; // เปลี่ยนไอคอนเป็นพระจันทร์
                }
                // ต้องเรียก AOS.refresh() เมื่อเปลี่ยนโหมดเพื่ออัพเดตเงา/สี
                AOS.refresh();
            });

            // ✅ 12. Back to Top Button Logic
            const backToTopButton = document.getElementById('back-to-top');

            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) { // แสดงปุ่มเมื่อเลื่อนลงมาเกิน 300px
                    backToTopButton.classList.add('show');
                } else {
                    backToTopButton.classList.remove('show');
                }
            });

            backToTopButton.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // ✅ 13. Navbar Scroll Shadow/Background (ถ้าต้องการ)
            // (โค้ดนี้ไม่ได้ทำอะไรมากนักในโค้ดเดิม แต่ถ้ามีสไตล์ที่แตกต่างกันเมื่อ Scroll สามารถใส่ที่นี่)
            const mainNavbar = document.getElementById('main-navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    mainNavbar.classList.add('scrolled');
                } else {
                    mainNavbar.classList.remove('scrolled');
                }
            });
        });
    </script>
</body>

</html>