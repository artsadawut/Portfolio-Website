<?php
// หน้าแสดงรายละเอียดผลงาน Portfolio Website
// เปลี่ยนชื่อไฟล์นี้เป็น portfolio_detail.php หรือตามที่คุณใช้
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website - รายละเอียดผลงาน</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* ================================================= */
        /* === ส่วนที่ 1: ตัวแปรสีและ Dark Mode Variables === */
        /* ================================================= */
        :root {
            /* สีหลัก (อิงตามหน้าหลัก) */
            --primary-color: #1e3c72; /* สีน้ำเงินเข้ม */
            --secondary-color: #2a5298; /* สีน้ำเงินสว่าง */
            --accent-color: #ffd700; /* สีทอง */
            --transition-speed: 0.3s;

            /* Light Mode (Default) */
            --bg-light: #f8f9fa; /* พื้นหลังหน้าเว็บ */
            --card-bg: #ffffff; /* พื้นหลัง Card */
            --text-color: #333333;
            --text-muted-color: #6c757d;
            --border-color: rgba(0, 0, 0, 0.1);
        }

        /* ------------------ Dark Mode ------------------ */
        body.dark-mode {
            --bg-light: #121212;
            --card-bg: #1a1a1a;
            --text-color: #f0f0f0;
            --text-muted-color: #a0a0a0;
            --border-color: rgba(255, 255, 255, 0.1);
        }

        /* ================================================= */
        /* === ส่วนที่ 2: Base Styles และ Dark Mode Tweak === */
        /* ================================================= */
        body {
            font-family: 'Prompt', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-color);
            padding-top: 60px;
            min-height: 100vh;
            transition: background-color var(--transition-speed), color var(--transition-speed);
        }

        /* Card/Section Styling */
        .project-detail-card {
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 30px;
            transition: background-color var(--transition-speed), box-shadow var(--transition-speed);
        }
        body.dark-mode .project-detail-card {
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.05);
        }

        /* Header Styling */
        .project-header h2 {
            color: var(--primary-color);
            font-weight: 700;
            border-bottom: 3px solid var(--accent-color);
            padding-bottom: 10px;
            display: inline-block;
        }
        body.dark-mode .project-header h2 {
            color: var(--accent-color);
        }

        /* Image Styling */
        .project-image {
            border-radius: 10px;
            border: 5px solid var(--border-color);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        body.dark-mode .project-image {
            filter: brightness(0.9) contrast(0.98);
            border-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 6px 12px rgba(255, 255, 255, 0.08);
        }

        /* Technology Tags */
        .tech-tag {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-right: 10px;
            margin-bottom: 10px;
            transition: background-color 0.3s;
        }
        .tech-tag:hover {
            background-color: var(--secondary-color);
        }

        .tech-title {
            color: var(--text-color);
            font-weight: 600;
            margin-bottom: 15px;
            transition: color 0.3s;
        }
        body.dark-mode .tech-title {
            color: var(--accent-color);
        }

        /* Feature List Styling */
        .feature-list {
            list-style-type: none;
            padding-left: 0;
            text-align: left;
        }
        .feature-list li {
            margin-bottom: 12px;
            font-size: 1.05rem;
            color: var(--text-color);
            transition: color 0.3s;
        }
        /* เพิ่มสำหรับรายการย่อยใน Challenges & Learning */
        .feature-list li.small {
            font-size: 1rem;
        }
        .feature-list li i {
            color: var(--accent-color);
            margin-right: 10px;
            font-size: 1.1em;
        }

        /* Button Styling (รวมปุ่มทั้งหมด) */
        .btn-link-demo {
            background-color: #28a745; /* Green */
            color: white;
        }
        .btn-link-github {
            background-color: #333333; /* Dark Grey */
            color: white;
        }
        .btn-link-demo:hover {
            background-color: #218838;
            color: white;
        }
        .btn-link-github:hover {
            background-color: #555555;
            color: white;
        }
        .btn-back {
            background-color: var(--secondary-color);
            color: white;
            border-radius: 25px;
            padding: 10px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: 0.3s;
            border: none;
        }
        .btn-back:hover {
            background-color: var(--primary-color);
            color: var(--accent-color);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        /* Dark Mode: Override Text Color Utility Classes */
        body.dark-mode .text-muted,
        body.dark-mode .text-secondary {
            color: var(--text-muted-color) !important;
        }
        body.dark-mode h3 {
            color: var(--accent-color) !important; /* ปรับสีหัวข้อรองให้ใช้สี accent */
        }
        
        /* Styling for the Dark Mode Toggle Button */
        #theme-toggle {
            background-color: var(--primary-color);
            color: var(--accent-color);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: background-color var(--transition-speed), color var(--transition-speed), transform 0.2s ease;
        }
        #theme-toggle:hover {
            background-color: var(--secondary-color);
            transform: scale(1.05);
        }
        body.dark-mode #theme-toggle {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }
    </style>
