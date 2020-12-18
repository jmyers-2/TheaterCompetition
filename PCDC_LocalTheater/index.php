<?php
session_start();
include("connection.php");
?>

<html>
    <head>
        <title>Block My seat| Movies</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href=“https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css”/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>
    </head>
<body>

<!---------------------Navigation Bar-------------------->
<section id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#"><img src="media/images/logo1.png"></a>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">

                <div class="search">
                    <div class="autocomplete" >
                    <form name="frm" action="takeme.php"  method="POST">
                        <input type="text" placeholder="   MOVIES | THEATERS "  id="myInput"  name="myCountry"  required >
                          <div class="icon">
                              <button type="submit" > <i class="fa fa-search"></i></button>
                          </div>

                      </form>
                      </div>
                  </div>

              </li>
          <li class="nav-item active">
            <a class="nav-link" href="#slider">HOME</a>
          </li>
          <?php  if(isset($_SESSION['username'])){
            echo " <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"logout.php\"> LOG OUT(" .$_SESSION['username']. ") </a>
            </li> ";
            }else{
             echo " <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"login.php\"> LOG IN </a>
              </li> ";
            } ?>
            <li class="nav-item active">
                  <a class="nav-link" href="#top">TOP MOVIES</a>
                </li>
          <!--
          <li class="nav-item">
            <a class="nav-link" href="#aboutus">ABOUT US</a>
          </li>
        -->
          <li class="nav-item">
            <a class="nav-link" href="#contactus">CONTACT US</a>
          </li>
        </ul>
      </div>
    </nav>
</section>

<!-----------------corousal(image slider)------------------------------------------->
<div id="slider">
  <div id="headerSlider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="media/images/WW84.jpg" class="d-block w-100" alt="...">

              <div class="carousel-caption d-none d-md-block">
                <h5>Wonder Woman 1984</h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="media/images/BadBoys4Life.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Bad Boys for Life</h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="media/images/Scoob!.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Scoob!</h5>
                <p></p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#headerSlide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#headerSlide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
  </div>
</div>

<!----------------------top movies--------------------------->
<section id="top">
  <div class="container">
    <h1>TOP MOVIES</h1>
    <br>
    <h4>Regal Azalea Square</h4>
      <div class="row">
        <div class="col-md-3">
          <div class="single-movie">
              <div class="name">
                <!--This script changes the movie titles-->
                  <h2><p id="output"></p></h2>
                  <script>
                  var titles = ['Mulan', 'Warrior Queen', 'Chinese Maiden']
                  var title = titles[Math.floor(Math.random() * titles.length)] // pick random item
                  document.title = title
                  document.getElementById('output').innerHTML = title;
                  </script>
                  <!--This script changes the movie times-->
                  <p id="output2"></p>
                  <script>
                  var times = ['2hr:30min', '24hr:00min', '0hr:15min']
                  var time = times[Math.floor(Math.random() * times.length)] // pick random item
                  document.time = time
                  document.getElementById('output2').innerHTML = time;
                  </script>
                </div>
                <div class="image">
                  <img src="media/images/Mulan.jpg" alt="">
                </div>
                <div class="button">
                  <a href="movies/mulan.html" class="buy-btn">BOOK NOW</a>
                </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="single-movie">
                <div class="name">
                    <h2>The Invisible Man</h2>
                    <p>2hr:30min</p>
                  </div>
                  <div class="image">
                    <img src="media/images/InvisibleMan.jpg" alt="">
                  </div>
                  <div class="button">
                    <a href="movies/invisible.html" class="buy-btn">BOOK NOW</a>
                  </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>Onward</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="media/images/onward.jpg" alt="">
                    </div>
                    <div class="button">
                      <a href="movies/onward.html" class="buy-btn">BOOK NOW</a>
                    </div>
              </div>
            </div>
            <div class="col-md-3">
                <div class="single-movie">
                    <div class="name">
                        <h2>Sonic</h2>
                        <p>2hr:30min</p>
                      </div>
                      <div class="image">
                        <img src="media/images/sonic.jpg" alt="">
                      </div>
                      <div class="button">
                        <a href="movies/sonic.html" class="buy-btn">BOOK NOW</a>
                      </div>
                </div>
              </div>
      </div>
      <br>
      <h4>Northwoods Stadium Cinema</h4>
      <div class="row">
          <div class="col-md-3">
            <div class="single-movie">
                <div class="name">
                    <h2>Harley Quinn: Birds of Prey</h2>
                    <p>2hr:30min</p>
                  </div>
                  <div class="image">
                    <img src="media/images/BirdsofPrey.jpg" alt="">
                  </div>
                  <div class="button">
                    <a href="#" class="buy-btn">BOOK NOW</a>
                  </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>Blood Shot</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="media/images/Bloodshot.jpg" alt="">
                    </div>
                    <div class="button">
                      <a href="#" class="buy-btn">BOOK NOW</a>
                    </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>Dolittle</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="media/images/dolittle.jpg" alt="">
                    </div>
                    <div class="button">
                      <a href="#" class="buy-btn">BOOK NOW</a>
                    </div>
              </div>
            </div>
              <div class="col-md-3">
                <div class="single-movie">
                    <div class="name">
                        <h2>The Gentlemen</h2>
                        <p>2hr:30min</p>
                      </div>
                      <div class="image">
                        <img src="media/images/gentlemen.jpg" alt="">
                      </div>
                      <div class="button">
                        <a href="#" class="buy-btn">BOOK NOW</a>
                      </div>
                </div>
              </div>
        </div>
        <br>
        <h4>Regal Palmetto Grande</h4>
        <div class="row">
            <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>New Mutants</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="media/images/NewMutants.jpg" alt="">
                    </div>
                    <div class="button">
                      <a href="#" class="buy-btn">BOOK NOW</a>
                    </div>
              </div>
            </div>
            <div class="col-md-3">
                <div class="single-movie">
                    <div class="name">
                        <h2>The War with Grandpa</h2>
                        <p>2hr:30min</p>
                      </div>
                      <div class="image">
                        <img src="media/images/wargrandpa.jpg" alt="">
                      </div>
                      <div class="button">
                        <a href="#" class="buy-btn">BOOK NOW</a>
                      </div>
                </div>
              </div>
              <div class="col-md-3">
                  <div class="single-movie">
                      <div class="name">
                          <h2>The Way Back</h2>
                          <p>2hr:30min</p>
                        </div>
                        <div class="image">
                          <img src="media/images/wayback.jpg" alt="">
                        </div>
                        <div class="button">
                          <a href="#" class="buy-btn">BOOK NOW</a>
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="single-movie">
                      <div class="name">
                          <h2>AVA</h2>
                          <p>2hr:30min</p>
                        </div>
                        <div class="image">
                          <img src="media/images/ava.jpg" alt="">
                        </div>
                        <div class="button">
                          <a href="#" class="buy-btn">BOOK NOW</a>
                        </div>
                  </div>
                </div>
          </div>
  </div>
