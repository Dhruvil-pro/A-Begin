<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RAISERS Verification</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Custom styles go here */
    /* For example: */
    .jumbotron {
      background-color: #f8f9fa;
      padding: 100px 0;
      text-align: center;
    }
    .feature {
      padding: 50px 0;
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

<!-- Jumbotron -->
<div class="jumbotron">
  <div class="container">
    <h1>Welcome to RAISERS Verification!</h1>
    <p class="lead">Please enter your 12-digit code and 4-digit pin to proceed.</p>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
      <div class="form-group">
        <label for="code">12-digit Code:</label>
        <input type="number" class="form-control" name="code" placeholder="Enter 12-digit code" required>
      </div>
      <div class="form-group">
        <label for="pin">4-digit Pin:</label>
        <input type="number" class="form-control" name="pin" placeholder="Enter 4-digit pin" required>
      </div>
      <input type="submit" value="submit" name="submit" class="btn btn-primary">
    </form>
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

<?php 

if(isset($_POST['submit']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "emp";

    $conn = mysqli_connect($servername,$username,$password,$database);
    $sql = "SELECT digit_code,pin FROM `bank_acc`";
    $result = mysqli_query($conn,$sql);


    $code = $_POST['code'];
    $pin = $_POST['pin'];

    while($row = mysqli_fetch_assoc($result))
    {
      
        if($code == $row['digit_code'])
        {
            if($pin == $row['pin'])
            {
                $_SESSION['get'] = $code;
                
                echo "<script>
         setTimeout(function() {
             window.location.href = 'put_profile.php';
         }, 1000);
         </script>";
                
              }
              else{
                echo "<script> alert('Sorry, You account is Not in Database'); </script>";
                
              }
            }
            
          }

    
}else{
    echo "Please Enter perfectly";
}

?>

</body>
</html>
