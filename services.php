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
      <h2>Welcome to Services</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
  
          <div class="section-title">
            <span>Services</span>
            <h2>Services</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <div class="icon-box">
                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                <h4><a href="">Lorem Ipsum</a></h4>
                <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Sed ut perspiciatis</a></h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="">Magni Dolores</a></h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
              </div>
            </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section -->
  
  

  </main><!-- End #main -->

<?php include('includes/footer.php') ?>
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <?php include('includes/scripts.php') ?>


</body>

</html>




<?php
    if (isset($_POST['inquiry'])){
        $name = mysqli_real_escape_string($conn,$_POST['name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $subject = mysqli_real_escape_string($conn,$_POST['subject']);
        $message = mysqli_real_escape_string($conn,$_POST['message']);


           $query = "INSERT INTO `contact`( 'name',`email`,`subject`,'message) VALUES ('$name','$email','$subject','$message')";
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



        <div class="col-lg-6">
          <form action="" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" name="email"  placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
            </div>
            <div class="text-center"><input type="submit" name="inquiry"></div>
          </form>