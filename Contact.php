<!DOCTYPE html>
<html> 
<head>
<meta name= "viewport" content="with=device-width, initial-scale=1.0">
<title>Clarin Bohol</title>
<link rel="stylesheet" href="stylecon.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://unpkg.com/scrollreveal"></script>
<link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
<body>
    <section class="header">
        <nav>
            <img scr="images/logo.png">
            <div class="links" id="nlinks">
                <i class="fa fa-times-circle" alt="fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="MENU.html">HOME</a></li>
                    <li><a href="Home.html">ABOUT</a></li>
                    <li><a href="Gallery.html">GALLERY</a></li>
                    <li><a href="Contact.html">CONTACT</a></li>
                    <li><a href="Developer.html">DEVELOPER</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" alt="bars" onclick="showMenu()"></i>  
        </nav>
        <script>
            var nlinks = document.getElementById("nlinks");
             
            function showMenu(){
                nlinks.style.right = "0";
            }
            function hideMenu(){
                nlinks.style.right = "-200";
            }
        
        </script>
<div class="container">
  <header>
      <h1>Contact Us</h1>
  </header>
  <div class="content">
      <div class="content-form">
          <section>
            <a href="https://goo.gl/maps/Z3nUrMzxZsVN8sFv8" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="fa fa-map-marker fa-2x" aria-hidden="true"></a>
              <h2>address</h2>
              <p>
                  Poblacion Norte, Clarin, Bohol
              </p>
          </section>

          <section>
              <a href="tel:09308059153" class="fa fa-phone fa-2x" aria-hidden="true"></a>
              <h2>Phone</h2>
              <p>502-2302</p>
          </section>

          <section>
            <a href=mailto:"lguclarinbohol21@gmail.com" class="fa fa-envelope fa-2x" aria-hidden="true"></a>
              <h2>E-mail</h2>
              <p>lguclarinbohol21@gmail.com</p>
          </section>
        
          <section>
          <a href="https://web.facebook.com/MunicipalityOfClarin" class="fa fa-facebook-square fa-2x" aria-hidden="true"></a>
              <h2>Facebook</h2>
              <p>https://web.facebook.com/MunicipalityOfClarin</p>
          </section>
      </div>
  </div>
  
<form action="https://formsubmit.co/cameroamberkate@gmail.com" method="POST">
  <div class="form">
      <div class="right">
        <div class="contact-form">
            <input type="text" placeholder="Full Name" required>
            <span>Full Name</span>
        </div>

        <div class="contact-form">
            <input type="E-mail" placeholder="E-mail"required>
            <span>E-mail </span>
        </div>
        <div class="contact-form">
            <textarea name="text"placeholder="Message"></textarea>
            <span> Type your Message....</span>
        </div>

        <div class="contact-form">
            <input type="submit" name="submit">
        </div>
        </div>
      </div>
    </div>
</form>
  <div class="empty">

  </div>
</div>    
</body>
</html>