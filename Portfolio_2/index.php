<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Portfolio</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


</head>

<body>

  <!-- Navbar -->
  <?php include 'components/nav-bar.php'; ?>


  <!-- Section Home -->
  <section class="home_section" id="home">
    <div class="home_content">
      <h3>Hey I am Gerold</h3>
      <h1>Web Developer + UX Designer</h1>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit
        dignissimos delectus, odio quidem similique mollitia error fugiat
        magnam numquam assumenda qui, corporis alias fuga quis? Illo
        perspiciatis expedita reiciendis impedit.
      </p>
      <button type="button" class="btn">Show CV</button>

      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
    </div>
    <div class="home_img">
      <img src="person2.png" alt="Img not found" />
    </div>
  </section>

  <!-- number Section -->
  <section class="number-container">
    <div class="number-item">
      <div class="number">14</div>
      <div class="text">Years of Experience</div>
    </div>
    <div class="number-item">
      <div class="number">50+</div>
      <div class="text">Happy Clients</div>
    </div>
    <div class="number-item">
      <div class="number">1.5K</div>
      <div class="text">Projects Completed</div>
    </div>
    <div class="number-item">
      <div class="number">14</div>
      <div class="text">Awards Won</div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="services-section" id="services">
    <div class="container">
      <h2 class="section-title">My Quality Services</h2>
      <p class="section-description">
        We get your ideas and your wishes in the form of a unique web project
        that enthralls you and your customers.
      </p>

      <div class="services-list">
        <div class="service-item active">
          <div class="service-number">01</div>
          <div class="service-content">
            <h3 class="service-title">Branding Design</h3>
            <p class="service-description">
              I'm not great complex user experience problems to ensure
              simplify focused solutions that connect billions of people
            </p>
          </div>
        </div>

        <div class="service-item">
          <div class="service-number">02</div>
          <div class="service-content">
            <h3 class="service-title">UI/UX Design</h3>
            <p class="service-description">
              I'm not great complex user experience problems to ensure
              simplify focused solutions that connect billions of people
            </p>
          </div>
        </div>

        <div class="service-item">
          <div class="service-number">03</div>
          <div class="service-content">
            <h3 class="service-title">Web Design</h3>
            <p class="service-description">
              I'm not great complex user experience problems to ensure
              simplify focused solutions that connect billions of people
            </p>
          </div>
        </div>

        <div class="service-item">
          <div class="service-number">04</div>
          <div class="service-content">
            <h3 class="service-title">App Design</h3>
            <p class="service-description">
              I'm not great complex user experience problems to ensure
              simplify focused solutions that connect billions of people
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- recent Works -->
  <section class="works-section" id="works">
    <div class="container">
      <h2 class="title">My Recent Works</h2>

      <div class="buttons">
        <button class="button active" data-filter="all">All</button>
        <button class="button" data-filter="apps">Apps</button>
        <button class="button" data-filter="branding">Branding</button>
        <button class="button" data-filter="ui/ux">UI/UX</button>
      </div>

      <div class="works">
        <div class="work-item" data-category="apps branding">
          <img src="pic1.jpg" alt="Project 1 Preview" class="work-image" />
          <div class="work-overlay">
            <h3 class="work-title">Project Title 1</h3>
            <p class="work-category">Apps, Branding</p>
          </div>
        </div>

        <div class="work-item" data-category="branding ui/ux">
          <img src="pic2.jpeg" alt="Project 2 Preview" class="work-image" />
          <div class="work-overlay">
            <h3 class="work-title">Project Title 2</h3>
            <p class="work-category">Branding, UI/UX</p>
          </div>
        </div>

        <div class="work-item" data-category="apps ui/ux">
          <img src="pic3.jpeg" alt="Project 3 Preview" class="work-image" />
          <div class="work-overlay">
            <h3 class="work-title">Project Title 3</h3>
            <p class="work-category">Apps, UI/UX</p>
          </div>
        </div>

        <div class="work-item" data-category="branding">
          <img src="pic4.jpeg" alt="Project 4 Preview" class="work-image" />
          <div class="work-overlay">
            <h3 class="work-title">Project Title 4</h3>
            <p class="work-category">Branding</p>
          </div>
        </div>

        <div class="work-item" data-category="branding">
          <img src="pic5.jpeg" alt="Project 4 Preview" class="work-image" />
          <div class="work-overlay">
            <h3 class="work-title">Project Title 4</h3>
            <p class="work-category">Branding</p>
          </div>
        </div>

        <div class="work-item" data-category="branding">
          <img src="pic6.jpeg" alt="Project 4 Preview" class="work-image" />
          <div class="work-overlay">
            <h3 class="work-title">Project Title 4</h3>
            <p class="work-category">Branding</p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- Experience & Recent Works -->
  <section class="e-w-section" id="experience">
    <div class="experience-section">
      <h2 class="section-title">My Experience</h2>
      <div class="experience">
        <div class="experience-1">
          <h5>Experience-1</h5>
          <h2>Developer</h2>
        </div>
        <div class="experience-2">
          <h5>Experience-2</h5>
          <h2>Developer</h2>
        </div>
        <div class="experience-3">
          <h5>Experience-3</h5>
          <h2>Developer</h2>
        </div>
        <div class="experience-4">
          <h5>Experience-4</h5>
          <h2>Developer</h2>
        </div>
      </div>
    </div>

    <div class="education-section">
      <h2 class="section-title">My Education</h2>
      <div class="education">
        <div class="education-1">
          <h5>Education-1</h5>
          <h2>Developer</h2>
        </div>
        <div class="education-2">
          <h5>Education-2</h5>
          <h2>Developer</h2>
        </div>
        <div class="education-3">
          <h5>Education-3</h5>
          <h2>Developer</h2>
        </div>
        <div class="education-4">
          <h5>Education-4</h5>
          <h2>Developer</h2>
        </div>
      </div>
    </div>
  </section>

  <!-- my skills -->
  <section class="skills-section" id="skills">
    <h2 class="section-title">My Skills</h2>
    <p>
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio nam <br>
      cupiditate aut aspernatur soluta dolorem consequuntur sint possimus.
      Atque quos,
    </p>
    <div class="skills">
      <div class="skills-item">figma</div>
      <div class="skills-item">html</div>
      <div class="skills-item">wordpress</div>
      <div class="skills-item">XD</div>
      <div class="skills-item">React</div>
      <div class="skills-item">javascript</div>
    </div>
  </section>

<!--footer-->
<!--  --><?php //include '../tailwind_Css/components/footer.php'; ?>






  <!-- javascript -->


  <!-- buttons work -->
  <script>
    const Buttons = document.querySelectorAll(".button");
    const workItems = document.querySelectorAll(".work-item");

    Buttons.forEach((button) => {
      button.addEventListener("click", () => {
        Buttons.forEach((btn) => btn.classList.remove("active"));

        button.classList.add("active");

        const filterValue = button.getAttribute("data-filter");

        workItems.forEach((item) => {
          const categories = item.getAttribute("data-category");

          if (
            filterValue === "all" ||
            (categories && categories.includes(filterValue))
          ) {
            item.style.display = "block";
          } else {
            item.style.display = "none";
          }
        });
      });
    });
  </script>
</body>

</html>