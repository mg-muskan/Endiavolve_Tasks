 <!-- HEADER -->


<!-- Navbar -->
<header>
    <nav class="navigation jibran-top-nav fixed-top" id="navbar">
        <img src="https://endiavolve.com/img/logo/LOGO2.png" alt="logo">
        <ul class="menu" id="menu">
            <li class="<?php if ($page == 'home') { echo 'active';}  ?>"><a href="index.php" class="active">Home</a></li>
            <li class="<?php if ($page == 'carriculam') { echo 'active';}  ?>"><a href="carriculam.php">Curriculum</a></li>
            <li class="<?php if ($page == 'career') { echo 'active';}  ?>"><a href="career.php">Career</a></li>
            <li class="<?php if ($page == 'suggetion') { echo 'active';}  ?>"><a href="suggetion.php">Suggestion</a></li>
            <li class="<?php if ($page == 'about') { echo 'active';}  ?>"><a href="aboutus.php">About Us</a></li>
            <li class="<?php if ($page == 'contact') { echo 'active';}  ?>"><a href="contactUs.php">Contact Us</a></li>
        </ul>
        <div class="login-register">
            <a href=""><i class="fa-solid fa-user"></i>Login</a>
            <a href="">Register</a>
            <div class="bars" id="bars">
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


<script>
    const openbtn = document.getElementById('openSidebarMenu');
    const navI = document.getElementById('menu');
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