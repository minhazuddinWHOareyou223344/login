<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HOME</title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="./css/bootstrap.min.css">
     <link rel="stylesheet" href="./css/aos.css">
     <link rel="stylesheet" href="./css/venobox.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="stylesheet" href="./css/slick.css">
   <link rel="stylesheet" href="./css/stayle.css">
     <link rel="stylesheet" href="./css/ressponsive.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary myNav" style="background-image: url(./img/banner-img.jpg); border-bottom: 1px solid #744fa0; ">












    <div class="container">
      <a class="navbar-brand" href="#"><img src="./img/nav-logo02.png" alt=""></a>
      <button class="btn  d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#smallmanu" aria-controls="offcanvasExample">
        <i class="fa-solid fa-align-center"></i>
      </button>
      
      <div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="smallmanu" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel"><img src="./img/nav-logo02.png" alt=""></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-0 ">
        <ul class="smallnavber">
         <li>
      <a href="./index about.html">    About us </a>

         </li>
         <li>
          <a href="./index Servies.html">Our Servies </a>
         </li>
         <li>
         <a href="./index Portfolio.html"> Portfolio </a>
         </li>
         <li>
         <a href="./index Skills.html"> Our Skills</a>
         </li>
         <li>
         <a href="./index Testimonial.html"> Our Testimonial</a>
         </li>
         <li>
          <a href="./index Contact.html">Contact</a>
         </li>
         <li  class="nav-item" >
          <a style="width: 30px; height: 30px; border: 1px solid #0f2f44; border-radius: 50%;  margin-top: 10px; line-height: 10px; margin-right: 10px;  text-align: center;" class="nav-link active serchicon" href="#">  <span><i class="fa-sharp fa-light fa-x"></i></span>   </a>
        </li>
         <li class="nav-item ">
          <p>
            <a  style="width: 30px; height: 30px; border: 1px solid #0f2f44; border-radius: 50%;  margin-top: 10px; line-height: 10px; text-align: center;" class="nav-link active" href="#"> <span ><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>  </a>
          </p>
          </li>
        </ul>
      
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navberall">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 smallnav">
          <li class="nav-item ">
            <a   class="nav-link active" aria-current="page" href="./index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./index about.html">  Services            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./index Servies.html">    Screenshots      </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./index Portfolio.html">   Pirce   </a>
          </li>
          <li class="nav-item">
                <a class="nav-link active" href="./index Contact.html">   Contact   </a>
              </li>
         
       

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="./index Skills.html" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Free Trial
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Services   </a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">  Screenshots </a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"> Contact   </a></li>
           

            </ul>
            
         
        </ul>
       
      </div>
    </div>
  </nav>




<section id="your">
<div class="yourimg">
    <div class="container">
    <div class="row  align-items-center ">
      <div class="yourtext">
        <h1><span>A</span>PPON</h1>
        <h3>Best App LAnding Page</h3>
        <span><img src="./img/banner-line.jpg" alt=""></span>
        <p>It’s an awesome app that you have ever used. It give you a great experis for using android app.  Appon is the best app evrr had seen. So I am highly recomended you to use this app.</p>
        <div class="row">
          <div class="youercard col-lg-6">
            <h5>Available on</h5>
            <h4>Google Store</h4>

          </div>
          <div class="youercards col-lg-4">
            <h5>Available on</h5>
            <h4>Apple Store</h4>

          </div>
        </div>
      
        
       </div>
      </div>

    </div>
  </div>
</div>


</section>
<section id="about">
  <div class="container">
    <div class="row">
      <div class="aboutext col-lg-6">
        <h3>About us</h3>
        <span><img src="./img/about-rocket.png" alt=""></span>
        <p>Appon is the best app ever I had seen. So I want to use it everyone, when an nknown printer took a galley of type and scrambled it to make a type specimen book. It has sived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
     <p>
          Appon Is an android app.Developers made it user friendly. Lorem Ipsum has been the industry's standa.</p>

      </div>
      <div class="aboutimg col-lg-6"><img src="./img/abot-img.jpg" alt=""></div>
    </div>
  </div>

