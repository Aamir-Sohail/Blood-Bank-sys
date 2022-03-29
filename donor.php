
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blood Bank Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/home.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Haideri Blood Bank & Welfare Society Parachinar</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="donor.php">Becoma a Donor</a></li>
          <li><a class="nav-link scrollto" href="request.php">Request For Blood</a></li>
          <li><a class="nav-link scrollto" href="donorlist.php">Donors</a></li>

      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
 <!-- Donor's Registration Form -->
 <br><br><br><br><br><br><br>
      <div class="container">
          <div class="row">
            <div class="col-sm-10">
              <h3 class="text text-primary text-center">Donor Registration Form</h3>
              <form  method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                    <div class="font-italic">Full Name<span style="color:red">*</span></div>
                    <div><input type="text" name="name" class="form-control" required></div>
                    </div>
                    <div class="col-lg-4 mb-4">
                    <div class="font-italic">Mobile Number<span style="color:red">*</span></div>
                    <div><input type="text" name="mobile" class="form-control" required></div>
                    </div>
                    <div class="col-lg-4 mb-4">
                    <div class="font-italic">Email Id</div>
                    <div><input type="email" name="email" class="form-control"></div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-4 mb-4">
                    <div class="font-italic">Age<span style="color:red">*</span></div>
                    <div><input type="text" name="age" class="form-control" required></div>
                    </div>


                    <div class="col-lg-4 mb-4">
                    <div class="font-italic">Gender<span style="color:red">*</span></div>
                    <div><select name="gender" class="form-control" required>
                    <option value="" selected disabled>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                    </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                    <div class="font-italic">Blood Group<span style="color:red">*</span> </div>
                    <div>
                      <select name="bloodgroup" class="form-control" required>
                        <option value="" selected disabled>Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="O+">O+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="O-">O-</option>
                        <option value="AB-">AB-</option>
                      </select>
                    </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-4 mb-4">
                    <div class="font-italic">Image</div>
                    <div><input type="file" name="uploadfile" class="form-control"></div>
                    </div>

                   
                    <div class="col-lg-4 mb-4">
                    <div class="font-italic">Address</div>
                    <div><textarea class="form-control" name="address"></textarea></div>
                    </div>

                    <div class="col-lg-8 mb-4">
                    <div class="font-italic">Message<span style="color:red">*</span></div>
                    <div><textarea class="form-control" name="message" required> </textarea></div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-lg-4 mb-4">
                    <div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
                    </div>



                    </div>



                            <!-- /.row -->
                    </form>   
              </div>
          </div>
      </div>
            



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>must read our newsletter must read our news letter</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Blood Donation</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">ICU</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Emergency</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Ambulance Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Fund donation</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  Eidi Park <br>
                  Upper Kuram, Opposite Of <br>
                  Nasir Plaza <br><br>
                  <strong>Phone:</strong> 009332-3110016<br>
                  <strong>Email:</strong>hbbparacinar.com<br>
                </p>

              </div>

              <div class="col-lg-3 col-md-6 footer-info">
                <h3>About Haideri Welfare Society</h3>
                <p>our society established in 2007 for help others and spread happiness among the people</p>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>HWS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">ICUP ENG</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
        
            
        include('./connection/connection.php');
        if (isset($_POST['submit']))
        
              {
                  
                  $name  =  $_POST['name'];
                  $mobile  =  $_POST['mobile'];
                  $email  =  $_POST['email'];
                  $age  =  $_POST['age'];
                  $gender  =  $_POST['gender'];
                  $blood   =  $_POST['bloodgroup'];    
                  $filename = $_FILES['uploadfile']['name'];
                  $tempname = $_FILES['uploadfile']['tmp_name'];
                  $folder = 'uploads/'.$filename;
                  move_uploaded_file($tempname,$folder);
                  $address    =  $_POST['address'];
                  $message    =  $_POST['message'];
                 

$query = mysqli_query($conn, "INSERT INTO donors (name  , mobile , email ,age , gender , bgroup , img ,address, message )
 VALUES('$name' ,'$mobile' ,'$email','$age','$gender','$blood', '$folder','$address','$message')");

                  if ($query) 
                  {
                    echo "<script>alert('Record Inserted Successfully!');
                    window.location.href='donorthank.php';
                    </script>";
                  }
                  else
                  {
                  	 echo "<script> alert('Record insertion Failed !!!!'); </script>" ;
                  }

              }      
  ?>


