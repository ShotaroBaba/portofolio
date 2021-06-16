<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet' href='/css/bootstrap.min.css?v=<?php echo time(); ?>'>
  <link rel='stylesheet' href='/css/page_style.css?==<?php echo time(); ?>'>
  <script src="/script/jquery-3.6.0.min.js?v=<?php echo time(); ?>"></script>
  <script src="/script/popper.js?v=<?php echo time(); ?>"></script>
  <script src="/script/bootstrap.bundle.min.js?v=<?php echo time(); ?>"></script>
  <title>Shotaro Baba</title>

<body class="d-flex flex-column min-vh-100 portofolio-body">

<div style='background-image: url("/pics/mount-fuji.jpg");
    background-color: #cccccc;
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;'>

<?php include "/var/www/html/.plugins/header.php";?>
  
<div class="mountain-text">
  <h1>Shotaro Baba</h1>
  <br>
  <h2>Software Developer</h2>
</div>
</div>

<div class="doc-contents"> 
  <span class="white-text">
  I am a computer programmer who is specialized in C, C#, Java, PHP, Python and other programming languages. I have also experience in AWS, Node.js, Vue.js and the rest of state-of-art IT technologies. At the university, I particularly studied programming, such as natural language processing using LDA and image recognition done by Neural Network and Convolutional Neural Network (CNN). Currently, I am working at a Japanese company, and mainly developing website, system and software.
  </span>
</div>

<!-- Footer -->

<?php include "/var/www/html/.plugins/footer.php"; ?>

<!-- Footer -->
</body>
</html>