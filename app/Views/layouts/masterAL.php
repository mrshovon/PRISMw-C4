<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HOME</title>
    <link rel="stylesheet" href="<?=base_url('public/css/style.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body>
    <!--#include file="index.html"-->
    <!-- <iframe src="index.html" frameborder="0" style="width: 100%;"></iframe> -->
    <!-- nav-bar -->
    <header>
        <nav>
            <div class="logo">
              <img src="<?=base_url('public/images/LOGO.png')?>" alt="Logo">
            </div>
            <ul class="nav-links">
              <!-- <li class="btn btn-light"><a href="index.html">Home</a></li> -->
              <li class="btn btn-light"><a href="<?=base_url('public/home/aboutus')?>">About Us</a></li>
              <li class="btn btn-light"><a href="<?=base_url('public/home/contactus')?>">Contact Us</a></li>
              <li class="dropdown btn btn-light">
                <a href="#">Services</a>
                <div class="dropdown-content">
                  <a href="<?=base_url('public/home/homeloan')?>">Home-Loan</a>
                  <a href="<?=base_url('public/home/renovation')?>">Renovation</a>
                  <a href="<?=base_url('public/home/legalservices')?>">Legal-Services</a>
                </div>
              <li class="btn btn-light"><a href="Add-property.html">Add Property</a></li>
              <li class="dropdown btn btn-success">
                <a href="#">User</a>
                <div class="dropdown-content">
                  <a href="<?=base_url('public/home/userdash')?>">Home</a>
                  <a href="#">Profile</a>
                  <a href="<?=base_url('public/home')?>">Log Out</a>
                </div>
            </ul>
             <!-- menu bar -->
          <div class="menu-bar">
            <img onclick="myFunction2()" src="<?=base_url('public/images/menus.png')?>" alt="">
            
            <div id="hidden" class="menu-items" style="display: none;">
              <ul>
              <li ><a href="<?=base_url('public/home/userdash')?>">Home</a></li>
                <li ><a href="<?=base_url('public/home/aboutus')?>">About Us</a></li>
                <li ><a href="<?=base_url('public/home/contactus')?>">Contact Us</a></li>
                <li ><a onclick="myFunction3()" href="#">Services</a></li>
                <div id="services" style="display: none">
                  <li> <a href="<?=base_url('public/home/homeloan')?>">Home-Loan</a></li>
                  <li><a href="<?=base_url('public/home/renovation')?>">Renovation</a></li>
                  <li><a href="<?=base_url('public/home/loginlegalservices')?>">Legal-Services</a></li>
                </div>
                <li ><a href="<?=base_url('public/home/userdash')?>">Profile</a></li>
                <li ><a href="<?=base_url('public/home/addproperty')?>">ADD Property</a></li>
                <li><a href="<?=base_url('public/home')?>" >Log-out</a></li>
              </ul>

            </div>
          </div>
          <!-- menu bar ends -->
          </nav>
    </header>
    <!-- nav-bar -->
    <!-- main -->
    <main style="height: fit-content; width: 100%;">
        <?= $this->renderSection('content') ?>
    </main>
      
      <!-- main -->
      <!-- footer -->
      <footer style="margin-top:70px">
          <div class="footer-container">
            <div class="footer-section">
              <h3>Company Information</h3>
              <p>1234 Main Street</p>
              <p>Anytown, USA 12345</p>
              <p>Phone: 555-555-5555</p>
            </div>
            <div class="footer-section">
              <h3>Follow Us</h3>
              <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
            <div class="footer-section">
              <h3>Careers</h3>
              <p>Visit our Careers page for current job openings.</p>
              <a href="careers AL.html">Careers</a>
            </div>
            <div class="footer-section">
              <h3>Privacy Policy</h3>
              <a href="#">Privacy Policy</a>
            </div>
          </div>
          <div class="footer-bottom">
            <p>&copy; 2023 My Company. All rights reserved.</p>
          </div>
        </footer>
        
      <!-- footer -->
      <!-- script -->
      <script src="<?=base_url('public/js/script.js')?>"></script>
      <script src="https://kit.fontawesome.com/298c7a36dd.js" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script>
        var input = document.getElementById("input");
        input.addEventListener("keypress", function(event) {
          if (event.key === "Enter") {
            event.preventDefault();
            document.getElementById("clkbtn").click();
          }
        });
        </script>
    </body>
  </html>