</head>
<body>

    <button id="theme-toggle" class="btn position-fixed top-0 end-0 mt-3 me-3 z-100" style="z-index: 1000; border-radius: 50%; width: 45px; height: 45px; padding: 0; font-size: 1.2rem;">
        <i class="fas fa-sun" id="theme-icon"></i>
    </button>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="project-detail-card">

                    <div class="project-header text-center mb-5">
                        <h2 class="display-5">Portfolio Website 🌐</h2>
                        <p class="lead text-muted mt-2">เว็บไซต์แสดงผลงานส่วนตัว | Self-Promotion & Contact Platform</p>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-md-7 mb-4 mb-md-0">
                            <img src="Portfolio.png" class="img-fluid project-image" alt="ภาพหน้าจอ Portfolio Website">
                        </div>
                        <div class="col-md-5">
                            <h4 class="tech-title"><i class="fas fa-wrench me-2"></i> เทคโนโลยีที่ใช้</h4>
                            <div class="mb-4">
                                <span class="tech-tag">HTML5</span>
                                <span class="tech-tag">CSS3</span>
                                <span class="tech-tag">Bootstrap 5</span>
                                <span class="tech-tag">PHP (สำหรับฟอร์มติดต่อ)</span>
                                <span class="tech-tag">Responsive Design</span>
                                <span class="tech-tag">Vanilla JavaScript</span> </div>

                            <h4 class="tech-title"><i class="fas fa-lightbulb me-2"></i> วัตถุประสงค์</h4>
                            <p class="text-secondary">
                                เว็บไซต์นี้ถูกสร้างขึ้นเพื่อเป็นศูนย์รวมข้อมูลส่วนตัว, ทักษะ, และผลงานทั้งหมด เพื่อนำเสนอความสามารถและติดต่อกับผู้ที่สนใจจ้างงานหรือร่วมงานได้อย่างมืออาชีพ **โดยเน้นที่การออกแบบ UI/UX ที่ทันสมัยและรองรับการใช้งานทุกอุปกรณ์**
                            </p>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-12">
                            <h3 class="text-center mb-4" style="color: var(--primary-color); font-weight: 600;"><i class="fas fa-star me-2"></i> ส่วนประกอบหลักของเว็บไซต์</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="feature-list">
                                        <li><i class="fas fa-user-tie"></i> **ส่วนแนะนำตัว:** ข้อมูลส่วนบุคคลและประสบการณ์</li>
                                        <li><i class="fas fa-graduation-cap"></i> **ส่วนการศึกษา:** ประวัติการศึกษาที่เกี่ยวข้อง</li>
                                        <li><i class="fas fa-code"></i> **ส่วนทักษะ:** แสดงทักษะด้านภาษาและเครื่องมือที่เชี่ยวชาญ (พร้อมแถบ Progress Bar)</li> </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="feature-list">
                                        <li><i class="fas fa-project-diagram"></i> **ส่วนผลงาน:** แสดง Project ที่เคยทำ (ลิงก์ไปยังหน้านี้)</li>
                                        <li><i class="fas fa-mobile-alt"></i> **Responsive Design:** รองรับการแสดงผลทุกอุปกรณ์ (Mobile First Approach)</li> <li><i class="fas fa-paper-plane"></i> **แบบฟอร์มติดต่อ:** ใช้ PHP ในการประมวลผลการส่งอีเมล (Mailer)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row mb-5">
                        <div class="col-md-6">
                            <h3 class="tech-title">🚧 ความท้าทายและการแก้ไข</h3>
                            <ul class="feature-list">
                                <li class="small"><i class="fas fa-magic"></i> **Dark Mode Implementation:** จัดการการสลับธีมโดยใช้ **CSS Variables** เพื่อให้ง่ายต่อการดูแลและสลับสีอย่างรวดเร็ว (ไม่ต้องโหลด stylesheet ใหม่)</li>
                                <li class="small"><i class="fas fa-check-double"></i> **Form Validation:** ตรวจสอบความถูกต้องของข้อมูล (Input Validation) ในฟอร์มติดต่อทั้งฝั่ง **Client-Side (JS)** และ **Server-Side (PHP)** เพื่อป้องกันการส่งข้อมูลที่ว่างเปล่า</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3 class="tech-title">📚 สิ่งที่ได้เรียนรู้เพิ่มเติม</h3>
                            <ul class="feature-list">
                                <li class="small"><i class="fas fa-palette"></i> การเลือกใช้ **Color Palette** และ **Typography (Prompt)** ที่เหมาะสมกับ Mood & Tone ของการนำเสนอบุคลิก</li>
                                <li class="small"><i class="fas fa-server"></i> การตั้งค่าพื้นฐานของ **Mailer Function** ใน PHP เพื่อให้สามารถส่งอีเมลจาก Web Server ได้อย่างถูกต้อง</li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center mt-5 d-flex justify-content-center gap-3">
                        
                        <a href="YOUR_LIVE_DEMO_URL" target="_blank" class="btn btn-lg btn-link-demo" style="border-radius: 25px; font-weight: 600;">
                            <i class="fas fa-globe"></i> ดู Live Demo
                        </a>

                        <a href="YOUR_GITHUB_URL" target="_blank" class="btn btn-lg btn-link-github" style="border-radius: 25px; font-weight: 600;">
                            <i class="fab fa-github"></i> Source Code
                        </a>

                        <a href="index.php#projects" class="btn btn-back btn-lg">
                            <i class="fas fa-arrow-left"></i> กลับสู่ Portfolio
                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // --- JavaScript สำหรับ Dark Mode (ปรับปรุงเพื่อให้สลับปุ่มได้) ---
        document.addEventListener('DOMContentLoaded', function() {
            const body = document.body;
            const themeToggle = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');
            const savedTheme = localStorage.getItem('theme');

            // 1. ฟังก์ชันสลับธีม
            function toggleTheme(isDark) {
                if (isDark) {
                    body.classList.add('dark-mode');
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                    localStorage.setItem('theme', 'dark');
                } else {
                    body.classList.remove('dark-mode');
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                    localStorage.setItem('theme', 'light');
                }
            }

            // 2. ใช้ธีมที่บันทึกไว้
            if (savedTheme === 'dark') {
                toggleTheme(true);
            } else {
                toggleTheme(false); 
            }

            // 3. เพิ่ม Event Listener ให้ปุ่ม
            if (themeToggle) {
                themeToggle.addEventListener('click', function() {
                    const isDark = body.classList.contains('dark-mode');
                    toggleTheme(!isDark); // สลับเป็นตรงข้าม
                });
            }
        });
    </script>
</body>
</html>