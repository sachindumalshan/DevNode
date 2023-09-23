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
  <body style="min-height:100vh;display:flex;flex-direction:column;">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#082b8f">
        <div class="container">
            <a href="index.php" class="navbar-brand">
                <img src="img/devnode.png" class="me-2" height="40" alt="DevNode" loading="lazy"/>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active" >Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="aboutus.php" class="nav-link">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="contactus.php" class="nav-link">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="profile.php" class="nav-link"><i class="fas fas fa-user-circle"></i> Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id = "header-bar" style="margin-top:3%;">
        <div class="bg-image" style="background-image: url('img/technology.jpg');height: 14vh;">
          <div class="mask" style="background-color: rgba(0, 0, 0, 0.5); height: 14vh;">
            <div class="d-flex justify-content-center align-items-center h-100">
              <div class="input-group" style="width:25%; height:40%">
                <input class="form-control mr-sm-2" type="search" placeholder="Search by Post ..." aria-label="Search" >
                <button class="btn btn-outline-light my-2 my-sm-0 px-4" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section id="post-section" class="my-5">
      <div class="container">
        <div class="row mb-4">
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="blog-single.html"><img src="img/post-1.jpg" alt="" class="img-fluid"/></a>
                </div>
                <div class="card-body">
                  <div class="card-category-box">
                    <div class="card-category">
                      <h6 class="category">Robotics</h6>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="blog-single.html" class="text-decoration-none text-dark">Robotic Technology</a>
                  </h3>
                  <p class="card-description">
                    Robotic technology is the branch of engineering and science that deals with the design, development, and operation of robots.
                    Robotics is the application of technology to automate tasks that would otherwise utomate tasks that would outomate tasks that would o
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a href="" class="btn btn-md btn-warning btn-center">Read More <i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="blog-single.html"
                    ><img src="img/post-2.jpg" alt="" class="img-fluid"
                  /></a>
                </div>
                <div class="card-body">
                  <div class="card-category-box">
                    <div class="card-category">
                      <h6 class="category">AI</h6>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="blog-single.html" class="text-decoration-none text-dark">The Impact of Artificial Intelligence</a>
                  </h3>
                  <p class="card-description">
                    Artificial Intelligence, commonly known as AI, is the simulation of human intelligence in machines. The field of AI research was founded on the belief that a machine can be made to think like a human...
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a href="" class="btn btn-md btn-warning btn-center">Read More <i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="blog-single.html"
                    ><img src="img/post-3.jpg" alt="" class="img-fluid"
                  /></a>
                </div>
                <div class="card-body">
                  <div class="card-category-box">
                    <div class="card-category">
                      <h6 class="category">Robotics</h6>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="blog-single.html" class="text-decoration-none text-dark">Robotic Engineering Applications</a>
                  </h3>
                  <p class="card-description">
                    obotic engineering is a rapidly growing field that is changing the way we live and work. It is the application of technology to automate tasks that would otherwise be performed by ...
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a href="" class="btn btn-md btn-warning btn-center">Read More <i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        <div class="row mb-4">
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="blog-single.html"><img src="img/post-1.jpg" alt="" class="img-fluid"/></a>
                </div>
                <div class="card-body">
                  <div class="card-category-box">
                    <div class="card-category">
                      <h6 class="category">Robotics</h6>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="blog-single.html" class="text-decoration-none text-dark">Robotic Technology</a>
                  </h3>
                  <p class="card-description">
                    Robotic technology is the branch of engineering and science that deals with the design, development, and operation of robots.
                    Robotics is the application of technology to automate tasks that would otherwise utomate tasks that would outomate tasks that would o
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a href="" class="btn btn-md btn-warning btn-center">Read More <i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="blog-single.html"
                    ><img src="img/post-2.jpg" alt="" class="img-fluid"
                  /></a>
                </div>
                <div class="card-body">
                  <div class="card-category-box">
                    <div class="card-category">
                      <h6 class="category">AI</h6>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="blog-single.html" class="text-decoration-none text-dark">The Impact of Artificial Intelligence</a>
                  </h3>
                  <p class="card-description">
                    Artificial Intelligence, commonly known as AI, is the simulation of human intelligence in machines. The field of AI research was founded on the belief that a machine can be made to think like a human...
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a href="" class="btn btn-md btn-warning btn-center">Read More <i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-blog">
                <div class="card-img">
                  <a href="blog-single.html"
                    ><img src="img/post-3.jpg" alt="" class="img-fluid"
                  /></a>
                </div>
                <div class="card-body">
                  <div class="card-category-box">
                    <div class="card-category">
                      <h6 class="category">Robotics</h6>
                    </div>
                  </div>
                  <h3 class="card-title">
                    <a href="blog-single.html" class="text-decoration-none text-dark">Robotic Engineering Applications</a>
                  </h3>
                  <p class="card-description">
                    obotic engineering is a rapidly growing field that is changing the way we live and work. It is the application of technology to automate tasks that would otherwise be performed by ...
                  </p>
                </div>
                <div class="card-footer text-center">
                  <a href="" class="btn btn-md btn-warning btn-center">Read More <i class="fas fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <div>
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