</section>

<!--
<!-------------------ABOUT US-----------------------------
<section id="aboutus" >
  <div class="container">
      <h1>About Us</h1>
      <p class="text-center">BLOCK MY SEAT is a product of SRS group inc.</p>
      <p class="text-center">Founders & Developers</p>
      <div class="row">
          <div class="col-md-4 text-center">
            <div class="profile">
              <img src="media/images/shahid.jpeg" class="user">
              <blockquote>Embraced by the darkness, I'm using the Light</blockquote>
                 <h3> Shahid Shaikh <span>Co-Founder SRS inc/ CTO BMS</span></h3>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="profile">
              <img src="media/images/raju1.jpg" class="user">
              <blockquote>Survived Engineering and made this comapany where people can block their seats</blockquote>
                 <h3> Raju Potharaju <span>Co-Founder SRS inc/ CEO BMS</span></h3>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="profile">
              <img src="media/images/dead.png" class="user">
              <blockquote>I have worked day and night to make this imagination turned into reality</blockquote>
                 <h3> Sahruday sherla <span>Co-Founder SRS inc/ MD BMS</span></h3>
            </div>
          </div>
        </div>
  </div>
</section>
-->

<!--------------Contact US------------------->
<section id="contactus">
  <div class="container">
      <h1>Contact Us</h1>

      <div class="contact-box">
          <form name="contact" method="POST" action="contactus.php">
          <div class="row">
              <div class="col-md-4 email">
                      <label>Name</label>
                     <div class="inp"><input type="text" size="20" name="name" required> </div>
              </div>
              <div class="col-md-4 email">
                      <label>Email</label>
                     <div  class="inp"> <input type="email" name="email"  required>  </div>
              </div>
              <div class="col-md-4 email">
                      <label>Phone</label>
                    <div  class="inp">    <input  type="number" name="phone"  required>  </div>
              </div>
          </div>
          <div class="abc">
                  <label>Message</label> <br>
                  <textarea cols="100" rows="7" name="msg" onkeyup="cnt(this)" placeholder="Type your concerns to managment here."  required></textarea> <br>
                  <input class="btn btn-primary" type="submit" name="submit" value="SEND"/>
          </div>
        </form>
        </div>



       <div class="logo">
          <div class="l"></div>
          <img src="media/images/logo1.png" alt="">
          <div class="l1"></div>
       </div>

      <div class="social" >
          <ul>
              <li><i class="fa fa-facebook"></i></li>
              <li><i class="fa fa-twitter"></i></li>
              <li><i class="fa fa-linkedin"></i></li>
              <li><i class="fa fa-youtube"></i></li>
              <li><i class="fa fa-instagram"></i></li>
              <li><i class="fa fa-pinterest"></i></li>
          </ul>
        </div>
        <div class="copy">
          <p>Copyright 2019 © SRS Inc Pvt. Ltd. All Rights Reserved. <br>
The content and images used on this site are copyright protected and copyrights vests with the respective owners.
The usage of the content and images  on this website is intended to promote the works and no
endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.</p>
        </div>
    </div>
</section>

<script>
    var scroll = new SmoothScroll('a[href*="#"]');
  </script>

</body>
</html>
