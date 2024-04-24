<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ASG Info</title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/ASG-Logo.png');?>">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="<?= base_url('assets/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?= base_url('assets/style.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <style>
    ::-webkit-scrollbar {
      width: 10px;
    }
    ::-webkit-scrollbar-track {
      background: #161B22;
    }
    ::-webkit-scrollbar-thumb {
      background: #888;
      border-radius: 5px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }
  </style>
</head>

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="fa-solid fa-sliders mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/My-Pic.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Aniket S Golhar</a>
        </h1>
        <div class="social-links mt-3 text-center">
          <!-- <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a> -->
          <a href="https://www.instagram.com/golharaniket?igsh=YzljYTk1ODg3Zg==" target="_blank" class="instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/aniket-golhar-013a78168" target="_blank" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
          <a href="mailto:golharaniket04@gmail.com" target="_blank" class="google-plus"><i class="fa-brands fa-google"></i></a>
          <a href="https://www.youtube.com/@364beat3" target="_blank" class="google-plus"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i
                class="fa-solid fa-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i
                class="fa-solid fa-user"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i
                class="fa-solid fa-file"></i> <span>Resume</span></a></li>
                <li><a href="#projects" class="nav-link scrollto"><i
                      class="fa-solid fa-server"></i> <span>Projects</span></a></li>
          <li><a href="#post" class="nav-link scrollto"><i
                class="fa-solid fa-book"></i> <span>Post</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i
                class="fa-solid fa-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container aos-init aos-animate" data-aos="fade-in">
      <h1>Aniket S Golhar</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer">PHP Developer</span><span
          class="typed-cursor" aria-hidden="true"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>I'm Aniket Golhar, born on March 4, 1997, from Pulgaon, Maharashtra. My father is a retired government employee, while my mother is a homemaker, and I have married sisters. I pursued Bachelor of Engineering in Electronic & Telecommunication, graduating in 2019 & I completed my polytechnic in Electronic & Telecommunication in 2015.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right">
            <img src="assets/My-Pic.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content aos-init aos-animate" data-aos="fade-left">
            <h3>Frontend &amp; Backend Developer.</h3>
            <p class="fst-italic">
              I completed a 6-month internship, where I gained hands-on experience in frontend technologies like HTML, CSS, and Bootstrap, as well as backend technologies such as PHP and MySQL. During this time
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="fa-solid fa-chevron-right"></i> <strong>Birthday:</strong> <span>4 March 1997</span></li>
                  <li><i class="fa-solid fa-chevron-right"></i> <strong>Website:</strong> <span id="website"></span></li>
                  <li><i class="fa-solid fa-chevron-right"></i> <strong>Phone:</strong> <a href="tel:9049611445" style="color: black;"><span>+91 9049611445</span></a></li>
                  <li><i class="fa-solid fa-chevron-right"></i> <strong>City:</strong> <span>Pulgaon, MH-32</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="fa-solid fa-chevron-right"></i> <strong>Age:</strong> <span id="age"></span></li>
                  <li><i class="fa-solid fa-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor of Engineering</span></li>
                  <li><i class="fa-solid fa-chevron-right"></i> <strong>Email:</strong> <a href="mailto:golharaniket04@gmail.com" style="color: black;"><span>golharaniket04@gmail.com</span></a>
                  </li>
                  <li><i class="fa-solid fa-chevron-right"></i> <strong>Available:</strong> <span>OnSite / Remote</span></li>
                </ul>
              </div>
            </div>
            <p>
              I spent 1.8 years as a junior PHP developer. In this role, I designed and developed multiple projects including CRM, accounting, MLM, and e-commerce platforms. Additionally, I integrated third-party APIs such as SMS gateways, payment gateways, and Ship Rocket, enhancing the functionality of these projects. Since September 2023, I have been started career as a CodeIgniter developer. Here, I primarily focus on developing new APIs and web software for in-house products of organization, as well as handling maintenance tasks.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>My practical experience is with PHP & MySQL languages and I am motivated to master those skills and to enrich my knowledge with a new one.</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                  style="width: 100%;"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                  style="width: 90%;"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Bootstrap <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                  style="width: 90%;"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                  style="width: 90%;"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Codeigniter <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                  style="width: 80%;"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JQuery <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                  style="width: 75%;"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Working with tech companies since 2021, I succeed to grow my programming skills in different areas. I participate and develop many projects which is working on the Web.</p>
        </div>

        <div class="row">
          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Aniket Golhar</h4>
              <p><em>Innovative and deadline-driven Web Developer with 2+ years of experience designing and
                  developing from initial concept to final, polished
                  deliverable.</em></p>
              <ul>
                <li>Shende-Lay-Out, Pulgaon (MH-32)</li>
                <li>(+91) 9049611445</li>
                <li>golharaniket04@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bachelor of Electronic &amp; Telecommunication</h4>
              <h5>2015 - 2019</h5>
              <p><em>Bapurao Deshmukh College of Engineering, Sevagram (MH)</em></p>
              <p>During my Bachelor of Electronic & Telecommunication studies, I gained advanced knowledge in electronic systems and communication technologies, covering areas such as signal processing, wireless communication, embedded systems, and network protocols. Through practical projects and internships, I developed critical problem-solving skills, preparing me for a career in the field.</p>
            </div>
            <div class="resume-item">
              <h4>Diploma of Electronic &amp; Telecommunication</h4>
              <h5>2012 - 2015</h5>
              <p><em>Agnihotri School of Technology, Wardha (MH)</em></p>
              <p>During my Diploma in Electronic & Telecommunication, I gained practical skills and theoretical knowledge in electronics and telecommunications, covering subjects like circuit theory, digital electronics, communication systems, and microprocessors. The program provided hands-on experience through lab work, projects, and industrial training, preparing me for further education and a career in the field.</p>
            </div>
          </div>
          <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>PHP Codeigniter Developer</h4>
              <h5>Sep2023 - Present</h5>
              <p><em>Lockene Inc, Nagpur(MH)</em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the API's for in-house products.</li>
                <li>Development of web application with 3<sup>rd</sup> party API's integration.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Junior PHP Developer</h4>
              <h5>Mar2022 - Sep2023</h5>
              <p><em>Brainz1techub, Nagpur (MH)</em></p>
              <ul>
                <li>Developed numerous projects like (CRM Software, Real-estate Project, Accounting Software, MLM Website & Software, and
                  ERP & E-commerce Site).</li>
                <li>Supervise the assessment of project in order to ensure quality and accuracy of the
                    design</li>
                <li>Managed up to 3+ projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients directly for appropriate requirements</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>PHP Intern</h4>
              <h5>Aug2021 - Mar2022</h5>
              <p><em>Brainz1techub, Nagpur (MH)</em></p>
              <ul>
                <li>Learn frontend development skill like HTML, CSS, Bootstrap & Jquery.</li>
                <li>Learn backend development language & skill like PHP & MySQL under guidance of senior</li>
                <li>Work in Marrimony website with senior</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="projects" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Projects</h2>
          <p>I utilize my skills and creativity to design and develop user-friendly projects, aiming to simplify life and enhance convenience. By employing innovative thinking and problem-solving abilities, I create solutions that are easy to use and improve daily life experiences.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up">
            <div class="icon"><i class="fa-solid fa-briefcase"></i></div>
            <h4 class="title"><a href="https://aniketg4.000webhostapp.com/">Scheduler</a></h4>
            <p class="description">Scheduling events, managing birthdays, anniversaries, and maintaining ledgers efficiently.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fa-regular fa-rectangle-list"></i></div>
            <h4 class="title"><a href="">KitCat</a></h4>
            <p class="description">Realtime chat application based on Firebase & jQuery. Realtime notfication & gmail autentication.</p>
          </div>
          <!--<div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">-->
          <!--  <div class="icon"><i class="fa-solid fa-bar-chart"></i></div>-->
          <!--  <h4 class="title"><a href="">E R P</a>-->
          <!--  </h4>-->
          <!--  <p class="description">Enterprise Resource Planning software streamlines and integrates business processes across various departments to enhance efficiency and productivity.</p>-->
          <!--</div>-->
          <!--<div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">-->
          <!--  <div class="icon"><i class="fa-solid fa-binoculars"></i></div>-->
          <!--  <h4 class="title"><a href="">coming soon</a></h4>-->
          <!--  <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat omnis dolorum quia vero nulla consequatur optio veniam, quis explicabo repudiandae dolorem.</p>-->
          <!--</div>-->
          <!--<div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">-->
          <!--  <div class="icon"><i class="fa-regular fa-sun"></i></div>-->
          <!--  <h4 class="title"><a href="">coming soon</a></h4>-->
          <!--  <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat omnis dolorum quia vero nulla consequatur optio veniam, quis explicabo repudiandae dolorem.</p>-->
          <!--</div>-->
          <!--<div class="col-lg-4 col-md-6 icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">-->
          <!--  <div class="icon"><i class="fa-solid fa-calendar-days"></i></div>-->
          <!--  <h4 class="title"><a href="">coming soon</a></h4>-->
          <!--  <p class="description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat omnis dolorum quia vero nulla consequatur optio veniam, quis explicabo repudiandae dolorem.</p>-->
          <!--</div>-->
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="post" class="portfolio" style="background-color: #b9d3ff;">
      <div class="container">

        <div class="section-title">
          <h2>Social Media Post</h2>
          <p>Check out this social media post from one of the companies I've had the pleasure of working with! </p>
        </div>

        <div class="row">
          <div class="col-sm-6 mb-2">
            <div class="p-3 h-100" style="background: white; border-radius: 1rem;">
              <div class="row">
                <div class="col-sm-4">
                  <img src="assets/birthday_post_lockene.jpg" class="img-fluid" alt="" style="border: 2px solid #0f1418; border-radius: 1rem; aspect-ratio: 1; object-fit: cover;">
                </div>
                <div class="col-sm-8">
                  <span>March 04, 2024</span>
                  <h3>Birthday Post</h3>
                  <p>Wishing you a fantastic birthday from the Lockene team! May your day be filled with joy, laughter, and unforgettable moments. Here's to another year of success and happiness!</p>
                  <a href="https://www.linkedin.com/posts/lockene_happybirthday-celebrations-lockeneteam-activity-7170310180117622785-m6e2/?utm_source=share&utm_medium=member_android" target="_blank" class="btn btn-sm btn-primary">View Post</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mb-2">
            <div class="p-3 h-100" style="background: white; border-radius: 1rem;">
              <div class="row">
                <div class="col-sm-4">
                  <img src="assets/performance_of_the_month_bz1.jpg" class="img-fluid" alt="" style="border: 2px solid #0f1418; border-radius: 1rem; aspect-ratio: 1; object-fit: cover;">
                </div>
                <div class="col-sm-8">
                  <span>August 01, 2022</span>
                  <h3>Performance of the month</h3>
                  <p>Employee like you are essential for every company, may you have continuous success in you life. Keep it up! Brainz1techub</p>
                    <a href="https://www.instagram.com/p/Cgtvwu_LHmX/?igsh=YzljYTk1ODg3Zg==" target="_blank" class="btn btn-sm btn-primary">View Post</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Feel free to get in touch with me anytime!</p>
        </div>

        <div class="row aos-init aos-animate" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="fa-solid fa-location-dot"></i>
                <h4>Location:</h4>
                <p>Shende-Lay-Out, Pulgaon, Wardha, Maharashtra, IN-442302</p>
              </div>

              <div class="email">
                <i class="fa-solid fa-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:golharaniket04@gmail.com" style="color: black;">golharaniket04@gmail.com</a></p>
              </div>

              <div class="phone">
                <i class="fa-solid fa-phone"></i>
                <h4>Call:</h4>
                <p><a href="tel:9049611445" style="color: black;">+91 9049611445</a></p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29853.973003740644!2d78.29812126964266!3d20.720511064630735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4751704618f21%3A0xab1f7e0cacdf8e04!2sPulgaon%2C%20Maharashtra%20442302!5e0!3m2!1sen!2sin!4v1709907664391!5m2!1sen!2sin" style="border:0; width: 100%; aspect-ratio: 1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="" method="post" role="form" class="php-email-form" id="emailForm">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required="">
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required="">
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required=""></textarea>
              </div>
              <div class="text-center"><button type="submit" id="submitbtn">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        © Copyright <strong><span>Web Developer</span></strong>
      </div>
      <div class="credits">
        Developed by ASG
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#hero" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up"></i></a>

  <script src="<?= base_url('assets/bootstrap.bundle.min.js.download');?>"></script>
  <script src="<?= base_url('assets/main.js.download');?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/push.js/1.0.8/push.min.js"></script>

  <script>
    $(document).ready(function() {
      // website url
      var currentDomain = window.location.protocol + "//" + window.location.hostname;
      $("#website").html(currentDomain);

      // age calculation
      var birthdate = new Date('1997-03-04');
      var now = new Date();
      var age = now.getFullYear() - birthdate.getFullYear();
      if (now.getMonth() < birthdate.getMonth() || (now.getMonth() === birthdate.getMonth() && now.getDate() < birthdate.getDate())) {
          age--;
      }
      $("#age").html(age);

      Push.create(name, {
        body: 'Welcome to Aniket S Golhar Portfolio',
        icon: '<?= base_url('assets/ASG-Logo.png');?>',
        timeout: 4000,
        onClick: function () {
          window.focus();
          this.close();
        }
      });
    });

    $('#emailForm').on('submit', function(e){
        e.preventDefault();
        $('#submitbtn').html('Submitting <div class="spinner-border text-light" role="status" style="width: 15px; height: 15px;"></div>');
        
        $.ajax({
            url: '<?= base_url('/SendEmail');?>',
            method: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                // alert(data);
            },
            error: function(xhr, status, error) {
                console.error('AJAX request failed:', status, error);
            }
        });

        setTimeout(function(){
          $('#submitbtn').html('Send Message');
          $('#emailForm')[0].reset();
          Push.create(name, {
            body: 'Thank you for connect',
            icon: '<?= base_url('assets/ASG-Logo.png');?>',
            timeout: 4000,
            onClick: function () {
              window.focus();
              this.close();
            }
          });
        }, 5000);
    });  
  </script>
</body>

</html>