<?php session_start();
function generate16DigitCode() {
    $code = '';
    for ($i = 0; $i < 16; $i++) {
        $code .= mt_rand(0, 9);
    }
    return $code;
}

$digit = generate16DigitCode();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RAISERS - Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container1 {
      max-width: 500px;
      margin: 100px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }
    .form-group label {
      font-weight: bold;
    }
  </style>
</head>
<body>

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


<div class="container1">
  <h2 class="mb-4">RAISERS - Registration Form</h2>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
      <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" name="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="aadhar">Aadhar Card Code:</label>
          <input type="number" class="form-control" name="aadhar" placeholder="Enter your Aadhar card code">
        </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" name="email" placeholder="Enter your email">
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="number" class="form-control" name="phone" placeholder="Enter your phone number">
    </div>
    <div class="form-group">
      <label for="money">Amount of Money In Current Account:</label>
      <input type="number" class="form-control" name="money" placeholder="Enter the amount of money">
    </div>
    <div class="form-group">
      <label for="money">Amount of Money In Saving Account:</label>
      <input type="number" class="form-control" name="saving_money" placeholder="Enter the amount of money">
    </div>
    <div class="form-group">
      <label for="pin">PIN:</label>
      <input type="number" class="form-control" name="pin" placeholder="Enter your PIN">
    </div>
    <!-- <a href="after_add_acc.php"> -->
        <input type="submit" name="submit" value="submit" class="btn btn-primary">
    <!-- </a> -->
</form>
</div>

<!-- Copyright Section -->
<footer class="bg-dark text-light text-center py-4">
  <p>Copyright &copy; 2024 RAISERS. All Rights Reserved.</p>
</footer>

<?php 

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $aadhar = $_POST['aadhar'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $money = $_POST['money'];
    $saving_money = $_POST['saving_money'];
    $pin = $_POST['pin'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "emp";

    $conn = mysqli_connect($servername,$username,$password,$database);

    $sql = "INSERT INTO `bank_acc` (`Name`, `aadhar_card`, `email`, `number`, `money`,`saving_money`,`pin`, `digit_code`) VALUES ('$name', '$aadhar', '$email', '$phone', '$money','$saving_money', '$pin', '$digit');";
    $_SESSION['code'] = $digit;
    $result = mysqli_query($conn,$sql);

    if(!$result)
    {
        echo "Problem occur";
    }
    else
    {
        echo "<script>
         setTimeout(function() {
             window.location.href = 'after_add_acc.php';
         }, 1000);
       </script>";
    }
}
else{
    echo "not done";    
}
?>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
