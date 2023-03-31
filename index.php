
<?php include 'components\nav.php'?>

    <!--landing page-->
    <div class="h21">
        Premium Car Rental
    </div>

    <!--search bar-->
   <div class="search" >
    <ion-icon class="icon2" name="search-outline" ></ion-icon>
    <input type="text" placeholder="Your car is a search away......" class="search2">
    <ion-icon class="icon3" name="close-outline"></ion-icon>
   </div>

   <!--hero 1mage-->
   <img class="img1" src="images\lambo.png" alt="">

   <!--Second page for the types of vehicles-->
   <div class="secondpage">
    <h2>Wide Range Of Vehicles</h2>
    <div class="range1">
      <div class="sedans">
        <img src="images/benz1.webp" alt="">
        <div class="sedans1">Sedans</div>
        <div class="sedans2"><a href="sedans.php">view more</a></div>
      </div>
      <div class="sedans">
        <img src="images/bmw1.jpg" alt="">
        <div class="sedans1">SUVs</div>
        <div class="sedans2"><a href="suvs.php">view more</a></div>
      </div>
      <div class="sedans">
        <img src="images/sprinter.jpg" alt="">
        <div class="sedans1">Vans</div>
        <div class="sedans2"><a href="vans.php">view more</a></div>
      </div>
    </div>
   </div>

   <!--third page which talks about our company-->
   <div class="secondpage">
    <h1>About US</h1>
      <div class="p2">
        <div class="p21">
          
          <p class="p23">
            <span class="p22">Auto Plaza</span> <br>
            With our fleet of exclusive and modern cars, we have the opportunity to provide the best service in the car rental business. Contact us with your budget and we will deliver the best car. <br>
            <a href="contact.html"><button class="p221">contact us</button></a>
          </p>
            
        </div>
        <div class="p24">
          <img class="img2" src="images\porsche.jpg" alt="">
        </div>
      </div>
      
      
        
        
        <div class="numbers">
            <span class="h22">Our Numbers </span>
            <ion-icon class="num4" name="return-down-forward-outline"></ion-icon>
            <ion-icon class="num5" name="arrow-down-outline"></ion-icon>
          
          <div class="num1">
            <span class="num2">16</span><br>
            <span class="num3">locations  <br> nationwide</span>
          </div>
          <div class="num1">
            <span class="num2">100+</span><br>
            <span class="num3">Happy <br> Customers</span>
          </div>
          <div class="num1">
            <span class="num2">50+</span><br>
            <span class="num3">Customer <br> feedback</span>
          </div>
        </div>
      
   </div>

   
  <!--forth page about the reviews we get from customers-->
   <div class="secondpage">
    <h2>Stories Behind The Wheels</h2>

    <div class="reviews">
      <div class="review">
        <div class="rev1">
          <p class="rev2">Kofi Ansah</p>
          <ion-icon class="rev3" name="chatbox-ellipses-outline"></ion-icon>
        </div>
        <p>Best service in Accra, excellent service and staff. I would rate them 10/10</p>
      </div>

      <div class="review">
        <div class="rev1">
          <p class="rev2">Kofi Ansah</p>
          <ion-icon class="rev3" name="chatbox-ellipses-outline"></ion-icon>
        </div>
        <p>Best service in Accra, excellent service and staff. I would rate them 10/10</p>
      </div>

      <div class="review">
        <div class="rev1">
          <p class="rev2">Kofi Ansah</p>
          <ion-icon class="rev3" name="chatbox-ellipses-outline"></ion-icon>
        </div>
        <p>Best service in Accra, excellent service and staff. I would rate them 10/10</p>
      </div>

      <div class="review">
        <div class="rev1">
          <p class="rev2">Kofi Ansah</p>
          <ion-icon class="rev3" name="chatbox-ellipses-outline"></ion-icon>
        </div>
        <p>Best service in Accra, excellent service and staff. I would rate them 10/10</p>
      </div>

      <div class="review">
        <div class="rev1">
          <p class="rev2">Kofi Ansah</p>
          <ion-icon class="rev3" name="chatbox-ellipses-outline"></ion-icon>
        </div>
        <p>Best service in Accra, excellent service and staff. I would rate them 10/10</p>
      </div>

      <div class="review">
        <div class="rev1">
          <p class="rev2">Kofi Ansah</p>
          <ion-icon class="rev3" name="chatbox-ellipses-outline"></ion-icon>
        </div>
        <p>Best service in Accra, excellent service and staff. I would rate them 10/10</p>
      </div>
    </div>
    <div class="send">
      <input class="send1" type="text" placeholder="Add a review">
      <ion-icon class="send2" name="send"></ion-icon>
    </div>
   </div>

   <!--fifth page for contact-->
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

  </div>
  <!--footer-->
  <?php include 'components\footer.php'?>
  

   