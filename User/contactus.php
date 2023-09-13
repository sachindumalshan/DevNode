<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font awesome icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- CSS file link -->
    <link rel="stylesheet" type="text/css" href="CSS/style.css">

    <title>DevNode</title>
  </head>
  <body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#082b8f">
        <div class="container">
            <a href="index.html" class="navbar-brand">
                <img src="img/devnode.png" class="me-2" height="40" alt="DevNode" loading="lazy"/>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link active" >Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.html" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="contactus.html" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="profile.html" class="nav-link"><i class="fas fas fa-user-circle"></i> Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Us -->
    <section class="mb-4" style="margin-top:5%">
      <div class="container">
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Us</h2>
        <p class="text-center w-responsive mx-auto mb-4">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
        <hr style="height:2px"/>
        <div class="row">
          <div class="col-md-1 mb-md-0 mb-5"></div>
          <div class="col-md-6 mb-md-0 mb-5">
              <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group mt-4 mb-4">
                          <input type="text" class="form-control" id="contactName" placeholder="Name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mt-4 mb-4">
                          <input type="email" class="form-control" id="contactEmail" placeholder="Email">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group mb-4">
                          <input type="text" class="form-control" id="contactSubject" placeholder="Subject">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group mb-4">
                          <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" placeholder="Message"></textarea>
                        </div>
                      </div>
                  </div>
              </form>
              <div class="text-center text-md-left mt-1">
                  <a class="btn btn-primary w-100" onclick="document.getElementById('contact-form').submit();">SEND</a>
              </div>
              <div class="status"></div>
          </div>
          <div class="col-md-1 mb-md-0 mb-5"></div>
          <div class="col-md-3 text-center mt-4">
              <ul class="list-unstyled mb-0">
                  <li><i class="fas fa-map-marker-alt fa-2x"></i>
                      <p>DevNode (PVT) LTD,<br/>
                        No.201, Pahala Bomiriya,<br/>
                        Kaduwela.<br/>
                        10640</p>
                  </li>
                  <li><i class="fas fa-phone mt-4 fa-2x"></i>
                      <p>+94 76 616 6355</p>
                  </li>
                  <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                      <p>sachindu.info@gmail.com</p>
                  </li>
              </ul>
          </div>
          <div class="col-md-1 mb-md-0 mb-5"></div>
        </div>
      </div>
    </section>

    <div class="fixed-bottom">
      <!-- Middle footer -->
      <section id="detail-section" class="pt-4 text-white" style="background-color: #082b8f;">
          <div class="container">
              <div class="row">
                  <div class="col-md-3 footer-link">
                      <h5>Quick Links</h5>
                        <a class="detail_link" href="aboutus.html" ><h6 class="footer-link-text">About Us</h6></a>
                        <a class="detail_link" href="contactus.html" ><h6 class="footer-link-text">Contact Us</h6></a>
                        <a class="detail_link" href="faq.html" ><h6 class="footer-link-text">FAQ</h6><br></a>
                        <a class="detail_link" href="term.html" ><h6 class="footer-link-text">Terms and Conditions</h6></a>
                  </div>

                  <hr class="ml-3 d-block d-sm-none" style="width: 75%; background-color: white;" >

                  <div class="col-md-3 ">
                      <div>
                          <i class="fas fa-map-marker-alt"></i> Location :
                          <h6 class="mt-2">DevNode (PVT) LTD,<br> No.201, Pahala Bomiriya,<br>Kaduwela.<br>10640</h6>
                      </div>
                      <div class="mt-4">
                          <i class="fas fa-phone-square-alt"></i> Telephone :
                          <h6 class="mt-2">Work &ensp;&nbsp;: +94 71 760 9016<br>Mobile : +94 76 616 6355</h6>
                      </div>
                  </div>
                  <hr class="ml-3 d-block d-sm-none" style="width: 75%; background-color: white;" >

                  <div class="col-md-6 ">
                       <h3>NEWSLETTER</h3>
                       <p class="my-4 text-justify">Stay in the loop with our newsletter! Get the latest updates, articles, and insights from our blog delivered right to your inbox. Join our community of readers and never miss out on valuable content again. Subscribe now and be part of our blog's journey!</p>
                      <div class="input-group mb-4 col-md-9 pl-0">
                          <input type="text" class="form-control" placeholder="Your Email Address"/>
                          <button class="btn btn-primary" type="button">Subscribe</button>
                      </div>
                  </div>
                  <hr class="ml-3 d-block d-sm-none" style="width: 75%; background-color: white;">
                  <hr class="d-none d-md-block mt-2" style="color: whitesmoke; height: 3px;">
              </div>
          </div>
      </section>

      <!-- Footer -->
      <footer id="main-footer" class="py-1 text-white" style="background-color: #082b8f;">
        <div class="container">
          <div class="row">
            <div class="col">
            <p>Copyright &copy;
                <span id="year"></span> DevNode | All Rights Reserved</p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    </script>

  </body>
</html>
