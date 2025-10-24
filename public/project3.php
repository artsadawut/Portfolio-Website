<?php
// หน้าแสดงรายละเอียดผลงาน CapCut Projects
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CapCut Projects - รายละเอียดผลงาน</title>

  <!-- Bootstrap & Font -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Prompt', sans-serif;
      background-color: #f8f9fa;
      padding-top: 80px;
    }
    .btn-back {
      background-color: #1e3c72;
      color: white;
      border-radius: 25px;
      transition: 0.3s;
    }
    .btn-back:hover {
      background-color: #2a5298;
      color: #ffd700;
    }
  </style>
</head>
<body>
  <div class="container text-center">
    <h2 class="fw-bold text-primary mb-4">CapCut Projects</h2>
    <img src="capcut.jpg" class="img-fluid rounded shadow mb-4" style="max-width: 800px;">
    <p class="lead text-muted">
      โปรเจกต์ตัดต่อวิดีโอด้วย CapCut สำหรับโปรโมตคอนเทนต์และผลงานในรูปแบบสร้างสรรค์<br>
      ใช้เทคนิคการซิงค์เสียง, เอฟเฟกต์ภาพเคลื่อนไหว และการจัดเฟรมวิดีโอ
    </p>
    <a href="index.php#projects" class="btn btn-back mt-4">⬅ กลับสู่หน้า Portfolio</a>
  </div>
</body>
</html>
