<?php 
$name = "pika wulandari";
?>

<header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>
    <div class="profile-img">
      <img src="landing-page/img/my-profile-img.jpeg" alt="" class="img-fluid rounded-circle">
    </div>
    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <h1 class="sitename"><?=$name?></h1>
    </a>
    <div class="social-links text-center">
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
        <li class="d-flex gap-0.3"><a href="/login"><button class="btn btn-outline-primary">login</button></a><a href="/register"><button class="btn btn-primary">register</button></a></li>
      </ul>
    </nav>

  </header><?php /**PATH E:\LARAVEL\laravel-app\resources\views/layout/landing-page/sidebar.blade.php ENDPATH**/ ?>