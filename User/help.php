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
              <a href="profile.php" class="btn-lg list-group-item list-group-item-action border-0">
                <i class="fas fa-tachometer-alt pr-2"></i> Dashboard
              </a>
              <a href="progress.php" class="btn-lg list-group-item list-group-item-action border-0">
                <i class="fas fa-tasks pr-2"></i> Progress</a>
              </a>
              <a href="mypost.php" class="btn-lg list-group-item list-group-item-action border-0">
                <i class="fas fa-book pr-2"></i> My Post</a>
              </a>
              <a href="help.php" class="btn-lg list-group-item list-group-item-action border-0 active" aria-current="true">
                <i class="far fa-question-circle pr-2"></i> Help</a>
              </a>
              <a href="" class="btn-lg list-group-item list-group-item-action border-0">
                <i class="fas fa-cog"></i> Settings</a>
              </a>
            </div>
          </div>

          <div class="col-md-9" id="dprofile">
            <div class="card bg-light mb-3">

              <div class="accordion accordion-flush" id="accordionHelp">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      1. What is the purpose of this tech blog site?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">The purpose of our tech blog site is to provide readers with valuable insights, updates, and tutorials on a wide range of technology-related topics. We aim to keep you informed about the latest tech trends, product reviews, how-to guides, and industry news.</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      2. How often is the blog updated with new content?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">We strive to update our blog regularly, typically publishing new articles multiple times a week. Our goal is to keep our readers up-to-date with fresh and relevant content on a consistent basis.</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      3. Can I contribute an article to your tech blog?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">Absolutely! We welcome guest contributions from tech enthusiasts and experts. If you have valuable insights, tips, or tech-related content to share, please check our submission guidelines and contact us to discuss your ideas.</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                      4. Are the articles on your blog free to access?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">Yes, all the articles on our tech blog are freely accessible to anyone. We believe in sharing knowledge and information with the tech community without any paywalls or subscription requirements.</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                      5. How can I stay updated with the latest articles and announcements from your blog?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">You can stay updated with our latest articles and announcements by subscribing to our newsletter. Additionally, follow us on social media platforms like Twitter, Facebook, and LinkedIn, where we regularly share our content and interact with our readers. You can also enable browser notifications for instant updates.</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                      6. Do you have a comment section for your blog articles?
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">Yes, we have a comment section at the end of each article where readers can share their thoughts, ask questions, and engage in discussions related to the content. We encourage a respectful and insightful exchange of ideas.</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                      7. Can I request a specific topic or tutorial to be covered in your blog?
                    </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">Of course! We value your input. If there's a particular tech topic, product review, or tutorial you'd like to see on our blog, please use our "Contact Us" page to suggest ideas. We'll do our best to address your requests.</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                      8. Are your blog articles suitable for both beginners and advanced tech enthusiasts?
                    </button>
                  </h2>
                  <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">Yes, we strive to cater to a diverse audience. Our articles range from beginner-friendly guides to more in-depth analyses. We often label articles with skill-level indicators to help you find content that matches your expertise.</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                      9. How do you ensure the accuracy of the information in your articles?
                    </button>
                  </h2>
                  <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">Our team of writers and editors is dedicated to providing accurate and up-to-date information. We fact-check our articles, cite reputable sources, and stay informed about the latest developments in the tech industry. However, if you ever spot an error, please let us know, and we'll promptly correct it.</div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                      10. Can I share your blog articles on my own website or social media channels?
                    </button>
                  </h2>
                  <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionHelp">
                    <div class="accordion-body">Absolutely! We encourage you to share our articles with your network, as long as you provide proper attribution to our blog and authors. You can use the share buttons provided on our articles for easy sharing on social media platforms.</div>
                  </div>
                </div>
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

    <script>
      .collapse {
        &:not(.show) {
          display: none;
        }
        }

        .collapsing {
        height: 0;
        overflow: hidden;
        @include transition($transition-collapse);
        }
    </script>

  </body>
</html>
