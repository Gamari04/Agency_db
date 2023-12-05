
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="our agency Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/services.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <title>YourInterface</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon-32x32.png">

  </head>
  
  <body>


    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-light text-dark">
        <div class="container">
          <a class="navbar-brand text-dark" href="../index.html"><img src="../assets/img/logO/Untitled_design__12_-removebg-preview.png" alt="" height=55px></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active text-dark" href="../index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="../Pages/about.html">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item text-dark" href="../Pages/contact.html">Contact us</a>
                  <a class="dropdown-item text-dark" href="../Pages/services.html">Services</a>
                  <a class="dropdown-item text-dark" href="../Pages/login.html">LogIn</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="../Pages/blog.html">Blog</a>
              </li>
              
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="btn btn-primary"href="signUp.php">Sign Up</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header> 


    <section class="Hero-section container-fluid ">
      <div class="row align-items-center px-5">
        <div class=" header_text col-sm-6 ">
          <h1 class="  w-40">
            Revolutionizing web interfaces: Yourinterface Solutions!
          </h1>
          <p >
            Discover your dream property with HomeHub! We're your trusted
            partner for innovative real estate solutions. Explore our listings,
            access expert advice, and embark on a journey to find your ideal
            home.
          </p>
        </div>
        <div class=" col-sm-6 ">
          <img
            src="../assets/img/web_design.jpg"
            class="img-fluid w-75 mt-5 mb-5 mx-5"
            alt="web design"
          />
        </div>
      </div>
    </section>
    <section class="section_services">
      <h1 class="text-center mt-5">Services</h1>
      <img src="../assets/img/Line 4.png" alt="line" class="m-auto d-block " />

      <div class="row mt-5 mx-5">
        <div class="col-sm-3 mb-3 mb-sm-0 " onclick="signup($fullname,$email,$role, $password,$connexion)">
          <div class="card service_card">
            <div class="card-body">
              <img
                src="../assets/img/programming 1.png"
                alt="Web"
                class="m-auto d-block line_moving"
              />
              <h4 class="card-title text-center">Web Design</h4>
              <p class="card-text text-center">
                functional websites that effectively communicate information and
                engage with online audiences.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card service_card">
            <div class="card-body">
              <img
                src="../assets/img/programming 2.png"
                alt="UX design"
                class="m-auto d-block line_moving"
              />
              <h4 class="card-title text-center">UI/UX Design</h4>
              <p class="card-text text-center">
                focuses in the design that can on crafting intuitive user
                interfaces and seamless user experiences.
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card service_card">
            <div class="card-body">
              <img
                src="../assets/img/Group 38566.png"
                alt="graphic design"
                class="m-auto d-block line_moving"
              />
              <h5 class="card-title text-center">Graphics design</h5>
              <p class="card-text text-center">
                the creative process of combining visual elements, typography,
                and imagery to communicate ideas
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card service_card">
            <div class="card-body">
              <img
                src="../assets/img/seo 1.png"
                alt="seo marketing"
                class="m-auto d-block line_moving"
              />
              <h5 class="card-title text-center">SEO Marketing</h5>
              <p class="card-text text-center">
                SEO marketing can enhance a website's ranking, its online
                presence and visibility to potential customers.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about_section container mb-5 mt-5">
      <div class="row align-items-center ">
        <div class="col-sm-6">
          <img src="../assets/img/about image3.png" alt="creative" class=" img-fluid about_img line_moving" />
        </div>
        <div class="col-sm-6">
          <h1 class="mb-5">
            We are a <span class="text-primary">creative agency</span>
          </h1>
          <p class="w-75">
            We founded Yourinterface in 2018 with the idea of creating a place
            to collaborate with smart and talented people who are not afraid of
            hard and challenging work.Together with our partners, we have been
            developing high-quality websites ever since.
          </p>
          <a href="../Pages/about.html" class="btn btn-primary">More About Us</a>
        </div>
      </div>
    </section>

    


    <section class="recent-works container-fluid pt-5 pb-5 wrapper">
      <h1 class="text-center pb-5">Our recent works</h1>
      <i id="left" class="fa-solid fa-angle-left"></i>
      <div class="carousel mx-5">
        <div class=" ">
          <div class="card_works card  h-100 w-75 ">
            <img src="../assets/img/Site1.png" class="card-img-top " alt="exemple design medical web site ">
            <div class="card-body">
              <h3 class="card-title ">Medical Website</h3>
              <p class="card-text mb-3"> a digital platform dedicated to providing accurate and reliable information about various medical conditions.</p>
             
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Read More
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p> a digital platform dedicated to providing accurate and reliable information about various medical conditions.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
            </div>
          </div>
        </div>

        <div class="">
          <div class="card_works card  h-100 w-75">
            <img src="../assets/img/Site3.png" class="card-img-top" alt="exemlpe cleaning web site">
            <div class="card-body">
              <h3 class="card-title">Cleaning Website</h3>
              <p class="card-text mb-3"> a virtual space that connects homeowners and businesses with professional cleaning services.</p>
              <!-- <h6>Read More <img src="../assets/img/Vector.svg"  alt="index"></h6>
              <hr class="line "> -->

              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Read More
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>a virtual space that connects homeowners and businesses with professional cleaning services.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>


        <div class="">
          <div class="card_works card h-100 w-75">
            <img src="../assets/img/Site2.png" class="card-img-top " alt="exemple design crypto web site">
            <div class="card-body">
              <h3 class="card-title">Currency Website</h3>
              <p class="card-text mb-3">an online hub that offers information, updates, and resources related to digital currencies like Bitcoin, Ethereum, and others.</p>
              <!-- <h6>Read More <img src="../assets/img/Vector.svg"  alt="index"></h6>
              <hr class="line"> -->


              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Read More
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>an online hub that offers information, updates, and resources related to digital currencies like Bitcoin, Ethereum, and others.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="">
          <div class="card_works card  h-100 w-75">
            <img src="../assets/img/Site3.png" class="card-img-top" alt="exemlpe cleaning web site">
            <div class="card-body">
              <h3 class="card-title">Cleaning Website</h3>
              <p class="card-text mb-3"> a virtual space that connects homeowners and businesses with professional cleaning services.</p>
              <!-- <h6>Read More <img src="../assets/img/Vector.svg"  alt="index"></h6>
              <hr class="line "> -->

              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Read More
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>a virtual space that connects homeowners and businesses with professional cleaning services.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        
        <div class=" ">
          <div class=" card_works card  h-100 w-75 ">
            <img src="../assets/img/Site1.png" class="card-img-top " alt="exemple design medical web site ">
            <div class="card-body">
              <h3 class="card-title ">Medical Website</h3>
              <p class="card-text mb-3"> a digital platform dedicated to providing accurate and reliable information about various medical conditions.</p>
              <!-- <h6>Read More <img src="../assets/img/Vector.svg"  alt="index"></h6>
              <hr class="line"> -->

              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Read More
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p> a digital platform dedicated to providing accurate and reliable information about various medical conditions.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>

        <div class="">
          <div class=" card_works card  h-100 w-75">
            <img src="../assets/img/Site3.png" class="card-img-top" alt="exemlpe cleaning web site">
            <div class="card-body">
              <h3 class="card-title">Cleaning Website</h3>
              <p class="card-text mb-3"> a virtual space that connects homeowners and businesses with professional cleaning services.</p>
              <!-- <h6>Read More <img src="../assets/img/Vector.svg"  alt="index"></h6>
              <hr class="line "> -->

              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Read More
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>a virtual space that connects homeowners and businesses with professional cleaning services.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>

         <div class="">
          <div class="card_works card h-100 w-75 ">
            <img src="../assets/img/Site2.png" class="card-img-top " alt="exemple design crypto web site">
            <div class="card-body">
              <h3 class="card-title">Currency Website</h3>
              <p class="card-text mb-3">an online hub that offers information, updates, and resources related to digital currencies like Bitcoin, Ethereum, and others.</p>
              <!-- <h6>Read More <img src="../assets/img/Vector.svg"  alt="index"></h6>
              <hr class="line"> -->


              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Read More
              </button>
              
              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <p>an online hub that offers information, updates, and resources related to digital currencies like Bitcoin, Ethereum, and others.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

      <i id="right" class="fa-solid fa-angle-right"></i>
    </section>

    <section class="section_pricing">
      <h1 class="text-center mt-5 mb-5">
        Choose a Right <span class="text-primary">Plan for You </span>
      </h1>

      <div class="row mx-5">
        <div class="col-sm-4">
          <div class="card border border-primary w-75">
            <div class="card-body">
              <h3 class="card-title text-center">Free</h3>
              <p class="text-secondary text-center">Enjoy our Free Services</p>
              <img src="../assets/img/Frame 98.png" alt="prix" class="m-auto d-block" />
              <div class="card-text">
                  <h6><img src="../assets/img/tcheck.svg" alt="icon"  >    responsive website with 5 pages. </h6>  
                  <h6><img src="../assets/img/tcheck.svg" alt="icon"  >    Domain and hosting setup. </h6> 
                  <h6><img src="../assets/img/tcheck.svg" alt="icon"  >    Basic SEO optimization. </h6>  
                  <h6><img src="../assets/img/tcheck.svg" alt="icon"  >    Contact form and lead features. </h6>  
                  <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    Integration with a easy updates. </h6>  

                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card border border-primary w-75">
            <div class="card-body">
              <h3 class="card-title text-center">Pro</h3>
              <p class="text-secondary text-center">Enjoy our Free Services</p>
              <img src="../assets/img/Frame 100.png" alt="price" class="m-auto d-block" />
              <p class="card-text">
                <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    responsive website with 5 pages. </h6>  
                  <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    Domain and hosting setup.</h6> 
                  <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    Basic SEO optimization. </h6>  
                  <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    Contact form and lead features. </h6>  
                  <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    Integration with a easy updates. </h6>  

              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="card border border-primary w-75">
            <div class="card-body">
              <h3 class="card-title text-center">Business</h3>
              <p class="text-secondary text-center">Enjoy our Free Services</p>
              <img src="../assets/img/Frame 908.png" alt="price" class="m-auto d-block" />
              <p class="card-text">
                <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    responsive website with 5 pages. </h6>  
                  <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    Domain and hosting setup. </h6> 
                  <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    Basic SEO optimization. </h6>  
                  <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    Contact form and lead features. </h6>  
                  <h6><img src="../assets/img/tcheck.svg" alt=" icon"  >    Integration with a easy updates. </h6>  

              </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <footer>
      <!-- tp-footer-area-start -->
      <div class="tp-footer-area footer-bg pt-5 mt-5">
        <div class="container">
          <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-30">
              <div class="tp-footer-widget z-index-3">
                <div class="tp-footer-widget__title">
                  <h4 class="tp-footer-title">Product</h4>
                </div>
                <div class="tp-footer-widget__list">
                  <ul>
                    <li><a href="index.html">Landing Page</a></li>
                    <li><a href="#">Popup Builder</a></li>
                    <li><a href="#">Web-design</a></li>
                    <li><a href="#">Content</a></li>
                    <li><a href="#">Integrations</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-2 col-md-3 col-6 mb-30">
              <div class="tp-footer-widget footer-space-one z-index-3">
                <div class="tp-footer-widget__title">
                  <h4 class="tp-footer-title">Use Cases</h4>
                </div>
                <div class="tp-footer-widget__list">
                  <ul>
                    <li><a href="#">Web-designers</a></li>
                    <li><a href="#">Marketers</a></li>
                    <li><a href="#">Small Business</a></li>
                    <li><a href="#">Website Builder</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-30">
              <div class="tp-footer-widget footer-space-two z-index-3">
                <div class="tp-footer-widget__title">
                  <h4 class="tp-footer-title">Resources</h4>
                </div>
                <div class="tp-footer-widget__list">
                  <ul>
                    <li><a href="#">Academy</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#">Themes</a></li>
                    <li><a href="#">Hosting</a></li>
                    <li><a href="#">Developers</a></li>
                    <li><a href="contact.html">Support</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-30">
              <div class="tp-footer-widget footer-space-three z-index-3">
                <div class="tp-footer-widget__title">
                  <h4 class="tp-footer-title">Product</h4>
                </div>
                <div class="tp-footer-widget__list">
                  <ul>
                    <li><a href="index.html">Landing Page</a></li>
                    <li><a href="#">Popup Builder</a></li>
                    <li><a href="#">Web-design</a></li>
                    <li><a href="#">Content</a></li>
                    <li><a href="#">Integrations</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-30">
              <div class="tp-footer-widget z-index-3">
                <div class="tp-footer-widget__title">
                  <h4 class="tp-footer-title">Contact Us</h4>
                </div>
                <div class="tp-footer-widget__list">
                  <ul class="footer-position">
                    <li>
                      <a href="#" target="_blank">
                        <span><i class="fal fa-map-marker-alt"></i></span>
                        Wisconsin Ave, Suite 700 Chevy Chase, Maryland 20815</a
                      >
                    </li>

                    <li>
                      <a href="tel:778886664">
                        <span><i class="fal fa-phone-alt"></i></span>
                        088 (778 886 664)</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <br />
          <br />

          <div class="copy-right-wrapper z-index-3">
            <div class="row">
              <div class="col-xl-6 col-lg-7 col-12">
                <div class="copyright-left text-center text-lg-start">
                  <p>©Copy RIght @2023 All Rights Reserved - C3Group</p>
                </div>
              </div>
              <div class="col-xl-6 col-lg-5 col-12">
                <div class="copyright-right-side text-center text-lg-end">
                  <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Sales and Refunds</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <script       src="https://code.jquery.com/jquery-3.3.1.slim.min.js"       integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"       crossorigin="anonymous"     ></script>     <script       src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"       integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"       crossorigin="anonymous"     ></script>     <script       src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"       integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"       crossorigin="anonymous"     ></script>

    <script src="../assets/JS/bootstrap.bundle.min.js"></script>
    <script src="../assets/JS/script.js"></script>
  </body>
</html>
