<?php
// หน้าแสดงรายละเอียดผลงาน Ragna Shop
// ให้เปลี่ยนชื่อไฟล์นี้เป็น project1.php (หรือชื่อที่คุณใช้)
?>
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragna Shop - รายละเอียดผลงาน Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* ================================================= */
        /* === ส่วนที่ 1: ตัวแปรสีและ Dark Mode Variables === */
        /* ================================================= */
        :root {
            /* สีหลัก (ไม่เปลี่ยน) */
            --primary-color: #1e3c72;
            --secondary-color: #2a5298;
            --accent-color: #ffd700;
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
            /* ใช้ตัวแปร */
            background-color: var(--bg-light);
            color: var(--text-color);
            padding-top: 60px;
            min-height: 100vh;
            transition: background-color var(--transition-speed), color var(--transition-speed);
        }

        /* Card/Section Styling */
        .project-detail-card {
            /* ใช้ตัวแปร */
            background-color: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-top: 30px;
            transition: background-color var(--transition-speed), box-shadow var(--transition-speed);
        }
        
        /* Dark Mode: แก้ไขเงา Card */
        body.dark-mode .project-detail-card {
            box-shadow: 0 10px 20px rgba(255, 255, 255, 0.05);
        }

        /* Header Styling */
        .project-header h2 {
            /* ใช้ตัวแปร */
            color: var(--primary-color);
            font-weight: 700;
            border-bottom: 3px solid var(--accent-color);
            padding-bottom: 10px;
            display: inline-block;
        }

        /* Dark Mode: Header สีอ่อนลง */
        body.dark-mode .project-header h2 {
            color: var(--accent-color);
        }


        /* Image Styling */
        .project-image {
            border-radius: 10px;
            /* ใช้ตัวแปร */
            border: 5px solid var(--border-color);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        /* Dark Mode: ปรับความสว่างรูปภาพ */
        body.dark-mode .project-image {
            filter: brightness(0.85) contrast(0.95);
            border-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.05);
        }

        /* Technology Tags */
        .tech-tag {
            background-color: var(--secondary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            /* ลบ margin-right และ margin-bottom ออกเนื่องจากจะใช้ gap ของ d-flex แทน */
            /* margin-right: 10px; */ 
            /* margin-bottom: 10px; */ 
            transition: background-color 0.3s;
        }

        .tech-tag:hover {
            background-color: var(--primary-color);
        }

        .tech-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
            transition: color 0.3s;
        }
        
        /* Dark Mode: Tech Title สีอ่อนลง */
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
            margin-bottom: 10px;
            font-size: 1.1rem;
            /* ใช้ตัวแปร */
            color: var(--text-color);
            transition: color 0.3s;
        }
        /* เพิ่มสำหรับรายการย่อยใน Challenges & Learning */
        .feature-list li.small {
            font-size: 1rem; /* ปรับขนาดฟอนต์ให้เล็กลงเล็กน้อย */
        }


        .feature-list li i {
            color: var(--accent-color);
            margin-right: 10px;
        }

        /* Back Button Styling */
        .btn-back {
            background-color: var(--primary-color);
            color: white;
            border-radius: 25px;
            padding: 10px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: 0.3s;
            border: none;
        }

        .btn-back:hover {
            background-color: var(--secondary-color);
            color: var(--accent-color);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Dark Mode: ปุ่ม Back to Top (จำเป็นต้องมีเพื่อให้ฟังก์ชัน JS ทำงานได้) */
        #back-to-top {
            display: none;
        }

        /* Dark Mode: Override Text Color Utility Classes */
        body.dark-mode .text-muted {
            color: var(--text-muted-color) !important;
        }
        body.dark-mode .text-secondary {
            color: var(--text-muted-color) !important;
        }
        body.dark-mode h3 {
            color: var(--text-color) !important; /* ให้หัวข้อเป็นสีข้อความหลัก */
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
        body.dark-mode #theme-toggle:hover {
            background-color: lighten(var(--accent-color), 10%); /* อาจจะต้องปรับค่านี้ถ้าใช้ Sass/Less */
            transform: scale(1.05);
        }
        
        /* Responsive adjustment for image */
        @media (max-width: 768px) {
            .project-detail-card {
                padding: 20px;
            }
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
                        <h2 class="display-5">Ragna Shop 🛍️</h2>
                        <p class="lead text-muted mt-2">เว็บไซต์ขายไอเท็มเกม Ragnarok | E-commerce Project</p>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-md-7 mb-4 mb-md-0">
                            <img src="gameitem.jpg" class="img-fluid project-image" alt="ภาพหน้าจอ Ragna Shop">
                        </div>
                        <div class="col-md-5">
                            <h4 class="tech-title">🛠️ เทคโนโลยีที่ใช้</h4>
                            <div class="mb-4 d-flex flex-wrap gap-2">
                                <span class="tech-tag">PHP</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">Bootstrap 5</span>
                                <span class="tech-tag">HTML5/CSS3</span>
                            </div>

                            <h4 class="tech-title">💡 แนวคิดโครงการ</h4>
                            <p class="text-secondary">
                                พัฒนาขึ้นเพื่อจำลองระบบร้านค้าออนไลน์ขนาดเล็ก (E-commerce) ที่เน้นการทำงานของระบบ Backend อย่างครบวงจร โดยเฉพาะการจัดการสินค้าและการประมวลผลคำสั่งซื้อ
                            </p>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-12">
                            <h3 class="text-center mb-4" style="color: var(--primary-color); font-weight: 600;">🌟 ฟีเจอร์หลักของระบบ</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="feature-list">
                                        <li><i class="fas fa-user-circle"></i> ระบบจัดการสมาชิก (ลงทะเบียน/เข้าสู่ระบบ/แก้ไขข้อมูล)</li>
                                        <li><i class="fas fa-shopping-cart"></i> ระบบตะกร้าสินค้าและการจัดการคำสั่งซื้อ</li>
                                        <li><i class="fas fa-money-check-alt"></i> ระบบแจ้งชำระเงิน พร้อมอัพโหลดสลิป</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="feature-list">
                                        <li><i class="fas fa-cogs"></i> ระบบแอดมิน: จัดการสินค้า (เพิ่ม/แก้ไข/ลบ)</li>
                                        <li><i class="fas fa-chart-line"></i> ระบบแอดมิน: ดูสถานะคำสั่งซื้อทั้งหมด</li>
                                        <li><i class="fas fa-lock"></i> การเข้ารหัสรหัสผ่าน (Password Hashing) เพื่อความปลอดภัย</li>
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
                                <li class="small"><i class="fas fa-exclamation-triangle"></i> **การจัดการสต็อก:** แก้ไขปัญหาการลดสต็อกที่ไม่ถูกต้องเมื่อเกิดการซื้อพร้อมกัน โดยใช้ **Transaction** ใน MySQL เพื่อรับประกันความสมบูรณ์ของข้อมูล</li>
                                <li class="small"><i class="fas fa-shield-alt"></i> **ความปลอดภัย:** ป้องกันการโจมตี SQL Injection โดยใช้ **Prepared Statements** ใน PHP แทนการต่อ String โดยตรง</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3 class="tech-title">📚 สิ่งที่ได้เรียนรู้เพิ่มเติม</h3>
                            <ul class="feature-list">
                                <li class="small"><i class="fas fa-database"></i> การออกแบบ **Database Schema** สำหรับ E-commerce (Users, Products, Orders, Order_Details)</li>
                                <li class="small"><i class="fas fa-code-branch"></i> การจัดระเบียบโค้ด PHP (Separation of Concerns) ให้ง่ายต่อการดูแลรักษาในโปรเจกต์ขนาดเล็ก</li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center mt-5 d-flex justify-content-center gap-3">
                        
                        <a href="#" target="_blank" class="btn btn-success btn-lg" style="border-radius: 25px; font-weight: 600;">
                            <i class="fas fa-globe"></i> ดู Live Demo
                        </a>

                        <a href="https://github.com/Asadawut21/GGWP.git" target="_blank" class="btn btn-dark btn-lg" style="border-radius: 25px; font-weight: 600;">
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
        // --- JavaScript สำหรับ Dark Mode (ปรับปรุง) ---
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
                // กำหนดสถานะเริ่มต้นของ Icon หากไม่ได้มีการบันทึกไว้เป็น dark (เป็น light)
                toggleTheme(false); 
            }

            // 3. เพิ่ม Event Listener ให้ปุ่ม
            if (themeToggle) {
                themeToggle.addEventListener('click', function() {
                    // ตรวจสอบสถานะปัจจุบันของ body
                    const isDark = body.classList.contains('dark-mode');
                    toggleTheme(!isDark); // สลับเป็นตรงข้าม
                });
            }
        });
        
    </script>
</body>

</html>