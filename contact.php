<?php include('includes/connect.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Day Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


</head>

<body>


<?php include('includes/header.php') ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="height: 20vh;">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h2>Contact Page</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <span>Contact</span>
        <h2>Contact</h2>
        <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>contact@example.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <?php
    if (isset($_POST['subscribe'])){
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $name = mysqli_real_escape_string($conn,$_POST['name']);
      


           $query = "INSERT INTO `contact`( `email`,'name') VALUES ('$email','$name')";
           $result = mysqli_query($conn,$query);
           if(!$result){
            die("error:" .mysqli_error($conn));
            echo '<div class="error-message d-block"> Error! - Database connection error. </div>';

           }else{
?>
    <div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                      <i class="mdi mdi-alert-outline label-icon"></i><strong> Success!  You have successfully subscribed to our emails. </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>

<?php
           }
}
?>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"> <br>
              <input type="text" name="name"> <br>
              <input type="submit" name="subscribe" value="Subscribe">
            </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <?php include('includes/footer.php') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <?php include('includes/scripts.php') ?>

</body>

</html>