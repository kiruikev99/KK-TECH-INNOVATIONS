<!DOCTYPE html>
<html lang="en">

<head>
    <link type="text/css" rel="stylesheet" href="style.css">
    <meta charset="UTF-8">

    <link rel="icon" type="image/png" href="images/K.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KK TECH INNOVATIONS</title>
</head>

<body>
<nav>
  <div class="image">
    <img  src="images/K.png" alt="KK Tech Logo">
  </div>
  <div class="information">
    <ul>
      <li><a href="#about">About Us</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#pricing">Pricing</a></li>
      <li><a href="#pricing">Pricing</a></li>
      <button onclick="myFunction()">Toggle Light Mode</button>
    </ul>
    <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("body");
}
</script>
  </div>
  <div class="hamburger" onclick="toggleMenu()">
    <img src="images/menu2.png" width="200" alt="Menu Icon">
  </div>
</nav>


<script>
  function toggleMenu() {
    const menu = document.querySelector('.information ul');
    menu.classList.toggle('show');
  }

  // Hide the menu when clicking outside of it
  document.addEventListener('click', function(event) {
    const menu = document.querySelector('.information ul');
    const isClickInsideMenu = menu.contains(event.target);
    const isClickOnHamburger = document.querySelector('.hamburger').contains(event.target);

    // If the click is outside the menu and the hamburger icon, close the menu
    if (!isClickInsideMenu && !isClickOnHamburger) {
      menu.classList.remove('show');
    }
  });
</script>
    <section class="content">
        <div class="text-area">
            <div class="left-area">
                <h6>KK TECH INNOVATIONS</h6>
                <h1>Innovating <span style="color: greenyellow">Web Technologies </span>that are Significant than Before
                </h1>
                <button>
                    <div style="display: flex; justify-content: spacearound;" class="btn-context">
                        <h5>Get Started</h5>
                        <!-- <img height="100" width="70" src="images/right.png"> -->
                    </div>
                </button>
            </div>


        </div>


    </section>


    <section id="about" class="about">
        <div class="content-about">
            <div class="small-text">

                <h1><span class="sm-text">About Us</span> <br>Discover the Origin of <span style="color: greenyellow">KK
                        Innovations</span>
            </div>
            <div class="flex-about">
                <div class="img-part">
                    <img width="800" src="images/program.jpg" alt="KK Tech Logo">
                </div>
                <div class="contents-about">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi incidunt ipsa adipisci. Quo quod,
                        itaque doloribus dicta excepturi assumenda asperiores, nihil amet id necessitatibus debitis et
                        voluptatum ex officiis impedit!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, doloremque! Libero, velit, id
                        rerum optio vero distinctio ipsa aliquid itaque ratione harum totam et porro officiis similique
                        ad ipsum ducimus.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit ea dolorem pariatur iure! Rem error
                        voluptatem fugiat perferendis nihil, placeat tempore, est reiciendis, quos beatae dicta quaerat
                        asperiores! Sed, aperiam!
                        Lorem, ipsum dolor sit amet consectetur
                    </p>
                    <div class="display-icons">
                        <div class="users">
                            <div class="img-text">
                                <img width="60" src="images/user.png" alt="user">
                                <h3><b>Team Collaboration</b></h3>

                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi incidunt ipsa adipisci.</p>
                        </div>
                        <br>
                        <div class="security    ">
                            <div class="img-text">
                                <img width="60" src="images/security.png" alt="user">
                                <h3><b>Security</b></h3>

                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi incidunt ipsa adipisci.</p>
                        </div>
                        <br>
                        <div class="chevron">
                            <div class="img-text">
                                <img width="60" src="images/chevron.png" alt="user">
                                <h3><b>Programs</b></h3>

                            </div>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi incidunt ipsa adipisci.</p>
                        </div>
                        <br><br><br><br>
                    </div>

                </div>

            </div>
        </div>



    </section>


    <div class="projo">
            <h1>PROJECTS</h1>
        </div>

    <section class="yy">
        
    <div class="card">
        <video  controls>
            <source autoplay src="images/Magram2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div  class="card-content">
            <h2 class="card-title">MAGRAM INTERNATIONAL HEALTHCARE WEBSITE</h2>
            <p class="card-text">
                This is a simple card layout with a video, title, and paragraph. It’s a great way to showcase media content alongside some descriptive text.
            </p>
        </div>
    </div>
    
    <div class="card">
        <video id="vida" controls>
            <source src="images/Cheffset.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="card-content">
            <h2 class="card-title">CHEFFSET RETAURANT WEBSITE</h2>
            <p class="card-text">
                This is a simple card layout with a video, title, and paragraph. It’s a great way to showcase media content alongside some descriptive text.
            </p>
        </div>
    </div>
    
    <div class="card">
        <video controls>
            <source src="images/riverside.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="card-content">
            <h2 class="card-title">RIVERSIDE HOSTEL MANAGMENT SYSTEM WEBSITE</h2>
            <p class="card-text">
                This is a simple card layout with a video, title, and paragraph. It’s a great way to showcase media content alongside some descriptive text.
            </p>
        </div>
    </div>
