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

    <br><br><br>

    <section id ="profile-page">
      <div class = "container">
        <div class = "row">
          <div class = "col-3">
            <div class="vh-50 list-group">
              <a href="" class="btn-lg list-group-item list-group-item-action border-0 active" aria-current="true" >
                <i class="fas fa-tachometer-alt pr-2"></i> Dashboard
              </a>
              <a href="" class="btn-lg list-group-item list-group-item-action border-0">
                <i class="fas fa-tasks pr-2"></i> Progress</a>
              </a>
              <a href="" class="btn-lg list-group-item list-group-item-action border-0">
                <i class="fas fa-book pr-2"></i> My Post</a>
              </a>
              <a href="" class="btn-lg list-group-item list-group-item-action border-0">
                <i class="far fa-question-circle pr-2"></i> Help</a>
              </a>
              <a href="" class="btn-lg list-group-item list-group-item-action border-0">
                <i class="fas fa-cog"></i> Settings</a>
              </a>
            </div>
          </div>
          <div class = "col-9">Content</div>
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
