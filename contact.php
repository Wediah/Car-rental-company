<?php include 'components\nav.php'?>

  <div class="wall">
    <img src="images\wall1.jpg" alt="">
    <h1 class="ab1">Contact US</h1>
    <p> <a href="index.php">Home</a> / Contact Us </p>
  </div>
    <div class=" contact">

        <div class="con1">
          <div class="con2">
            <p class="hello">Hello,</p>
            <p class="get">LETS GET IN TOUCH</p>
            <div class="info"> 
              <ion-icon class="info1" name="location"></ion-icon>
              <p>Accra, Ghana</p>
            </div>
            <div class="info">
              <ion-icon class="info1" name="call"></ion-icon>
              <p>020022000</p>
            </div>
            <div class="info">
              <ion-icon class="info1" name="mail"></ion-icon>
              <p>info@autoplaza.com</p>
            </div>
            <div class="social">
              <ion-icon name="logo-instagram"></ion-icon>
              <ion-icon name="logo-facebook"></ion-icon>
              <ion-icon name="logo-twitter"></ion-icon>
              <ion-icon name="logo-linkedin"></ion-icon>
            </div>
          </div>
          <div class="con3">
            <h3>Contact Us</h3>
            <form action="">
              <input type="text" id="fname" name="fname" placeholder="Full Name">
              <input type="text" id="email" name="email addess" placeholder="Your email address"> 
              <textarea name="subject" id="subject" cols="30" rows="5" placeholder="Your Message"></textarea>
              
              <input class="Submit" type="submit" value="send now" >
            </form>
          </div>
        </div>
<?php include 'components\footer.php'?>