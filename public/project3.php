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
    :root {
      /* สีสำหรับงานวิดีโอ/ครีเอทีฟ: ใช้สีที่สดใสและดึงดูด */
      --primary-color: #00c7b4; /* สีเขียวน้ำทะเล (คล้าย CapCut) */
      --secondary-color: #343a40; /* สีเทาเข้ม */
      --accent-color: #ff5722; /* สีส้มสดใส */
      --text-dark: #343a40;
      --text-light: #6c757d;
    }

    body {
      font-family: 'Prompt', sans-serif;
      background-color: #f0f2f5; /* พื้นหลังสีเทาอ่อนกว่าเดิม */
      padding-top: 60px;
      min-height: 100vh;
    }

    /* Card/Section Styling */
    .project-detail-card {
      background-color: #ffffff;
      border-radius: 18px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      padding: 40px;
      margin-top: 30px;
      border-left: 5px solid var(--primary-color); /* เพิ่มเส้นด้านข้าง */
    }

    /* Header Styling */
    .project-header h2 {
      color: var(--primary-color);
      font-weight: 700;
      border-bottom: 3px solid var(--accent-color);
      padding-bottom: 10px;
      display: inline-block;
    }

    /* Image/Video Placeholder Styling */
    .project-image {
      border-radius: 12px;
      border: 5px solid var(--primary-color);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }
    
    /* Software Tag */
    .software-tag {
      display: inline-block;
      background-color: var(--accent-color);
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
        color: var(--secondary-color);
        font-weight: 700;
        margin-bottom: 15px;
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
      color: var(--text-dark);
    }
    .technique-list li i {
      color: var(--accent-color);
      margin-right: 10px;
      font-size: 1.1em;
    }

    /* Back Button Styling */
    .btn-back {
      background-color: var(--primary-color);
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
    
    /* Watch Video Button */
    .btn-watch {
        background-color: var(--accent-color);
        color: white;
        border-radius: 30px;
        padding: 12px 35px;
        font-size: 1.1rem;
        font-weight: 600;
        transition: 0.3s;
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-watch:hover {
        background-color: #d9481a;
        color: #ffffff;
        transform: translateY(-2px);
    }

  </style>
</head>
<body>

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

          <div class="text-center mb-5">
            <h3 class="tech-title"><i class="fas fa-eye me-2"></i> รับชมผลงาน</h3>
            <a href="#" class="btn btn-watch me-3" target="_blank">
                <i class="fab fa-youtube me-2"></i> ชมวิดีโอ (Live Demo)
            </a>
            </div>

          <div class="text-center mt-4">
            <a href="index.php#projects" class="btn btn-back">
              <i class="fas fa-arrow-left"></i> กลับสู่หน้า Portfolio
            </a>
          </div>

        </div> </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>