</section>
<section id="our">
  <div class="container">
    <h3>our awesome features</h3>
    <span><img src="./img/about-rocket.png" alt=""></span>
    <div class="row">
      <div class="ourone col-lg-4">
      <div class="ouronecard">
      <div class="row">
          <div class="ouroneimg col-lg-2"><span><i class="fa-regular fa-star"></i></span></div>
          <div class="ouronetext col-lg-10">
           <h5>Phone Sequrity</h5>
           <p>Sequre your phone with Appon.</p>
           <img src="./img/abot-line.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="ouronecard">
      <div class="row">
          <div class="ouroneimg col-lg-2"><span><i class="fa-regular fa-star"></i></span></div>
          <div class="ouronetext col-lg-10">
           <h5>Phone Sequrity</h5>
           <p>Sequre your phone with Appon.</p>
           <img src="./img/abot-line.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="ouronecard">
      <div class="row">
          <div class="ouroneimg col-lg-2"><span><i class="fa-regular fa-star"></i></span></div>
          <div class="ouronetext col-lg-10">
           <h5>Phone Sequrity</h5>
           <p>Sequre your phone with Appon.</p>
           <img src="./img/abot-line.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="ouronecard">
      <div class="row">
          <div class="ouroneimg col-lg-2"><span><i class="fa-regular fa-star"></i></span></div>
          <div class="ouronetext col-lg-10">
           <h5>Phone Sequrity</h5>
           <p>Sequre your phone with Appon.</p>
           <img src="./img/abot-line.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="ouronecard">
      <div class="row">
          <div class="ouroneimg col-lg-2"><span><i class="fa-regular fa-star"></i></span></div>
          <div class="ouronetext col-lg-10">
           <h5>Phone Sequrity</h5>
           <p>Sequre your phone with Appon.</p>
           
          </div>
        </div>
      </div>
      </div>
      <div class="ourtwo col-lg-4">
        <img src="./img/summer01.jpg" alt="">
      </div>
      <div class="ourthree col-lg-4">
        <h4>Global Weather</h4>
        <p>Appon is the best app ever I had seen. So I want to use it everyone, when an nknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into typesetting, remaining essentially unchanged
                                                                                                           </p>
                                                                                                           <p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem</p>
      </div>
    </div>
  </div>

</section>
<section id="Portfolioo">
  <div class="container">

    <h3>screenshots</h3>
    <span><img src="./img/about-rocket.png" alt=""></span>
    <section id="Portfolio">
    <div class="portfolioslider">
      <div class="row">
        <div class="portfoliocard col-lg-4">
          <img src="./img/portfolio-img-01.jpg" alt="">
          <div class="overlayy">
           
                 </div>

        </div>
        
      </div>
     </div>
     <div class="portfolioslider">
      <div class="row">
        <div class="portfoliocard col-lg-4">
          <img src="./img/portfolio-img-01.jpg" alt="">
          <div class="overlayy">
           
                 </div>

        </div>
        
      </div>
     </div>
     <div class="portfolioslider">
      <div class="row">
        <div class="portfoliocard col-lg-4">
          <img src="./img/portfolio-img-01.jpg" alt="">
          <div class="overlayy">
           
                 </div>

        </div>
        
      </div>
     </div>
     <div class="portfolioslider">
      <div class="row">
        <div class="portfoliocard col-lg-4">
          <img src="./img/portfolio-img-01.jpg" alt="">
          <div class="overlayy">
           
                 </div>

        </div>
        
      </div>
     </div>
     


    </section>
    
  </div>
 
</section>
<section id="best" style="margin: 100px 0px;">
<div class="container">
  <h3>watch vedio</h3>
  <span class="besteo"> <img src="./img/about-rocket.png" alt=""></span>
</div>

<div class="videoimg">
<span class="yourspan">  <a class="boss"   data-autoplay="true" data-vbtype="video" href="https://youtu.be/lzdQ_b8lzo0"><img src="./img/video.jpg" alt=""></a></span>

</div>


</section>
<section id="plann">
<div class="container">
    <h3>Pricing Plan</h3>
    <span><img src="./img/about-rocket.png" alt=""></span>
    
  </div>
</section>
<div class="container">
  
<section id="plan">
<div class="planslider">
<div class="container">
    <div class="row">
      <div class="plancard col-lg-3">
        <h2>Free Plan</h2>
      <span class="plancards">
        <h3>0.00</h3>
        <p>Per Month</p>
      </span>
      <ul>
        <li>
        One User

        </li>
        <li>
        Android App
        </li>
        <li>
        Unlimited Support
        </li>
        <li>
        Battery Backup 40%
        </li>
      </ul>
      <p>Sign Up</p>

      </div>

    </div>
  </div>
</div>
<div class="planslider">
<div class="container">
    <div class="row">
      <div class="plancard col-lg-3">
      <h2>Free Plan</h2>
      <span class="plancards">
        <h3>0.00</h3>
        <p>Per Month</p>
      </span>
      <ul>
        <li>
        One User

        </li>
        <li>
        Android App
        </li>
        <li>
        Unlimited Support
        </li>
        <li>
        Battery Backup 40%
        </li>
      </ul>
      <p>Sign Up</p>

      </div>

    </div>
  </div>
</div>
<div class="planslider">
<div class="container">
    <div class="row">
      <div class="plancard col-lg-3">
      <h2>Free Plan</h2>
      <span class="plancards">
        <h3>0.00</h3>
        <p>Per Month</p>
      </span>
      <ul>
        <li>
        One User

        </li>
        <li>
        Android App
        </li>
        <li>
        Unlimited Support
        </li>
        <li>
        Battery Backup 40%
        </li>
      </ul>
      <p>Sign Up</p>

      </div>

    </div>
  </div>
</div>
<div class="planslider">
<div class="container">
    <div class="row">
      <div class="plancard col-lg-3">
      <h2>Free Plan</h2>
      <span class="plancards">
        <h3>0.00</h3>
        <p>Per Month</p>
      </span>
      <ul>
        <li>
        One User

        </li>
        <li>
        Android App
        </li>
        <li>
        Unlimited Support
        </li>
        <li>
        Battery Backup 40%
        </li>
      </ul>
      <p>Sign Up</p>

      </div>

    </div>
  </div>