</section>


<section class="prices">
    <div class="headings">
        <h1><b>Simple and Affordable<br>Pricing Plans</b></h1>
        <p>Venture in your Website Today!</p>
    </div>
    <div class="header-prices">
        <div class="bg-prices">
            <br><br><br>
            <div class="content-prices">
                <img width="55" src="images/box.png">
                <h4 class="basic"><b>Basic Package</b></h4>
                <h1><b>Ksh 15,500/=</b></h1>
                <div class="lists">
                <h5>Suitable for small businesses or startups with a simple online presence.</h5>

                    <ul>
                       <li>Sample Webiste Designs</li>
                       <li>Mobile responsive design for optimal viewing on all devices.</li>
                       <li>Basic SEO</li>
                       <li>Logo design if needed</li>
                       <li>Functional Contact Us</li>
                       
                    </ul>
                    <button>Get In Touch </button>
                </div>
            </div>


        </div>
        <br><br><br>

        <div class="bg-prices1">
          
            <div class="content-prices">
            <h3><b>COMING SOON</b></h3>
                <img width="55" src="images/jewelry.png">
                <h4 class="premium"><b>Premium Package</b></h4>
                <h1><b>Ksh 28,000/=</b></h1>
                <div class="lists">
                    <h5>Perfect for established businesses with extensive online needs and e-commerce functionality.</h5>
                    <ul>
                       <li>Sample Webiste Designs</li>
                       <li>Mobile responsive design for optimal viewing on all devices.</li>
                       <li>Advanced SEO</li>
                       <li>Functional Contact Us</li>
                       <li>Payments Integration.</li>
                       <li>E-commerce integration for online product sales</li>
                       <li>Administrative dashboard.</li>
                       <li>SEO optimization for improved search visibility.</li>
                    </ul>
                    <button>Get In Touch </button>
                </div>
            </div>


        </div>

    </div>
</section>



<footer>
  <div class="footer-container">
    <!-- Logo Section -->
    <div class="footer-logo">
     <img width="200" src="images/kk.jpg">
           <p>KK TECH INNOVATIONS</p>
    </div>

    <!-- Link Sections -->
    <div class="footer-links">
      <h3>WEBSITE THEMES</h3>
      <a href="#">Weebly Themes</a>
      <a href="#">Pre-Sale FAQs</a>
      <a href="#">Submit a Ticket</a>
    </div>

    <div class="footer-links">
      <h3>SERVICES</h3>
      <a href="#">Services</a>
      <a href="#">Theme Tweak</a>
    </div>

    <div class="footer-links">
      <h3>SHOWCASE</h3>
      <a href="#">Showcase</a>
      <a href="#">Widgetkit</a>
      <a href="#">Support</a>
    </div>

    <div class="footer-links">
      <h3>ABOUT US</h3>
      <a href="#">About Us</a>
      <a href="#">Contact Us</a>
      <a href="#">Affiliates</a>
      <a href="#">Resources</a>
    </div>
  </div>

  <!-- Social Media Icons -->
  <!--  -->

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    &copy; Copyright. All rights reserved.
  </div>
</footer>



</body>
<script>
    // Add animation class after a small delay to ensure DOM is loaded
    window.addEventListener('load', () => {
        setTimeout(() => {
            document.querySelectorAll('.progress').forEach(bar => {
                bar.classList.add('animate');
            });
        }, 100);
    });
</script>

</html>