<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">


  <title>Contact</title>

  <style>
    .btn-grad {
      background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
      margin: 10px;
      padding: 15px 45px;
      text-align: center;
      text-transform: uppercase;
      transition: 0.5s;
      background-size: 200% auto;
      color: white;
      /* box-shadow: 0 0 20px #eee; */
      border-radius: 10px;
      display: block;
    }

    .btn-grad:hover {
      background-position: right center;
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>

<body>


  <div class="container text-light">

    <div class="row py-5 g-3 p-4 mt-5">

      <div class="header">
        <h1>Contact Us!</h1>
        <p>Welcome to the contact us page. Please have paitence and let us get back to you. <br> <br></p>
      </div>

      <div class="col-md-5 details">

        <div>
          <h4><img class="img-fuild" src="images/email.png"> Email</h4>
          <p>roshniparvin0@gmail.com</p> <br>
        </div>

        <div>
          <h4><img class="img-fuild" src="images/phone.png" alt=""> Phone</h4>
          <p>+8801734-379611</p> <br>
        </div>

        <div>
          <h4><img class="img-fuild" src="images/location.png" alt=""> Address</h4>
          <p>Bashundhara R/A, Dhaka</p>
        </div>

      </div>

      <div class="col-md-7 first-col">

        <!-- <form action="connect.php" method="POST"> -->
        <form method="POST">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Enter Your Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name" name="name" required>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Enter Your Email</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Write what you want to.</label>
            <textarea type="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Write something..." rows="5" name="message" required></textarea>
          </div>

          <div class="button">
            <input type="submit" name="submit">
          </div>

          <!-- <div class="mb-3">
            <button name="submit" class="btn btn-primary">Send Now</button>
          </div> -->
        </form>
      </div>

    </div>

    <a href="view_details.php" class="btn-grad">View ALl Messages</a>

    <?php
    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
     
      // $formQuery = "INSERT INTO contact_t (Name, Email, 
      $formQuery = "INSERT INTO demo_test (Name, Email, 
       Message) VALUES 
      ('$name', '$email', '$message')";
      $formTable = mysqli_query($conn, $formQuery);
    }
    ?>



</body>

</html>