<?php
// เริ่ม session หรือ config ต่าง ๆ ได้ที่นี่
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NINE STYLE | แฟชั่นเสื้อผ้าล่าสุด</title>
  <!-- Google Fonts & Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display
  :wght@400;500;600;700&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  
  <!-- Base CSS -->
  <link rel="stylesheet" href="css/base.css">
  <!-- Component CSS -->
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/navigation.css">
  <link rel="stylesheet" href="css/hero.css">
  <link rel="stylesheet" href="css/featured-products.css">
  <link rel="stylesheet" href="css/product-card.css">
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="css/testimonials.css">
  <link rel="stylesheet" href="css/newsletter.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="page_css/page.css">
  <link rel="stylesheet" href="css/expand_search.css">
  
 

</head>
<body>
  <?php include __DIR__ . '/includes/header.php'; ?>
  <?php include __DIR__ . '/includes/hero.php'; ?>
  <?php include __DIR__ . '/includes/featured-products.php'; ?>
  <?php include __DIR__ . '/includes/about.php'; ?>
  <?php include __DIR__ . '/includes/testimonials.php'; ?>
  <?php include __DIR__ . '/includes/newsletter.php'; ?>
  <?php include __DIR__ . '/includes/footer.php'; ?>
  
  <script src="่js/script.js"></script>
  <script src="js/expand_search.js"></script>

</body>
</html>