</div>
<div class="planslider">
<div class="container">
    <div class="row">
      <div class="plancard col-lg-3">
      <h2>Free Plan</h2>
      <span class="plancards">
        <h3>0.00</h3>
        <p>Per Month</p>
      </span>
      <ul>
        <li>
        One User

        </li>
        <li>
        Android App
        </li>
        <li>
        Unlimited Support
        </li>
        <li>
        Battery Backup 40%
        </li>
      </ul>
      <p>Sign Up</p>

      </div>

    </div>
  </div>
</div>

</section>
</div>
<div class="container">
<section id="teamm">
<h3>Awesome Team</h3>
<span><img src="./img/about-rocket.png" alt=""></span>

</section>
<section id="team">
<div class="teamslider">
<div class="container">
    <div class="row">
      <div class="teamcard col-lg-4">
        <img src="./img/team.jpg" alt="">
        <div class="overlay">
          <a href="#">m</a>
          <h5>Sakeba Aney</h5>
          <h6>Developer</h6>
          <p>Sakeba Aney is Hardworking rson. She never ummy text of the prining and typesetting industry.</p>

        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="teamslider">
<div class="container">
    <div class="row">
      <div class="teamcard col-lg-4">
        <img src="./img/team.jpg" alt="">
        <div class="overlay">

        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="teamslider">
<div class="container">
    <div class="row">
      <div class="teamcard col-lg-4">
        <img src="./img/team.jpg" alt="">
        <div class="overlay">

        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="teamslider">
<div class="container">
    <div class="row">
      <div class="teamcard col-lg-4">
        <img src="./img/team.jpg" alt="">
        <div class="overlay">

        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="teamslider">
<div class="container">
    <div class="row">
      <div class="teamcard col-lg-4">
        <img src="./img/team.jpg" alt="">
        <div class="overlay">

        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="teamslider">
<div class="container">
    <div class="row">
      <div class="teamcard col-lg-4">
        <img src="./img/team.jpg" alt="">
        <div class="overlay">

        </div>
      </div>
      
    </div>
  </div>
</div>

</section>
</div>
<section id="test">
<div class="container">
<h3>user’s Feedback</h3>
  <span><img src="./img/about-rocket.png" alt=""></span>
</div>

</section>
<section id="testimonial">

  <div class="container">


   
   <div class="testimonialTextSlider  col-md-8 mx-auto">
    <div class="testimonialTextSlide">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      </p>
      <h3>
        Samsul Arefin
      </h3>
      <p>
        Architect
      </p>
      <span class="text-warning">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
    </span>

    </div>
    <div class="testimonialTextSlide">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      </p>
      <h3>
      minhaz uddin
      </h3>
      <p>
        Architect
      </p>
      <span class="text-warning">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
    </span>

    </div>
    <div class="testimonialTextSlide">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      </p>
      <h3>
       sakib al hasen
      </h3>
      <p>
        Architect
      </p>
      <span class="text-warning">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
    </span>

    </div>
    <div class="testimonialTextSlide">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
      </p>
      <h3>
        abir khan
      </h3>
      <p>
        Architect
      </p>
      <span class="text-warning">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
    </span>

    </div>
   </div>


   <div class="testimonialImageSlider col-md-8 mx-auto">

    <div class="testimonialImageSlide">
        <div class="ring">
            <img src="./img/test01.png" alt="">
        </div>
    </div>
    <div class="testimonialImageSlide">
        <div class="ring">
            <img src="./img/test02.png" alt="">
        </div>
    </div>
    <div class="testimonialImageSlide">
        <div class="ring">
            <img src="./img/test03.png" alt="">
        </div>
    </div>
    <div class="testimonialImageSlide">
        <div class="ring">
            <img src="./img/test01.png" alt="">
        </div>
    </div>

</div>
  </div>
</div>

</section>
<section id="get">
<div class="container">
<h3>Get In Touch</h3>
  <span><img src="./img/about-rocket.png" alt=""></span>
</div>

</section>
<section id="iqbal">
<div class="wrapper">
    <header>Send us a Message</header>
    <form action="#">
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="name" placeholder="Enter your name">
          <i class='fas fa-user'></i>
        </div>
        <div class="field">
          <input type="text" name="email" placeholder="Enter your email">
          <i class='fas fa-envelope'></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" name="phone" placeholder="Enter your phone">
          <i class='fas fa-phone-alt'></i>
        </div>
        <div class="field">
          <input type="text" name="website" placeholder="Enter your website">
          <i class='fas fa-globe'></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message"></textarea>
        <i class="material-icons">message</i>
      </div>
      <div class="button-area">
        <button type="submit">Send Message</button>
        <span></span>
      </div>
    </form>
  </div>

</section>
 



























  <section id="lagout">

<h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
</section>


























<script src="./js/jquery-3.7.0.min.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/venobox.min.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./script.js"></script>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>












