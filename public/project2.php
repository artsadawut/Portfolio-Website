<?php
// หน้าแสดงรายละเอียดผลงาน Portfolio Website
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
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 30px;
            transition: background-color var(--transition-speed), box-shadow var(--transition-speed);
        }

        /* Dark Mode: แก้ไขเงา Card */
        body.dark-mode .project-detail-card {
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.05);
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
            border: 5px solid var(--border-color); /* ใช้ border-color แทน #dee2e6 */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        /* Dark Mode: ปรับความสว่างรูปภาพ */
        body.dark-mode .project-image {
            /* รูปภาพ Portfolio.png อาจสว่างอยู่แล้ว ให้ลดความสว่างลงเล็กน้อย */
            filter: brightness(0.9) contrast(0.98);
            border-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0 6px 12px rgba(255, 255, 255, 0.08);
        }

        /* Technology Tags */
        .tech-tag {
            display: inline-block;
            /* ใช้ primary-color ตามหน้าหลัก */
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
            background-color: var(--secondary-color); /* ใช้ secondary-color แทน #0056b3 */
        }

        .tech-title {
            /* ใช้ตัวแปร */
            color: var(--text-color);
            font-weight: 600;
            margin-bottom: 15px;
            transition: color 0.3s;
        }

        /* Dark Mode: Tech Title ใช้สี accent-color */
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
            /* ใช้ตัวแปร */
            color: var(--text-color);
            transition: color 0.3s;
        }
        .feature-list li i {
            color: var(--accent-color);
            margin-right: 10px;
            font-size: 1.1em;
        }

        /* Back Button Styling */
        .btn-back {
            /* ใช้ primary-color/secondary-color ตามหน้าหลัก */
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
             /* ปรับสีหัวข้อรองให้ใช้สี accent */
             color: var(--accent-color) !important;
        }

    </style>
</head>
<body>

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
                            </div>

                            <h4 class="tech-title"><i class="fas fa-lightbulb me-2"></i> วัตถุประสงค์</h4>
                            <p class="text-secondary">
                                เว็บไซต์นี้ถูกสร้างขึ้นเพื่อเป็นศูนย์รวมข้อมูลส่วนตัว, ทักษะ, และผลงานทั้งหมด เพื่อนำเสนอความสามารถและติดต่อกับผู้ที่สนใจจ้างงานหรือร่วมงานได้อย่างมืออาชีพ
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
                                        <li><i class="fas fa-code"></i> **ส่วนทักษะ:** แสดงทักษะด้านภาษาและเครื่องมือที่เชี่ยวชาญ</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="feature-list">
                                        <li><i class="fas fa-project-diagram"></i> **ส่วนผลงาน:** แสดง Project ที่เคยทำ (ลิงก์ไปยังหน้านี้)</li>
                                        <li><i class="fas fa-mobile-alt"></i> **Responsive Design:** รองรับการแสดงผลทุกอุปกรณ์</li>
                                        <li><i class="fas fa-paper-plane"></i> **แบบฟอร์มติดต่อ:** ใช้ PHP ในการประมวลผลการส่งอีเมล</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mb-5">
                        <h3 class="tech-title"><i class="fas fa-link me-2"></i> ลิงก์ที่เกี่ยวข้อง</h3>
                        <a href="index.php" class="btn btn-outline-primary me-3" target="_blank">
                            <i class="fas fa-external-link-alt"></i> เข้าชมเว็บไซต์จริง
                        </a>
                        <a href="#" class="btn btn-outline-secondary" target="_blank" disabled>
                            <i class="fab fa-github"></i> Repository (ถ้ามี)
                        </a>
                    </div>

                    <div class="text-center mt-4">
                        <a href="index.php#projects" class="btn btn-back">
                            <i class="fas fa-arrow-left"></i> กลับสู่หน้า Portfolio
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        /* --- JavaScript สำหรับ Dark Mode (คัดลอกจากหน้าหลักมา) --- */
        
        // ตรวจสอบและใช้ธีมที่บันทึกไว้ใน localStorage
        document.addEventListener('DOMContentLoaded', function() {
            const body = document.body;
            const savedTheme = localStorage.getItem('theme');
            
            // ถ้ามีการบันทึก theme เป็น 'dark' ให้เปิด Dark Mode ทันที
            if (savedTheme === 'dark') {
                body.classList.add('dark-mode');
            }
        });
        
    </script>
</body>
</html>