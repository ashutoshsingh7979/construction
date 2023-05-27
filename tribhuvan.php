<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
   $server = "localhost";
   $username = "root";
   $password = "";
   
   // Create a database connection
   $con = mysqli_connect($server,$username,$password);
   
   // Check for connection success
   if(!$con){
       die("connection to this database failed due to" . mysqli_connect_error());
   }
   // echo "Success connecting to db"

   // Collect post variables
   $name = $_POST['name'];
//    $gender = $_POST['gender'];
//    $age = $_POST['age'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $message = $_POST['message'];
   $sql = "INSERT INTO `tribhuvan`.`tribhuvan` (`name`, `email`, `phone`,`message`) VALUES ('$name','$email', '$phone', '$message');";

   // Execute the query
   if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Construction Website Design Tutorial</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="tribhuvan.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <a href="#" class="logo">TRIBHUWAN INTERIOR<span> GROUP</span></a>

   <nav class="navbar">
      <a href="#home">home</a>
      <a href="#about">about</a>
      <a href="#services">services</a>
      <a href="#projects">projects</a>
      <a href="#pricing">pricing</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="icons">
      <div id="menu-btn" class="fas fa-bars"></div>
      <div id="info-btn" class="fas fa-info-circle"></div>
      <!-- <div id="search-btn" class="fas fa-search"></div> -->
      <!-- <div id="login-btn" class="fas fa-user"></div> -->
   </div>

   <form action="" class="search-form">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fas fa-search"></label>
   </form>

   <form action="" class="login-form">
      <h3>login form</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="#">forgot password?</a>
      </div>
      <input type="submit" value="login now" class="btn">
      <p>don't have an account <a href="#">create one!</a></p>
   </form>

</header>

 <div class="contact-info">

   <div id="close-contact-info" class="fas fa-times"></div>

   <div class="info">
      <i class="fas fa-phone"></i>
      <h3>personal info</h3>
      <h3>CO of tribhuwan groups</h3>
      <p>+888-233-8303</p>
      <p>Gyan prakash singh</p>
      <h3>CMD of tribhuwan groups</h3>
      <p>+884-209-5404</p>
      <p>bhanu pratap singh</p>
   </div>

   <div class="info">
      <i class="fas fa-envelope"></i>
      <h3>email address</h3>
      <p>interorstribhuwangroup83@gmail.com</p>
   </div>

   <div class="info">
      <i class="fas fa-map-marker-alt"></i>
      <h3>office address</h3>
      <p>plot no 560/9081/10694 bhuwanswar(odisha), 752101</p>
   </div>

    <!-- <div class="share">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
   </div>  -->

</div>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">
        
         <section class="swiper-slide slide">
            <img  class="img2" src="images\a.jpg" alt="error">
            <!-- <section class="swiper-slide slide" style="background: url(images\a.jpg) no-repeat;" -->
    
            <div class="content">
               <h3>we provide best service</h3>
               <p>your work is like our responsibilty to give best of us</p>
               <!-- <a href="#about" class="btn">get started</a> -->
               <!-- <img src="service-7.png" alt="error"> -->
            </div>
         </section>

         <!-- <section class="swiper-slide slide" style="background: url(images\a.jpg) no-repeat;">
            <div class="content">
               <h3>making dream come to life</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur beatae iusto pariatur laborum magnam eos!</p>
               <a href="#about" class="btn">get started</a>
            </div>
         </section> -->

         <!-- <section class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat;">
            <div class="content">
               <h3>from concept to creation</h3>
               <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur beatae iusto pariatur laborum magnam eos!</p>
               <a href="#about" class="btn">get started</a>
            </div>
         </section> -->

      </div>

      <!-- <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div> -->

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading"> about us </h1>

   <div class="row">

      <div class="video">
         <video src="images\abc.webm" loop muted autoplay></video>
      </div>

      <div class="content">
         <h3>We will provide you the best work which you dreamt for!</h3>
         <p></p>
         <!-- <a href="#services" class="btn">read more</a> -->
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <h3>15+</h3>
         <p>years of experience</p>
      </div>

      <div class="box">
         <h3>100+</h3>
         <p>project completed</p>
      </div>

      <div class="box">
         <h3>500+</h3>
         <p>satiesfied clients</p>
      </div>

      <div class="box">
         <h3>100+</h3>
         <p>active workers</p>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading"> our services </h1>

   <div class="box-container">

      <!-- <div class="box">
         <img src="images/service-1.png" alt="">
         <h3>building construction</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, necessitatibus.</p>
      </div> -->

      <div class="box">
         <img src="images/service-2.png" alt="">
         <h3>Best home interior</h3>
         <p>Get your dream interior degine from our group including modular kitchen & washroom,wooden flooring and many more.</p>
      </div>

      <div class="box">
         <img src="images/service-3.png" alt="">
         <h3>architechture design & consultant</h3>
         <p>Get best architechture design & consultant by our experience expert and make your dream home.</p>
      </div>

      <div class="box">
         <img src="images/service-4.png" alt="">
         <h3>kitchen Materials supply</h3>
         <p>We supply the kitchen Materials with good quality and atb best prize by which you can make your kitchen modular.</p>
      </div>

      <div class="box">
         <img src="images/service-8.png" alt="">
         <h3>modular kitchen</h3>
         <p>Get your best kitchen degine by our group and make your kitchen best of it.</p>
      </div>
      
   </div>

</section>

<!-- services section ends -->

<!-- projects section starts  -->

