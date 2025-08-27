<?php 
  $activePage = 'home'; // set active menu
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Covering Up Digital Footprint</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <a class="visually-hidden-focusable" href="#maincontent">Skip to main content</a>

  <?php include 'header.php'; ?> <!-- 🔹 this pulls in the navbar -->

  <main id="maincontent" class="container mt-4">
    <div class="text-center">
      <h1 class="mb-3">Covering Up Digital Footprint</h1>
      <p class="lead">This tool helps you understand and reduce your digital footprint.</p>
      <button class="btn btn-outline-dark me-2" onclick="toggleContrast()">Toggle High Contrast</button>
      <button class="btn btn-outline-dark" onclick="toggleTextSize()">Increase Text Size</button>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="app.js"></script>
</body>
</html>
