



<!-- Navbar -->
<nav class="navbar navbar-expand-lg user-panel-nav-head fixed-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler user-panel-nav-toggle" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>


    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand user-panel-navbar-brand mt-2 mt-lg-0" href="index.php">
        <img src="../img/logo/LOGO2.png" height="45" alt="Endiavolve Logo" loading="lazy" />
      </a>

      <form class="d-flex user-panel-search-box input-group w-auto">
        <input type="search" class="form-control" placeholder="Search" aria-label="Search"
          aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
          <i class="fas fa-search"></i>
        </span>
      </form>
      <!-- Left links -->
      <ul class="navbar-nav user-panel-nav-heading mb-2 mb-lg-0">
        <li class="<?php if ($page == 'home') { echo 'active';}  ?> nav-item">
          <a class="nav-link" href="user-panel-home.php">Home</a>
        </li>
        <li class="<?php if ($page == 'suggetion') { echo 'active';}  ?> nav-item">
          <a class="nav-link" href="user_panel-suggetion.php">Suggestion</a>
        </li>
        <li class="<?php if ($page == 'career') { echo 'active';}  ?> nav-item">
          <a class="nav-link" href="user-panel-career.php">Career</a>
        </li>
        <li class="<?php if ($page == 'contactus') { echo 'active';}  ?> nav-item">
          <a class="nav-link" href="user-panel-contactus.php">Contact Us</a>
        </li>
        <li class="<?php if ($page == 'dashboard') { echo 'active';}  ?> nav-item">
          <a class="nav-link" href="user-panel-dashboard.php">Dashboard</a>
        </li>
        <li class="<?php if ($page == 'playlist') { echo 'active';}  ?> nav-item">
          <a class="nav-link" href="user-panel-playlist.php">Playlist</a>
        </li>
        <li class="<?php if ($page == 'analytics') { echo 'active';}  ?> nav-item">
          <a class="nav-link" href="user-panel-analytics.php">Analytics</a>
        </li>
        <li class="<?php if ($page == 'customization') { echo 'active';}  ?> nav-item">
          <a class="nav-link" href="user-panel-customization.php">Customization</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center user-panel-right-content">
      <!-- Icon -->
      <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownvedioLink" role="button"
          data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-video"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdownvedioLink">
          <li>
            <a class="dropdown-item" href="#">Upload video</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Go Live</a>
          </li>
          
        </ul>

      <!-- swith Button -->
      <a href=""><input class="form-check-input " type="checkbox" id="flexSwitchCheckChecked"
          data-offstyle="outline-light" checked></a>
      <!-- Notifications -->
      <div class="dropdown">
        <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button"
          data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">99+</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div>
      <!-- Avatar -->
      <div class="dropdown user-panel-avatar-box">
        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar"
          role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <img src="../img/team/m41.jpg" class="rounded-circle" height="30" width="30"
            alt="Black and White Portrait of a Man" loading="lazy" />
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
          <li>
            <a class="dropdown-item" href="user-panel-myProfile.php">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
