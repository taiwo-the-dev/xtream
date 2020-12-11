<?php 
    $alert = " ";
    if(isset($_POST["contact"])){
        $userName = $_POST["name"];
        $userSubject = $_POST["subject"];
        $userEmail = $_POST["email"];
        $userMessage = $_POST["message"];
        
        $to_email = 'info@xtreamtechsol.com';
        $subject = $userSubject;
        $message = $userMessage;
        $headers = 'From: ' .  $userEmail;
        mail($to_email,$subject,$message,$headers);
        
        $alert = '<div class="alert alert-success">Your Message has beeen Successfully Sent!</div>';
    
    }
    
    if(isset($_POST["project"])){
        $userName = $_POST["name"];
        $userPhone = $_POST["phone"];
        $userEmail = $_POST["email"];
        $userMessage = $_POST["message"];
        $userService = $_POST["service"];
        
        $to_email = 'info@xtreamtechsol.com';
        $subject = $userService;
        $message = $userName . "\n" . $userPhone . "\n" . $userMessage;
        $headers = 'From: ' .  $userEmail;
        mail($to_email,$subject,$message,$headers);
        $alert = '<div class="alert alert-success">Project Has been Successfully placed, Kindly vistit us on whatsapp for futher discussions. Thanks!</div>';
    }
  
  
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>xTream - Tech Solutions</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <!--Floating WhatsApp css-->
    <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
    <!--Floating WhatsApp javascript-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg py-3 bg-white justify-content-sm-start fixed-top" id="navbar-example3">
      <div class="container">
        <a class="navbar-brand  ml-lg-0 ml-2 mr-auto" href="#">
          <img src="assets/img/logo.png" alt="Logo" title="xTream" style="height:35px;" />
        </a>
        <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent20" aria-expanded="false" aria-label="Toggle navigation">
      <div class="navbar-toggle-btn"><span></span><span></span><span></span></div>
    </button>

        <div
          class="nav-menu collapse navbar-collapse bg-white p-3 p-lg-0 mt-5 mt-lg-0 d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end mobileMenu"
          id="navbarSupportedContent" style="width: 65%;"
        >
          <ul class="navbar-nav align-self-stretch">
            <li class="nav-item pl-3">
              <a class="nav-link" id="active" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item pl-3">
              <a class="nav-link" href="#tabs">About</a>
            </li>
            <li class="nav-item pl-3">
              <a class="nav-link" href="#services">Services</a>
            </li>
          <li class="nav-item pl-3">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
           <li class="nav-item pl-3">
            <a class="nav-link" href="#faqs" data-toggle="modal" data-target="#exampleModalLong">FAQs</a>
          </li>
          <li class="nav-item pl-3">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="overlay"></div>
    <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-7">
              <h1 data-aos="zoom-out" data-aos-delay="200">Take Your Business To The Next Level</h1>
              <h2 data-aos="fade-right" data-aos-delay="800">we are a Creative Company that offers premuim tech solutions to both Small And Large business Companies who believe in the power of technology. We design, evaluate and justify technology solutions from a thorough understanding of the business benefit for your company. </h2>
              <a href="#about" data-aos="slide-up" data-aos-delay="1000" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main" data-spy="scroll" data-target="#navbar-example3">

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">221</span>
              <p>Completed Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-star"></i>
              <span data-toggle="counter-up">4.8</span>
              <p>Work Ratings</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up" id="percent">100</span>
              <p>Team Work</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Our Top Notch Services</h3>
              <p>
                We take problems and build solutions around them. We create concepts and implement designs that expresses your brand values. We integrate the essence of great human experience into designs from beautiful interfaces to innovative user interactions
              </p>
              <a href="#exampleModal" class="about-btn" data-toggle="modal"><span>Start A Project</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="icofont-shopping-cart"></i>
                  <h4>E-Commerce Site</h4>
                  <p>In need of an online store, Worry no more because we will provide your wish with easy site Management</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>UI/UX Design</h4>
                  <p>We Create a Unique Interface design that helps user easily interact with a digital product.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="icofont-contrast"></i>
                  <h4>IT Consultancy</h4>
                  <p>Our IT Consulting and Hosting team will provid you with the highly available technology that your business/brand needs.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="icofont-google-map"></i>
                  <h4>Local SEO</h4>
                  <p> 97% of consumers go online to find local services, Your customers are searching for your business—let us help you.</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
              <i class="icofont-company"></i>
              <h4 class="d-none d-lg-block">About Us</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <i class="icofont-compass"></i>
              <h4 class="d-none d-lg-block">Why Choose Us</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <i class="icofont-comment"></i>
              <h4 class="d-none d-lg-block">Start A Project</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-toggle="tab" href="#tab-4">
              <i class="icofont-support-faq"></i>
              <h4 class="d-none d-lg-block">FAQs</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>Who We Are</h3>
                <p>
                  xTream is a Creative Company that offers full service tech solutions to both Small And Large business Companies who believe in the power of technology. we have great Passion for helping Retail/Corporate Industries utilize properly the latest Technologies and we ensure that we are developing according to client's exact needs because we are believe in top notch services.
                </p>
                <p>
                  We are a qualified IT consulting company in Ibadan Nigeria that specialises on web design and development, graphics design, wordpress development, business plan and content writing. We are geared at delivering the best service by working with you through interactive communication to achieve your aim of knocking up the ideal web design solutions for your business. Our services also include comprehensive Web design training, WordPress training, SEO training and Graphics designs training well-tailored for individuals who need digital skills. 
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid img-thumbnail">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-12 order-2 order-lg-1">
                <div class="row d-flex align-items-stretch">
                  <div class="col-lg-4 col-md-6 col-12" id="content-panel">
                    <h5><span style="font-size: 30px; font-weight: bolder; color: #e03a3c;"> <i class="icofont-slightly-smile"></i> </span> 100% Satisfaction Guarantee</h5>
                    <p>
                      We want you to be completely satisfied with our services. We will do whatever it takes to make you happy. No hassles, no problems.
                    </p>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0" id="content-panel">
                    <h5><span style="font-size: 30px; color: #e03a3c;"> <i class="icofont-badge"></i> </span>Experienced</h5>
                    <p>
                      In more than 5 years of active IT services delivery, we have gained experience in a wide spectrum of technologies, industries, and application types.
                    </p>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mt-4 mt-lg-0" id="content-panel">
                    <h5><span style="font-size: 30px; color: #e03a3c;"> <i class="icofont-comment"></i> </span>No geek speak</h5>
                    <p>
                      You deserve to have your questions answered in plain English. We will clearly explain what is happening so you understand explicitly.
                    </p>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mt-4" id="content-panel">
                    <h5><span style="font-size: 30px; color: #e03a3c;"> <i class="icofont-flag-alt-1"></i> </span>Business Savvy</h5>
                    <p>
                      We design, evaluate and justify technology solutions from a thorough understanding of the business benefit for your company.
                    </p>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mt-4" id="content-panel">
                    <h5><span style="font-size: 30px; color: #e03a3c;"> <i class="icofont-speech-comments"></i> </span>Quick Response</h5>
                    <p>
                      Our response rate to issues and messages are very fast and reliable at all times. We respond to clients anytime anywhere!
                    </p>
                  </div>
                  <div class="col-lg-4 col-md-6 col-12 mt-4" id="content-panel">
                    <h5><span style="font-size: 30px; color: #e03a3c;"> <i class="icofont-dashboard-web"></i> </span>One Stop Shop</h5>
                    <p>
                      We handle all aspects of our services. We have different Partner brands with xTream, an example is <a href="#">WebbiitMedias</a>.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row align-items-stretch">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <form id="project" method="POST"> 
                  <div id="form-title">
                    <h3>Experience Our Top Rated Service</h3>
                    <hr style="background-color:white;">
                  </div>
                  <fieldset class="row">
                    <div class="col-12 col-md-6">
                      <label>Company Name</label>
                      <input placeholder="Company Name" type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-12 col-md-6">
                      <label>Phone</label>
                      <input placeholder="Your Phone" type="tel" class="form-control" name="phone" required>
                    </div>
                  </fieldset>
                  <fieldset class="row">
                    <div class="col-12 col-md-6">
                      <label>Email</label>
                      <input placeholder="Your Email" type="email" class="form-control" name="email" required>
                    </div>
                    <div class="col-12 col-md-6">
                      <label>Service</label>
                      <select class="form-control" placeholder="select a service">
                        <option>Web Design</option>
                        <option>UI/UX Design</option>
                        <option>Wordpress</option>
                        <option>Ecommerce</option>
                        <option>Blog</option>
                        <option>Graphics Design</option>
                        <option>Logo Design</option>
                        <option>3D Animation</option>
                      </select>
                    </div>
                  </fieldset>

                  <fieldset>
                    <label>Project Description</label>
                    <textarea placeholder="project description here...." class="form-control" name="info"></textarea>
                  </fieldset>
                  <fieldset>
                    <button type="submit" class="btn btn-block btn-danger" name="submit">Start Project</button>
                  </fieldset>
                </form>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-2.jpg" alt="" class="img-thumbnail">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <h3 class="text-center mb-3">Frequently Asked Questions</h3>
            <div class="row">              
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                 <main id="faq" class="faq">
                  <div class="container" data-aos="fade-up">
                    <ul class="faq-list" data-aos="fade-up">

                      <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">What domain name should I choose? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq1" class="collapse" data-parent=".faq-list">
                          <p>
                            The choice of domain name depends on how you plan to use it. In most cases, it makes sense to choose one that is easy to pronounce and spell if you will be telling people about it over the phone. Above all, you should choose a name that is memorable and not confusing.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">How long will it take for my website to be designed? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq2" class="collapse" data-parent=".faq-list">
                          <p>
                            The time it takes to build a site depends on the complexity of the site. If you have a deadline, we will work hard to meet it. The most common cause of delay is the content (text/images) from the client.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">Do we need to have a meeting to discuss the website design? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq3" class="collapse" data-parent=".faq-list">
                          <p>
                            Most of the time, a meeting isn't necessary and the work is completed with only discussions over phone and email. We upload our work to private websites that only clients can access. We then work with you to discuss the site and review changes. The site isn't made available to the public until it looks and works exactly as you wish.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">How much will a website cost me? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq4" class="collapse" data-parent=".faq-list">
                          <p>
                            The cost of a website varies depends on its complexity. We are happy to discuss your requirements and provide a quote at any time.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Once my website design is completed, what after-sales service do you offer? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq5" class="collapse" data-parent=".faq-list">
                          <p>
                            We fully support any website we design and are always available should you encounter any problems or require new enhancements. We also offers website hosting and maintenance.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Do I have to keep my website with you forever? Can I move it to another provider? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq6" class="collapse" data-parent=".faq-list">
                          <p>
                            You may move your site to another Web hosting service at any time. Once your design has been completed, we send you a copy of the site
                          </p>
                        </div>
                      </li>

                    </ul>

                  </div>
                </main><!-- End Frequently Asked Questions Section -->
              </div>
              <div class="col-lg-6 order-1 order-lg-2">
                <main id="faq" class="faq">
                  <div class="container" data-aos="fade-up">
                    <ul class="faq-list" data-aos="fade-up">

                      <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">Will my website design be search-engine friendly? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq1" class="collapse" data-parent=".faq-list">
                          <p>
                            All our websites are created with search engines in mind, and all designs are compliant with search engine guidelines. It is a good idea for your website to be re-evaluated from time to time as search engines do alter their rules and algorithms. This will ensure that your site is up to date and compliant with new rules.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">I run a small- or medium-sized business and want an online presence to promote my business. What's the first step? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq2" class="collapse" data-parent=".faq-list">
                          <p>
                           You need a domain name, a Web server and a professionally developed website. You also need the website to be uploaded to your host and promoted to search engines. xTream Solutions can help you with all aspects of getting a website up and running.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">What are my options for e-commerce? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq3" class="collapse" data-parent=".faq-list">
                          <p>
                            You can take payments online in a number of ways. There is also the option of creating a full e-commerce solution. This involves many different components - a merchant account from a bank, a payment gateway service that allows you to accept payments into your merchant account from your website, a shopping cart or payment script that integrates with your payment gateway, and certain elements of the server environment like having an SSL certificate and a static IP. Full e-commerce is much more expensive and time-consuming to develop.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">What is the difference between a static site and a dynamic site? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq4" class="collapse" data-parent=".faq-list">
                          <p>
                            Static Web pages always look the same and the content rarely changes. To make a change, you must create the page yourself or request a Web designer to do it for you. The newly created page and any images must then be uploaded to the Web servers.
                          </p>
                          <p>
                            Dynamic pages are the opposite. They can change every time they are loaded (without anyone having to make those changes), and they can even change their content based on what your website visitors do. The dynamic page can be created to respond to information entered by your site's visitor. They usually store and pull information from an underlying database.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">What if I do not like the design? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq5" class="collapse" data-parent=".faq-list">
                          <p>
                            If you are not satisfied with the initial design, we will work with you further and come up with another design. Our aim is to design a website that you are completely happy with.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">How many pages can I have on my website? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq6" class="collapse" data-parent=".faq-list">
                          <p>
                            You can have as many pages as you'd like. In fact, the more the better from a search engine's point of view!
                          </p>
                        </div>
                      </li>

                    </ul>

                  </div>
                </main><!-- End Frequently Asked Questions Section -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Tabs Section -->
    <?php echo $alert ?>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Services</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-computer"></i>
              <h4><a href="#">Web Design / Development</a></h4>
              <p>The foundation of any great online marketing campaign starts with your website. Our Website Design & Development team have the skills and creativity to take your vision and turn it into an amazing interactive experience.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="icofont-search-stock"></i>
              <h4><a href="#">Search Engine Optimization (SEO)</a></h4>
              <p>Want to get more earned traffic, leads, and sales? Start where 93% of online experiences start—with search engines. Grow your long-term authority and get more qualified website traffic, leads, and sales with search engine optimization (SEO).</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-paint"></i>
              <h4><a href="#">Graphics Design</a></h4>
              <p>No matter your business size, industry, or location, a strong, effective, and cohesive brand strategy and design help to convey your company’s quality, credibility, value, and experience. When it comes to marketing your products and services, those that have a strong brand hold an enormous competitive advantage.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-movie"></i>
              <h4><a href="#">3D Video Animation</a></h4>
              <p>Video is 50 times more likely to rank organically in the search results than text pages, and by 2019, video will account for 80% of global internet traffic, and 85% of online traffic in the US. What are you waiting for? Enhance your website, differentiate your brand, and get more leads with online videos!</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="icofont-learn"></i>
              <h4><a href="#">IT Training</a></h4>
              <p>Are you looking to get the skills required to make impact in your business or career? Or would you like us to train your internal team on graphics design or web design? If yes, let's talk!</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <i class="icofont-tasks-alt"></i>
              <h4><a href="#">Content Marketing</a></h4>
              <p>Attract, acquire, and engage your target audience through the creation and distribution of relevant and valuable content, including landing pages, blog posts, e-books, business plans, email newsletters, white papers, and more.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Recent Works</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-eco">E-commerce</li>
              <li data-filter=".filter-graphics">Graphics Design</li>
              <li data-filter=".filter-web">Web Design</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Pushpay</h4>
                <p>web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.JPG" data-gall="portfolioGallery" class="venobox" title="Pushpay -> Web Design/Development"><i class="bx bx-plus"></i></a>
                  <a href="https://pushpay.com/" target="_blank" title="view site"><i class="icofont-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mindsmapped</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.JPG" data-gall="portfolioGallery" class="venobox" title="Mindsmapped -> Web Design/Development"><i class="bx bx-plus"></i></a>
                  <a href="https://www.mindsmapped.com/" target="_blank" title="view site"><i class="icofont-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Good Financial Cent</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.JPG" data-gall="portfolioGallery" class="venobox" title="Good Financial Cent -> Web Design/Development"><i class="bx bx-plus"></i></a>
                  <a href="https://www.goodfinancialcents.com/" target="_blank" title="view site"><i class="icofont-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Coyote</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.JPG" data-gall="portfolioGallery" class="venobox" title="Coyote -> Web Design/Development"><i class="bx bx-plus"></i></a>
                  <a href="https://coyote.com/" target="_blank" title="view site"><i class="icofont-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Industrial Engineering Solution</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.JPG" data-gall="portfolioGallery" class="venobox" title="Industrial Engineering Solution -> Web Design/Development"><i class="bx bx-plus"></i></a>
                  <a href="http://iesolutionsnj.com/" target="_blank" title="view site"><i class="icofont-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Land Home Buyer</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="Land Home Buyer -> Web Design/Development"><i class="bx bx-plus"></i></a>
                  <a href="https://www.landhomebuyer.com/" target="_blank" title="view site"><i class="icofont-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Maxicom</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.JPG" data-gall="portfolioGallery" class="venobox" title="Maxicom -> Web Design/Development"><i class="bx bx-plus"></i></a>
                  <a href="https://maxicom.co.nz/" target="_blank" title="view site"><i class="icofont-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-eco">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Medicalmart</h4>
                <p>Ecomerce</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.JPG" data-gall="portfolioGallery" class="venobox" title="Medicalmart -> Web Design/Development"><i class="bx bx-plus"></i></a>
                  <a href="https://medicalmart.ng/" target="_blank" title="view site"><i class="icofont-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-graphics">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Xtreme Imagery</h4>
                <p>Graphics Design</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpeg" data-gall="portfolioGallery" class="venobox" title="Xtreme Imagery -> Graphics Design"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-graphics">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-10.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Ikorodu Mega Trade Fair</h4>
                <p>Graphics Design</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-10.jpeg" data-gall="portfolioGallery" class="venobox" title="Ikorodu Mega Trade Fair -> Graphics Design"><i class="bx bx-plus"></i></a>              
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-graphics">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-11.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Beat Collection</h4>
                <p>Graphics Design</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-11.jpeg" data-gall="portfolioGallery" class="venobox" title="Beat Collection -> Graphics Design"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-graphics">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-12.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>OnModels Magazine</h4>
                <p>Graphics Design</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-12.jpeg" data-gall="portfolioGallery" class="venobox" title="OnModels Magazine -> Graphics Design"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

     <!-- ======= Testimonials Section ======= -->
    <section class="section-bg">
      <div class="section-title">
        <h2>See What People Are Saying About Us</h2>
      </div>
      <main id="testimonials" class="testimonials mt-0 p-0">
        <div class="container" data-aos="zoom-in">

          <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  xTream Solutions spares no effort in achieving companies’ objectives, with very dedicated and hard working team members.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                My experience with the xTream team was amazing. The team exceeded expectations by constantly finding ways to suit our preferences in our website design. I found the team very hardworking, working late in several nights for us to meet our deadline.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                xTream Team was very professional, and diligent in their design and development of our website. The project team was courteous and attentive to details.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Semira Quadri</h3>
              <h4>SignNation</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                xTream Solutions did outstanding work for SignNation on website Design. I was particularly impressed by their attention to detail and creativity – really world class delivery for a group of young folks.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

            <div class="testimonial-item">
              <img src="assets/img/testimonials/myLogo.png" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                xTream has provided my company with good and creative work for design of our stationery and cards at reasonable cost and on time. I will willingly recommend to any organization in need of their services.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>

          </div>

        </div>
      </main>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Get In Touch With Us</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>UnitC4 Awolowo, Ibadan, Oyo State Nigeria</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@xtreamtechsol.com<br>contact@xtreamtechsol.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+234 901 382 5804 <br> +234 808 374 3762<br></p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form method="post" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control"  placeholder="company Name" />
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email"  placeholder="Your Email" />
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject"  placeholder="Subject" />
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5"  placeholder="Message"></textarea>
              </div>
              <div class="text-center"><button type="submit" name="contact">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- Modal sections  -->
    <!-- FAQs Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Frequently Asked Questions</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <main id="faq" class="faq">
                  <div class="container" data-aos="fade-up">
                    <ul class="faq-list" data-aos="fade-up">

                      <li>
                        <a data-toggle="collapse" class="collapsed" href="#faq1">What domain name should I choose? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq1" class="collapse" data-parent=".faq-list">
                          <p>
                            The choice of domain name depends on how you plan to use it. In most cases, it makes sense to choose one that is easy to pronounce and spell if you will be telling people about it over the phone. Above all, you should choose a name that is memorable and not confusing.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">How long will it take for my website to be designed? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq2" class="collapse" data-parent=".faq-list">
                          <p>
                            The time it takes to build a site depends on the complexity of the site. If you have a deadline, we will work hard to meet it. The most common cause of delay is the content (text/images) from the client.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">Do we need to have a meeting to discuss the website design? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq3" class="collapse" data-parent=".faq-list">
                          <p>
                            Most of the time, a meeting isn't necessary and the work is completed with only discussions over phone and email. We upload our work to private websites that only clients can access. We then work with you to discuss the site and review changes. The site isn't made available to the public until it looks and works exactly as you wish.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">How much will a website cost me? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq4" class="collapse" data-parent=".faq-list">
                          <p>
                            The cost of a website varies depends on its complexity. We are happy to discuss your requirements and provide a quote at any time.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">Once my website design is completed, what after-sales service do you offer? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq5" class="collapse" data-parent=".faq-list">
                          <p>
                            We fully support any website we design and are always available should you encounter any problems or require new enhancements. We also offers website hosting and maintenance.
                          </p>
                        </div>
                      </li>

                      <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">Do I have to keep my website with you forever? Can I move it to another provider? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                        <div id="faq6" class="collapse" data-parent=".faq-list">
                          <p>
                            You may move your site to another Web hosting service at any time. Once your design has been completed, we send you a copy of the site
                          </p>
                        </div>
                      </li>

                    </ul>

                  </div>
                </main><!-- End Frequently Asked Questions Section -->
          </div>
          <div class="modal-footer" style="border: none;">
            <button type="button" class="btn text-light" data-dismiss="modal" style="background-color: #DA393B">Got it!</button>
          </div>
        </div>
      </div>
    </div>
  </main><!-- End #main -->
  <!-- Modal -->
  <div class="modal modal-md fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Experience Our Top Rated Service</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="contact" method="POST"> 
          <div class="modal-body">
          <div id="form-title">
            </div>
              <fieldset class="row">
                <div class="col-12 col-md-6">
                  <label>Company Name</label>
                  <input placeholder="Company Name" type="text" class="form-control" name="name" required>
                </div>
                <div class="col-12 col-md-6">
                  <label class="mt-3 mt-md-0">Phone</label>
                  <input placeholder="Your Phone" type="tel" class="form-control" name="phone" required>
                </div>
              </fieldset>
              <fieldset class="row">
                <div class="col-12 col-md-6">
                  <label>Email</label>
                  <input placeholder="Your Email" type="email" class="form-control" name="email" required>
                </div>
                <div class="col-12 col-md-6">
                  <label class="mt-3 mt-md-0">Service</label>
                  <select class="form-control" name="service" placeholder="select a service">
                    <option>Web Design</option>
                    <option>UI/UX Design</option>
                    <option>Wordpress</option>
                    <option>Ecommerce</option>
                    <option>Blog</option>
                    <option>Graphics Design</option>
                    <option>Logo Design</option>
                    <option>3D Animation</option>
                  </select>
                </div>
              </fieldset>

              <fieldset>
              <label>Project Description</label>
              <textarea placeholder="Type your message here...." class="form-control" name="message"></textarea>
            </fieldset>
                
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger" name="project">Start Project</button>
          </div>
          </form>
        </div>
      </div>
    </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" class="mb-3" alt="" height="35px"></a>
            <p>
              UnitC4 Awolowo<br>
              Ibadan, Oyo State<br>
              Nigeria <br><br>
              <strong>Phone:</strong> +234 901 382 5804<br>
              <strong>Email:</strong> info@xtreamtechsol.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#faqs" data-toggle="modal" data-target="#exampleModalLong">FAQs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#exampleModal" class="about-btn" data-toggle="modal">Start A Project</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#exampleModal" class="about-btn" data-toggle="modal">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#exampleModal" class="about-btn" data-toggle="modal">UI/UX Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#exampleModal" class="about-btn" data-toggle="modal">WordPress</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#exampleModal" class="about-btn" data-toggle="modal">Content Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#exampleModal" class="about-btn" data-toggle="modal">Graphic Design</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Subscribe to our social communications</h4>
            <p>Subscribe to our social communications to receive the latestnews and exclusive offers.</p>
            <form action="https://xtreamtechsol.us7.list-manage.com/subscribe/post?u=96167c438e09828acf29cb341&amp;id=86a0da2021" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate >
              <input type="email" name="EMAIL"><input type="submit" name="subscribe" class="text-light" value="Get Now">
            </form>
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>xTream Tech Solutions</span></strong>. All Rights Reserved
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/SolutionsXtream" title="twitter" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/xTreamtechsolutions" title="facebook" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/xtreamtechsolutions" title="instagram" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/xtream-tech-solutions-180404200/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="WAButton" style="width: 30px !important;"></div>

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/index.js"></script>
  <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>
  </body>
</html>
