<?php
// หน้าแสดงรายละเอียดผลงาน CapCut Projects
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CapCut Projects - รายละเอียดผลงาน Creative</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* ================================================= */
        /* === ส่วนที่ 1: ตัวแปรสีและ Dark Mode Variables === */
        /* ================================================= */
        :root {
            /* สีหลัก (อิงตามหน้าหลัก) */
            --primary-color: #1e3c72; 
            --secondary-color: #2a5298; 
            --accent-color: #ffd700; 
            --transition-speed: 0.3s;

            /* Light Mode (Default) */
            --bg-light: #f8f9fa; 
            --card-bg: #ffffff; 
            --text-color: #333333;
            --text-muted-color: #6c757d;
            --border-color: rgba(0, 0, 0, 0.1);

            /* สีเฉพาะของ CapCut Project */
            --project-primary: #00c7b4; /* เขียวอมฟ้า CapCut */
            --project-secondary: #343a40; /* เทาเข้ม */
            --project-accent: #ff5722; /* ส้ม */
        }

        /* ------------------ Dark Mode ------------------ */
        body.dark-mode {
            --bg-light: #121212;
            --card-bg: #1a1a1a;
            --text-color: #f0f0f0;
            --text-muted-color: #a0a0a0;
            --border-color: rgba(255, 255, 255, 0.1);
            
            /* ปรับสีเฉพาะของ CapCut ใน Dark Mode */
            --project-secondary: #f0f0f0; /* ให้สีเทาเข้มกลายเป็นสีอ่อน */
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
            border-radius: 18px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
            margin-top: 30px;
            border-left: 5px solid var(--project-primary); 
            transition: background-color var(--transition-speed), box-shadow var(--transition-speed), border-color var(--transition-speed);
        }
        body.dark-mode .project-detail-card {
            box-shadow: 0 15px 30px rgba(255, 255, 255, 0.05);
        }

        /* Header Styling */
        .project-header h2 {
            color: var(--project-primary);
            font-weight: 700;
            border-bottom: 3px solid var(--project-accent);
            padding-bottom: 10px;
            display: inline-block;
        }

        /* Image/Video Placeholder Styling */
        .project-image {
            border-radius: 12px;
            border: 5px solid var(--project-primary);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        
        body.dark-mode .project-image {
            filter: brightness(0.9);
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);
        }

        /* Software Tag */
        .software-tag {
            background-color: var(--project-accent);
            color: white;
            padding: 6px 18px;
            border-radius: 25px;
            font-size: 1rem;
            font-weight: 600;
            margin-right: 10px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .tech-title {
            color: var(--project-secondary);
            font-weight: 700;
            margin-bottom: 15px;
            transition: color 0.3s;
        }

        /* Technique List Styling */
        .technique-list {
            list-style-type: none;
            padding-left: 0;
            text-align: left;
        }
        .technique-list li {
            margin-bottom: 10px;
            font-size: 1.05rem;
            color: var(--text-color);
            transition: color 0.3s;
        }
        /* เพิ่มสำหรับรายการย่อยใน Challenges & Learning */
        .technique-list li.small {
            font-size: 1rem;
        }
        .technique-list li i {
            color: var(--project-accent);
            margin-right: 10px;
            font-size: 1.1em;
        }

        /* Button Styling (รวมปุ่มทั้งหมด) */
        .btn-link-watch {
            background-color: var(--project-accent); /* ส้ม */
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-link-watch:hover {
            background-color: #d9481a;
            color: white;
        }
        .btn-link-github {
            background-color: var(--project-secondary); /* เทาเข้ม/อ่อนตาม Dark Mode */
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        body.dark-mode .btn-link-github {
            background-color: var(--text-muted-color); /* ใช้สีเทาอ่อนใน Dark Mode */
            color: var(--bg-light);
        }
        .btn-link-github:hover {
            background-color: #555555;
            color: white;
        }
        body.dark-mode .btn-link-github:hover {
            background-color: #777777;
        }
        
        .btn-back {
            background-color: var(--project-primary);
            color: white;
            border-radius: 30px;
            padding: 12px 35px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: 0.3s;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-back:hover {
            background-color: #00a092;
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Dark Mode: Override Text Color Utility Classes */
        body.dark-mode .text-muted,
        body.dark-mode .text-secondary {
            color: var(--text-muted-color) !important;
        }
        body.dark-mode h3 {
             color: var(--project-secondary) !important;
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
                        <h2 class="display-5">CapCut Projects 🎬</h2>
                        <p class="lead text-muted mt-2">ผลงานตัดต่อวิดีโอสั้นเพื่อโซเชียลมีเดีย | Creative Video Editing</p>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-md-7 mb-4 mb-md-0">
                            <img src="capcut.jpg" class="img-fluid project-image" alt="ภาพหน้าจอ CapCut">
                            <p class="text-center mt-2 text-muted fst-italic">
                                **หมายเหตุ:** ภาพด้านบนเป็นภาพตัวอย่าง/หน้าจอหลักของวิดีโอ
                            </p>
                        </div>
                        <div class="col-md-5">
                            <h4 class="tech-title"><i class="fas fa-magic me-2"></i> ซอฟต์แวร์ที่ใช้</h4>
                            <div class="mb-4">
                                <span class="software-tag">CapCut</span>
                                <span class="software-tag">Mobile/PC</span>
                            </div>
                            
                            <h4 class="tech-title"><i class="fas fa-puzzle-piece me-2"></i> ลักษณะงาน</h4>
                            <p class="text-secondary">
                                โปรเจกต์นี้เป็นการนำเสนอทักษะการเล่าเรื่องด้วยภาพและเสียง ผ่านวิดีโอสั้นที่กระชับและดึงดูดสายตา เหมาะสำหรับแพลตฟอร์มเช่น TikTok, Reels, หรือ Shorts.
                            </p>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-12">
                            <h3 class="text-center mb-4" style="color: var(--secondary-color); font-weight: 600;"><i class="fas fa-toolbox me-2"></i> เทคนิคที่เน้นในโปรเจกต์</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="technique-list">
                                        <li><i class="fas fa-microphone"></i> **Sound Sync:** การตัดต่อให้ภาพตรงจังหวะดนตรี/เสียงพูด</li>
                                        <li><i class="fas fa-film"></i> **Cinematic Transitions:** การเปลี่ยนฉากที่ลื่นไหลและน่าสนใจ</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="technique-list">
                                        <li><i class="fas fa-layer-group"></i> **Layering & Keyframes:** การใช้ภาพซ้อนและเอฟเฟกต์เคลื่อนไหว</li>
                                        <li><i class="fas fa-video"></i> **Color Grading:** การปรับสีและแสงให้ได้ Mood & Tone ที่ต้องการ</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="my-5">

                    <div class="row mb-5">
                        <div class="col-md-6">
                            <h3 class="tech-title">🚧 ความท้าทายและการแก้ไข</h3>
                            <ul class="technique-list">
                                <li class="small"><i class="fas fa-clock"></i> **Time Constraint (ความกระชับ):** ความท้าทายในการเล่าเรื่องให้จบภายใน 7-15 วินาที โดยไม่ขาดเนื้อหาหลัก</li>
                                <li class="small"><i class="fas fa-eye"></i> **Hook Strategy:** การเลือกฉากและเทคนิคเปิดเรื่องที่ดึงดูดผู้ชมให้หยุดดูภายใน 3 วินาทีแรก</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3 class="tech-title">📚 สิ่งที่ได้เรียนรู้เพิ่มเติม</h3>
                            <ul class="technique-list">
                                <li class="small"><i class="fas fa-chart-bar"></i> **Engagement Metrics:** เข้าใจรูปแบบวิดีโอที่ได้รับความนิยมบนแพลตฟอร์ม (TikTok/Reels) และการเพิ่ม Retention Rate</li>
                                <li class="small"><i class="fas fa-pen-nib"></i> **Storyboarding:** การวางแผนลำดับภาพและเสียงก่อนการตัดต่อจริงเพื่อประหยัดเวลาและสร้าง Flow ที่ดี</li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center mt-5 d-flex justify-content-center gap-3">
                        
                        <a href="YOUR_VIDEO_LINK_URL" target="_blank" class="btn btn-lg btn-link-watch" style="border-radius: 30px; font-weight: 600;">
                            <i class="fas fa-play-circle"></i> ดูวิดีโอ (Live)
                        </a>

                        <a href="YOUR_ASSET_OR_FOLDER_LINK" target="_blank" class="btn btn-lg btn-link-github" style="border-radius: 30px; font-weight: 600;">
                            <i class="fas fa-download"></i> ไฟล์ Assets/Project
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
        // --- JavaScript สำหรับ Dark Mode (ปรับปรุงเพื่อให้สลับปุ่มและไอคอนได้) ---
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