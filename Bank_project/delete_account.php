<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Account - RAISERS</title>
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

<div class="jumbotron">
  <div class="container">
    <h1>Delete Your RAISERS Account</h1>
    <p class="lead">To delete your account, please confirm by entering your 12-digit code and 4-digit pin.</p>
    <form action="delete_account_success.php" method="post">
      <div class="form-group">
        <label for="code">12-digit Code:</label>
        <input type="number" class="form-control" name="code" placeholder="Enter 12-digit code" required>
      </div>
      <div class="form-group">
        <label for="pin">4-digit Pin:</label>
        <input type="number" class="form-control" name="pin" placeholder="Enter 4-digit pin" required>
      </div>
      <input type="submit" value="Delete Account" name="submit" class="btn btn-danger">
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
  echo "<script>
  setTimeout(function() {
      window.location.href = 'delete_account_success.php';
  }, 1000);
</script>";
}

?>

</body>
</html>
