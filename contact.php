<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/5d11a4cc77.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>

    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <title>Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters</title>
  </head>
  <body>
    <?php include 'inc/connection.php';?>
    <!-- Cookie PopUp Main -->
      <?php include 'inc/cookie-app.php' ?>
    <!-- /Cookie PopUp Main -->

    <main class="main">

    <!-- Sidemenu -->
    <div class="sidemenu-overlay">
    </div>
    <!-- /Sidemenu -->

    <div class="page-full">

      <!-- Header -->
      <header>
        <div class="top-page-nonindex">
          <?php include 'inc/header.php' ?>
        </div>
      </header>
      <!-- /Header -->

      <!-- Main -->
      <div class="main-content">
        <div class="contact-top">
          <div class="container">
            <span class="contact-top-text"><strong>Home</strong></span><span class="contact-top-text">/&nbsp;&nbsp;Our Offices</span>
          </div>
        </div>
        <div class="h1 contact-header">
          <div class="container">
            <span>Our Offices</span>
          </div>
        </div>
        <div class="container">
          <!-- Office Cards -->
          <div class="offices-cards">
            <!-- Office Card 1 -->
            <div class="office-card-outer">
              <div class="office-card-top">
                <img class="office-card-header" src="https://www.netmatters.co.uk/assets/images/offices/cambridge.jpg" alt="">
                <div class="office-card-content">
                  <div class="office-card-title">
                    <a class="h2" href="#">Cambridge Office</a>
                  </div>
                  <span class="p">
                    Unit 1.28,<br>
                    St John's Innovation Centre,<br>
                    Cowley Road, Milton,<br>
                    Cambridge,<br>
                    CB4 0WS
                  </span>
                  <div class="office-card-phone">
                    <a class="h3" href="#">01223 37 57 72</a>
                  </div>
                  <div class="office-card-btn-container">
                    <div class="btn webdesign">
                      view more
                    </div>
                  </div>
                </div>
              </div>
              <div id="map" class="map"></div>
            </div>
            <!-- Office Card 2 -->
            <div class="office-card-outer">
              <div class="office-card-top">
                <img class="office-card-header" src="https://www.netmatters.co.uk/assets/images/offices/wymondham.jpg" alt="">
                <div class="office-card-content">
                  <div class="office-card-title">
                    <a class="h2" href="#">Wymondham Office</a>
                  </div>
                  <span class="p">
                    Unit 15,<br>
                    Penfold Drive,<br>
                    Gateway 11 Business Park,<br>
                    Wymondham, Norfolk,<br>
                    NR18 0WZ<br>
                  </span>
                  <div class="office-card-phone">
                    <a class="h3" href="#">01603 70 40 20</a>
                  </div>
                  <div class="office-card-btn-container">
                    <div class="btn webdesign">
                      view more
                    </div>
                  </div>
                </div>
              </div>
              <div id="mapTwo" class="map"></div>
            </div>
            <!-- Office Card 3 -->
            <div class="office-card-outer">
              <div class="office-card-top">
                <img class="office-card-header" src="https://www.netmatters.co.uk/assets/images/offices/yarmouth-2.jpg" alt="">
                <div class="office-card-content">
                  <div class="office-card-title">
                    <a class="h2" href="#">Great Yarmouth Office</a>
                  </div>
                  <span class="p">
                    Suite F23,<br>
                    Beacon Innovation Centre,<br>
                    Beacon Park, Gorleston,<br>
                    Great Yarmouth, Norfolk,<br>
                    NR31 7RA<br>
                  </span>
                  <div class="office-card-phone">
                    <a class="h3" href="#">01493 60 32 04</a>
                  </div>
                  <div class="office-card-btn-container">
                    <div class="btn webdesign">
                      view more
                    </div>
                  </div>
                </div>
              </div>
              <div id="mapThree" class="map"></div>
            </div>
          </div>
          <!-- /Office Cards -->
          <div class="contact-page-form-section">
            <!-- Contact Text -->
            <div class="contact-text">
              <p><strong>Email us on:</strong></p>
              <p><a class="h3" href="">sales@netmatters.com</a></p>
              <p><strong>Business hours:</strong></p>
              <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
              <p class="out-of-hours-text out-of-hours-btn"><strong>Out of Hours IT Support&nbsp;</strong><i class="fas fa-chevron-down text-dark-grey out-of-hours-toggle"></i></p>
              <div class="out-of-hours">
                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                <p><strong>
                  Monday - Friday 18:00 - 22:00
                     Saturday 08:00 - 16:00
                     Sunday 10:00 - 18:00
                </strong>
                 </p>
                <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours voicemail.
                  A technician will contact you on the number provided within 45 minutes of your call. </p>
              </div>
            </div>
            <!-- /Contact Text -->
            <!-- Contact Form -->
            <form id="contact-form" class="contact-form-outer" method="post" action="inc/post.php">
              <?php
                  echo display_notice();

                  echo display_errors();

              ?>

              <div class="form-group">
                <div class="contact-form-section">
                  <label class="required" for="name">Your Name</label>
                  <input class="text-input-field" type="text" id="name" name="name" required>
                </div>

                <div class="contact-form-section">
                  <label class="required" for="email">Your Email</label>
                  <input class="text-input-field" type="text" id="email" name="email" required>
                </div>
              </div>

              <div class="form-group">
                <div class="contact-form-section">
                  <label class="required" for="phone">Your Telephone Number</label>
                  <input class="text-input-field" type="text" id="telephone" name="telephone" required>
                </div>

                <div class="contact-form-section">
                  <label class="required" for="subject">Subject</label>
                  <input class="text-input-field" type="text" id="subject" name="subject" required>
                </div>
              </div>

              <div class="contact-form-message-section">
                <label class="required" for="message">Message</label>
                <textarea class="text-input-field textarea-field" id="message" name="message" rows="8" cols="80" required></textarea>
              </div>

              <div class="contact-form-bottom">
                <div class="checkbox-area">
                  <div class="checkbox-cnt">
                    <input id="newsletter-checkbox" class="checkbox-style" type="checkbox" name="newsletter-checkbox" value="">
                    <label class="checkbox-style" for="newsletter-checkbox"></label>
                  </div>
                  <label class="checkbox-text" for="newsletter-checkbox">
                    Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data.
                  </label>
                </div>

                <div class="contact-form-button">
                  <button class="btn webdesign" type="submit" name="button" value="Submit">send enquiry</button>
                </div>
              </div>

            </form>
            <!-- /Contact Form -->
          </div>
        </div>
        <!--  Newsletter Sign up -->
        <?php include 'inc/newsletter-signup.php' ?>
        <!-- / Newsletter signup -->
      </div>
      <!-- /Main -->

      <!-- Footer -->
      <?php include 'inc/footer.php' ?>
      <!-- /Footer -->

    </div>
  </main>
  <!-- /Main -->

  <!-- Sidemenu -->
    <?php include 'inc/side-menu.php' ?>
  <!-- /Sidemenu -->

  <!-- Scripts -->
  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/show-outofhours.js"></script>
  <script src="js/maps.js"></script>
  <script src="js/email-validation.js"></script>
  <script type="text/javascript">
  checkCookie();
  </script>
  <!-- Scripts -->
  </body>
</html>
