<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "emp";

$code = $_POST['code'];
$pin = $_POST['pin'];

$conn = mysqli_connect($servername,$username,$password,$database);
$sql = "SELECT * FROM `bank_acc` WHERE `digit_code` = ".$code." ";
$result = mysqli_query($conn,$sql);

 
while($row = mysqli_fetch_assoc($result))
{
    $row1 = $row['Name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You - RAISERS</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Custom styles go here */
    /* For example: */
    body {
      background-color: #f8f9fa;
    }
    .container1 {
      margin-top: 100px;
    }
    .bg-dark{
      margin-top: 50px;
    }
  </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="Home.php">RAISERS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="get.php">Select Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container1 text-center">
  <div class="row">
    <div class="col">
      <img src="https://via.placeholder.com/150" class="img-fluid mb-4" alt="Thank You Image">
      <h1 class="display-4 mb-3">Thank You <?php 
      
      echo $row1;?> for Using RAISERS!</h1>
      <p class="lead">We appreciate your time and support.</p>  
      <p>Please take a moment to provide us with your feedback:</p>
      <form action="feedback.php" method="post">
        <div class="form-group">
          <label for="feedback">Your Feedback:</label>
          <textarea class="form-control" id="feedback" name="feedback" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Feedback</button>
      </form>
      <div><?php

$sql = "DELETE FROM bank_acc WHERE `bank_acc`.`digit_code` = ".$code."";
// $sql = "DELETE FROM `bank_acc` WHERE `digit_code` = ".$code."";
$result = mysqli_query($conn,$sql);
if(!$result)
{
  echo "Not Deleted Successfully";
}
else{
  echo "Deleted Successfully";
}

?></div>
      <a href="Home.php" class="btn btn-secondary mt-3">Back to Home</a>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light text-center py-4">
  <p>Copyright &copy; 2024 RAISERS. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS and Font Awesome -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>
</html>
