 <!-- HEADER -->


<!-- Navbar -->
<header id="header-navbar">
    <nav class="jibran-top-nav fixed-top" id="navbar-nav">
        <a href="index.php" class="navbar-logo"><img src="https://endiavolve.com/img/logo/LOGO2.png" alt="logo"></a>
        <ul class="navbar-menu" id="nav-menu">
            <li class="<?php if ($page == 'home') { echo 'active';}  ?>"><a href="index.php" class="active">Home</a></li>
            <li class="<?php if ($page == 'carriculam') { echo 'active';}  ?>"><a href="carriculam.php">Curriculum</a></li>
            <li class="<?php if ($page == 'career') { echo 'active';}  ?>"><a href="career.php">Career</a></li>
            <li class="<?php if ($page == 'suggetion') { echo 'active';}  ?>"><a href="suggetion.php">Suggestion</a></li>
            <li class="<?php if ($page == 'about') { echo 'active';}  ?>"><a href="aboutus.php">About Us</a></li>
            <li class="<?php if ($page == 'contact') { echo 'active';}  ?>"><a href="contactUs.php">Contact Us</a></li>
        </ul>
        <div class="navbar-login-register">
            <a href=""><i class="fa-solid fa-user"></i>Login</a>
            <a href="">Register</a>
            <div class="navbar-bars" id="bars">
                <input type="checkbox" id="openSidebarMenu">
                <label for="openSidebarMenu" class="sidebarIconToggle">
                    <div class="spinner top"></div>
                    <div class="spinner middle"></div>
                    <div class="spinner bottom"></div>
                </label>
            </div>
        </div>
    </nav>
</header>
<!-- End Navbar -->


<script>
    const openbtn = document.getElementById('openSidebarMenu');
    const navI = document.getElementById('nav-menu');
    openbtn.addEventListener('click', () => {
        if(openbtn.checked) {
            setTimeout(function() {
                navI.classList.add('active');
            }, 200);
        }
        else {
            navI.classList.remove('active');
        }
        
    });
</script>
