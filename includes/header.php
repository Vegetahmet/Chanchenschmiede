<!DOCTYPE html>
<html lang="de">
   <head>
      <!-- Grundlegende Meta-Tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Website-Metas -->
      <title><?php echo isset($page_title) ? $page_title : 'Chancenschmiede'; ?></title>
      <meta name="keywords" content="<?php echo isset($page_keywords) ? $page_keywords : 'Nachhilfe, Bildung, Förderung'; ?>">
      <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Chancen für eine bessere Zukunft.'; ?>">
      <meta name="author" content="">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- Stil CSS -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Favicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- Owl Stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!-- AOS Animation Library -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   </head>
   <body>
      <!-- Loader -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>

      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div>
                  <a href="index.php"><img src="images/logo.png" alt="Logo" class="logo-img"></a>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Navigation umschalten">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto w-100">
                     <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="index.php">Startseite</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="index.php#aboutus">Über Uns</a>
                     </li>
                     <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == 'bildungspate.php') ? 'active' : ''; ?>">
                        <a class="nav-link" href="bildungspate.php">Bildungspate werden</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Kontakt</a>
                     </li>
                     <li class="nav-item ml-auto">
                        <a class="nav-link btn-success-custom btn-small" href="contact.php">Probestunde</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>