<section class="projects" id="projects">

   <h1 class="heading"> our projects </h1>

   <div class="box-container">

      <a href="images\pexels-mark-mccammon-1080721.jpg"  class="box">
         <div class="image">
            <img src="images/blue-and-white-modular-kitchen-design.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>dream kitchen</h3>
               <p>modular kitchen</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images\Washroom-maintance.webp" class="box">
         <div class="image">
            <img src="images\Washroom-maintance.webp" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>dream washroom</h3>
               <p>washroom</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-3.jpg" class="box">
         <div class="image">
            <img src="images\master-bedroom-wall-decor.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>dream bedroom</h3>
               <p>master bed room</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-4.jpg" class="box">
         <div class="image">
            <img src="images\Luxury-Homes-Interior-Design-1-1.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>dream interior</h3>
               <p>best interrior degine</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-5.jpg" class="box">
         <div class="image">
            <img src="images\2.jpg" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>dream flooring</h3>
               <p>wooden flooring</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

      <a href="images/project-6.jpg" class="box">
         <div class="image">
            <img src="images\Kitchen+Materials+Board+Ice+Blue+&+White.png" alt="">
         </div>
         <div class="content">
            <div class="info">
               <h3>kitchen accesories</h3>
               <p>best accesories</p>
            </div>
            <i class="fas fa-plus"></i>
         </div>
      </a>

   </div>

</section>

<!-- projects section ends -->

<!-- reviews section starts  -->

<!-- <section class="reviews">

   <h1 class="heading"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-1.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div> -->

         <!-- <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-2.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-3.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-4.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-5.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="swiper-slide slide">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis unde suscipit quis consequuntur, tempora corporis ex molestias dignissimos in cumque sunt ducimus voluptate inventore harum earum rem aperiam vel modi?</p>
            <div class="user">
               <img src="images/pic-6.png" alt="">
               <div class="info">
                  <h3>john deo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

      </div>

   </div>

</section> -->

<!-- reviews section ends -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

   <h1 class="heading"> our pricing </h1>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-home"></i>
         <h3>basic plan</h3>
         <div class="price">1200<span>Rs</span></div>
         <div class="list">
            <p>modular kitchen</p>
            <p>worddrow</p>
            <p>kitchen & accesories</p>
            <p>maintenance</p>
            <!-- <p>24/7 support</p> -->
         </div>
         <!-- <a href="#" class="btn">choose plan</a> -->
      </div>

      <div class="box">
         <i class="fas fa-building"></i>
         <h3>premium plan</h3>
         <div class="price">1800<span>Rs</span></div>
         <div class="list">
            <p>modular kitchen</p>
            <p>windows & doors</p>
            <p>kitchen & accesories</p>
            <p>maintenance</p>
            <!-- <p>24/7 support</p> -->
         </div>
         <!-- <a href="#" class="btn">choose plan</a> -->
      </div>

      <div class="box">
         <i class="fas fa-city"></i>
         <h3>ultimate plan</h3>
         <div class="price">2200<span>Rs</span></div>
         <div class="list">
            <p>bed room</p>
            <p>washroom</p>
            <p>kitchen & accesories</p>
            <p>wooden flooring</p>
            <!-- <p>24/7 support</p> -->
         </div>
         <!-- <a href="#" class="btn">choose plan</a> -->
      </div>

   </div>

</section>

<!-- pricing section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading"> contact us </h1>
  
   <div class="row">

     
      <form action="tribhuvan.php" method="post">
        
         <h3>get in touch</h3>
         <input type="text" placeholder="name" name="name" id="name" class="box">
         <input type="email" placeholder="email" name="email" id="email" class="box">
         <input type="number" placeholder="phone" name="phone" id="phone" class="box">
         <textarea  placeholder="message" name="message" class="box" id="message" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="btn">
      </form>

   </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<!-- <section class="blogs" id="blogs">

   <h1 class="heading"> our blogs </h1>

   <div class="swiper blogs-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-1.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-3.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-4.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-5.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>
         
         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/blog-6.jpg" alt="">
            </div>
            <div class="content">
               <h3>blog title goes here</h3>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda, nobis!</p>
               <a href="#" class="btn">read more</a>
            </div>
         </div>

      </div>

   </div>

</section> -->

<!-- blogs section ends -->

<!-- client logo section starts -->

<section class="logo-container">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">
         <!-- <div class="swiper-slide slide"><img src="images\a.jpg" alt=""></div> -->
         <!-- <div class="swiper-slide slide"><img src="images/client-logo-2.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-3.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-4.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-5.png" alt=""></div>
         <div class="swiper-slide slide"><img src="images/client-logo-6.png" alt=""></div> -->
      </div>
   </div>
</section>

<!-- client logo section ends -->

<!-- footer section starts  -->

<section class="footer">

   
        <div class="box-container">
          <div class="box">
              <h3>contact info</h3>
              <a href="#" class="fa fa-phone"> +888-233-8303</a>
              <a href="#" class="fa fa-phone"> +884-209-5404</a>
              <a href="#" class="fa fa-envelope"> interorstribhuwangroup83@gmail.com</a>
              <a href="#" class="fa fa-address-book"> gaziabad(up),201001</a>
              <a href="#" class="fa fa-address-book"> plot no 560/9081/10694 bhuwanswar(odisha), 752101</a>
          </div>
              <div class="box">
                  <h3>fllow us</h3>
                  <a href="#" class="fa fa-facebook"> facebook</a>
                  <a href="#" class="fa fa-twitter"> twitter</a>
                  <a href="#" class="fa fa-instagram"> instagram</a>
                  <a href="#" class="fa fa-linkedin"> linkedin</a>
              </div> 
            
</section>
<section class="footer" id="fotter1">
               
    <div class="credit"> created by |<span>mr ashutosh kumar singh</span> | all rights reserved! </div>
</section>
<!-- footer section ends -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script2.js"></script>

<script>

lightGallery(document.querySelector('.projects .box-container'));

</script>

</body>
</html>
