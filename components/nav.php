<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"> 
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</head>
<body>
<!--navigation bar on large screen-->
  <nav>
      <div class="nav1">
          <div class="nav2"> 
              <div class="ti1"> <a href="index.php">AutoPlaza</a> </div>
              <div class="hidden"> 
                  <div class="nav3">
                      <div class="nav4"><a href ="fleet.php">Vechicle Fleet</a></div>
                      <div class="nav4"><a href="about.php">About Us</a></div>
                      <div class="nav4"><a href="contact.php">Contact Us</a></div>
                  </div>
              </div>
              <div class="ti3">
                  <div class="ti2"  data-bs-toggle="modal" data-bs-target="#loginModal">
                      <ion-icon class="icon1" name="person-outline" ></ion-icon>
                      <span>Sign in</span>
                  </div>
                  <div  class="icon" onclick="myFunction()">
                      <div class="bar"></div>
                  </div>
              </div>   
          </div>
      </div>
  </nav>

  <!--navigation for small screens-->
  <div class="topnav">
      <div id="myLinks">
        <a href="fleet.php">Vechicle Fleet</a>
        <a href="about.php">About Us</a>
        <a href="contact.php">Contact Us</a>
      </div>
  </div>

  <!--log in form-->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sign in</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="register-form">
            <input type="text" placeholder="email address"/>
            <input type="password" placeholder="password"/>
            <button>Sign in</button>
            <div class="message">
              <div>Not registered?</div>
              <div class="ab" data-bs-toggle="modal" data-bs-target="#signinModal">sign up</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--sign up form-->
  <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sign in</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="register-form">
            <input type="text" placeholder="email address"/>
            <input type="password" placeholder="Enter your password"/>
            <input type="password" placeholder="Enter your password again"/>
            <button>Sign up</button>
            <div class="message">
              <div>Already registered?</div>
              <div class="ab" data-toggle="modal" data-target="#loginModal">sign in</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>