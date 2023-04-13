window.onload = function () {
    const menu_btn = document.querySelector('.icon');
    const mobile_menu = document.querySelector('.topnav');
  
    menu_btn.addEventListener('click', function () {
      menu_btn.classList.toggle('is-active');
      mobile_menu.classList.toggle('is-active');
    });
  
  }


  function myFunction() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
    x.style.display = "none";
    } else {
    x.style.display = "block";
    }
}

function signUp() {
  alert ("Account created successfully, log in to manage your account")
}

//function signin() {
  //alert ("Account created successfully, log in to manage your account")
//}

function directAc() {
  location.href = "index.html";
}


$('.message a').click(function(){
  $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});