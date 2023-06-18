<?php
//create a mySQL DB connection:
include "config.php";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//testing connection success
if (mysqli_connect_errno()) {
  die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Yanai Yeshurun</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style-sky-blue.css" rel="stylesheet">

</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Yanai Portfolio</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#testimonial-mf">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">I am Yanai Yeshurun</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Software Engineer,FullStack Developer,Web Developer,Frontend Developer,Backend Developer</span><strong class="text-slider"></strong></p>
          <br>
          <br>
          <br>
          <!-- download button start here -->
          <button type="button" class="btn btn-outline-light btn-lg rounded" id="download-btn">
            <script src="js/download.js"></script>
            <i class="fa fa-arrow-down"></i> Download my CV
          </button>
          <!-- download button end here -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="img/profile.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span>Yanai Yeshurun</span></p>
                      <p><span class="title-s">Profile: </span> <span>Software Engineer Student</span></p>
                      <p><span class="title-s">Email: </span> <span>Yanaiyeshurun22@gmail.com</span></p>
                      <p><span class="title-s">Phone: </span> <span>(972) 53-822-0901</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Skill</p>
                  <span>HTML</span> <span class="pull-right">95%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>CSS3</span> <span class="pull-right">75%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>C / C++</span> <span class="pull-right">95%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>JAVASCRIPT</span> <span class="pull-right">90%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span>PYTHON</span> <span class="pull-right">60%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">
                    I am Yanai, a motivated software engineering intern with a diverse background. Throughout my career, I have demonstrated
                    my ability to create innovative solutions and solve complex problems. In addition to my software engineering studies, I
                    have valuable experience as a JavaScript instructor, teaching and mentoring students in their programming journey
                  </p>
                  <p class="lead">
                    As a cybersecurity tester, I have tested data security systems for highly sensitive clients, including governmental and
                    military organizations. Furthermore, my military service as an officer in the Israeli Military Intelligence has honed my
                    leadership skills and allowed me to leverage cutting-edge technologies in executing critical missions.
                  </p>
                  <p class="lead">
                    In my free time, I enjoy playing basketball, staying active with sports, exploring new places through travel, and
                    finding inspiration in music. I am eager to contribute my skills and pursue a software engineering career.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <p class="subtitle-a">
              What can I offer you?
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-monitor"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Low-level programming </h2>
              <p class="s-description text-center">
                With my skills in low-level programming languages such as C, C++, and assembly language, I offer a deep understanding of
                hardware and software interactions. I can optimize code, develop efficient algorithms, and troubleshoot complex issues
                at the system level
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-code-working"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">FullStack Development</h2>
              <p class="s-description text-center">
                I have expertise in JavaScript, SQL, HTML, jQuery, and CSS, enabling me to excel in full-stack development. From
                frontend UI/UX design to backend database management, I create visually appealing, responsive, and scalable solutions
                for optimal user experiences.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-stats-bars"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">problem-solving</h2>
              <p class="s-description text-center">
                With my strong problem-solving skills, collaborative nature, and adaptability, I bring the ability to tackle complex
                challenges head-on and thrive in a team environment. I contribute innovative solutions and foster effective teamwork to
                drive successful outcomes.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
            <p class="subtitle-a">
              Some of the projects.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
        $query = "SELECT * FROM portfolio_YanaiYeshurun";
        $result = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col-md-4">';
          echo '<div class="work-box">';
          echo '<a href="' . $row["url"] . '" target="_blank" >';
          echo '<div class="work-img">';
          echo '<img src="' . $row["img_url"] . '"alt="" class="img-fluid">';
          echo '</div>';
          echo '<div class="work-content">';
          echo '<div class="row">';
          echo '<div class="col-sm-8">';
          echo '<h2 class="w-title">' . $row["name"] . '</h2>';
          echo '<div class="w-more">';
          echo '<span class="w-ctegory">' . $row["type"] . '</span> / <span class="w-date">' . $row["last_update"] . '</span>';
          echo '</div>';
          echo '</div>';
          echo '<div class="col-sm-4">';
          echo '<div class="w-like">';
          echo '<span class="ion-ios-plus-outline"></span>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</a>';
          echo '</div>';
          echo '</div>';
        }
        mysqli_free_result($result);
        ?>
      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                <a href="https://www.linkedin.com/in/yanai-yeshurun/" target="_blank">
                  <img src="img/linkedin.png" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">LinkedIn</span>
                </a>
              </div>
              <div class="content-test">
                <p class="description lead">
                  By clicking on my LinkedIn profile, you can explore my professional journey, access my resume, and discover more about my accomplishments and skills. It's a comprehensive platform that showcases my career achievements and provides insights into my expertise. </p>
                <span class="comit"><i class="fa fa-linkedin"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <a href="https://github.com/YaniYesh22" target="_blank">
                  <img src=" img/github.png" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">GitHub</span>
                </a>
              </div>
              <div class="content-test">
                <p class="description lead">
                  By clicking on my GitHub profile, you will find a comprehensive collection of all my projects. It serves as a centralized repository showcasing my portfolio of work.
                </p>
                <span class="comit"><i class="fa fa-code-fork"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <a href="https://www.facebook.com/YanaiYesh" target="_blank">
                  <img src="img/facebook.png" alt="" class="rounded-circle b-shadow-a">
                  <span class="author">Facbook</span>
                </a>
              </div>
              <div class="content-test">
                <p class="description lead">
                  Clicking on my Facebook profile will give you a glimpse into my hobbies and interests. It's a platform where I share my personal activities and engage with various hobbies.
                </p>
                <span class="comit"><i class="fa fa-commenting"></i></span>
              </div>
            </div>
          </div>
          <div class="testimonial-box">
            <div class="content-test">
              <p class="description lead">
                <br>
                <br>
                <br>
                <br>
                © Copyright 2023 Yanai Yeshurun. All rights reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i>
  </a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>