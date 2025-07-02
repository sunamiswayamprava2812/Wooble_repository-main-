

<?php $logIn = "../L_S_Page"; ?>
<?php $profile = "../profile/profile.php"?>

<nav class="navbar">
      <div class="navigation_bar">
        <a href="#">Logo</a>
      </div>

      <ul class="navbar-nav">
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#works">Works</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="<?php echo $profile;?>">Profile</a></li>
        <a href="<?php echo $logIn;?>"><button class="btn">Login</button></a>

      </ul>
      

      <div class="hamburger">
        <i class="fas fa-bars"></i>
      </div>
    </nav>



    <!-- hamburger active -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const hamburger = document.querySelector(".hamburger");
        const navbarNav = document.querySelector(".navbar-nav");

        if (hamburger && navbarNav) {
          hamburger.addEventListener("click", function () {
            navbarNav.classList.toggle("active");

            hamburger.classList.toggle("active");
          });
        } else {
          console.error("Hamburger or navbar-nav element not found!");
        }
      });
    </script>