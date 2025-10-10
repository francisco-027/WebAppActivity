<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Shop - Home</title>

  <!-- Bootstrap CSS (comment out to see plain HTML) -->
  <link rel="icon" type="image/x-icon" href="./img/page-icon.svg">
  <link href="./dist/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  <!-- NAVBAR -->
  <div class="navbar justify-content-between align-items-center my-custom-bg">
    <div class="container">
 
      <div class="d-flex align-items-center">
        <a class="navbar-brand" href="#"><i class="fa-solid fa-bag-shopping"></i> E-Shop</a> 
      </div>

      <div class="nav-items d-flex ms-auto">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="products.php">Products</a>
        <a class="nav-link" href="about.php">About</a>
        <a class="nav-link active" href="#">Contact</a>
      </div>
      
      <div class="user-items d-flex ms-auto">
        <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i> Cart</a>
        <a class="nav-link" id="openModalBtn" href="#"><i class="fa-solid fa-user"></i> Login</a>
      </div>

    </div>
  </div>

  <!-- LOGIN MODAL -->
    <?php include 'templates/login.php'; ?>

  <!-- CONTACT SECTION -->
  <section class="contact-background py-4">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div class="contact-text">

          <div class="contact-icons">
            <h1><i class="fa-solid fa-envelope"></i> </h1>
            <h1><i class="fa-solid fa-headset"></i></h1>
          </div>

          <h1>QUESTION?</h1>
          <h1>LET US KNOW</h1>
          <h1>WE ARE READY TO HELP</H1>
       
         <div class="contact-desc">
            <p>If you have any questions or inquiries,</p>
            <p>feel free to reach out to us through this contact form.</p>
            <p>We are here to assist you!</p>
          </div>

        </div>

        <form class="contact-form" id="contactForm">
          <div class="contact-name mb-3">
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
          </div>

          <div class="contact-email mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
          </div>

          <div class="contact-subject mb-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
          </div>

          <div class="contact-message mb-3">
            <textarea type="text" class="form-control" name="message" id="message" placeholder="Your Message"></textarea>
          </div>

            <input type="submit" class="contact-submit" value="Contact Sales">
          
        </form>

      </div>
    </div>
  </section>

  <!-- SCRIPTS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./node_modules/jquery/dist/jquery.min.js"></script>
  <script src="./node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>