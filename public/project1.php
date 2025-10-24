<?php
// หน้าแสดงรายละเอียดผลงาน Ragna Shop
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
    :root {
      --primary-color: #1e3c72; /* สีน้ำเงินเข้ม */
      --secondary-color: #2a5298; /* สีน้ำเงินสว่าง */
      --accent-color: #ffd700; /* สีทอง */
      --text-dark: #343a40;
      --text-light: #6c757d;
    }

    body {
      font-family: 'Prompt', sans-serif;
      background-color: #f8f9fa;
      padding-top: 60px; /* ลด padding-top ลงมาหน่อย */
      min-height: 100vh; /* ให้เต็มหน้าจอ */
    }

    /* Card/Section Styling */
    .project-detail-card {
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
      padding: 30px;
      margin-top: 30px;
    }

    /* Header Styling */
    .project-header h2 {
      color: var(--primary-color);
      font-weight: 700;
      border-bottom: 3px solid var(--accent-color);
      padding-bottom: 10px;
      display: inline-block;
    }

    /* Image Styling */
    .project-image {
      border-radius: 10px;
      border: 5px solid #e9ecef;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Technology Tags */
    .tech-tag {
      display: inline-block;
      background-color: var(--secondary-color);
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
      background-color: var(--primary-color);
    }
    .tech-title {
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 15px;
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
      color: var(--text-dark);
    }
    .feature-list li i {
      color: var(--accent-color); /* ใช้สีทองสำหรับไอคอน */
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
    
    /* Responsive adjustment for image */
    @media (max-width: 768px) {
        .project-detail-card {
            padding: 20px;
        }
    }

  </style>
</head>
<body>

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
              <div class="mb-4">
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

          <div class="text-center mb-5">
            <h3 class="tech-title">🔗 ลิงก์ที่เกี่ยวข้อง</h3>
            <a href="#" class="btn btn-outline-primary me-3" target="_blank" disabled>
                <i class="fas fa-external-link-alt"></i> ดูตัวอย่าง (ถ้ามี)
            </a>
            <a href="#" class="btn btn-outline-secondary" target="_blank">
                <i class="fab fa-github"></i> Repository (ถ้ามี)
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