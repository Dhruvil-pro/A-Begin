<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enter 16-Digit Code - RAISERS</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
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
    .code-input {
      border: 2px solid #ced4da;
      border-radius: 5px;
      padding: 10px;
      font-size: 1.2rem;
      text-align: center;
      width: 100%;
      transition: border-color 0.3s;
    }
    .code-input:focus {
      outline: none;
      border-color: #007bff;
    }
  </style>
</head>
<body>

<div class="container">
  <center><h2 class="mb-4">Your 16-Digit Code</h2></center>
  <center> <h5 class="mb-4">Store This Code Future Use</h5></center>
  <div class="form-group">
    <div class="form-control code-input"><?php echo $_SESSION['code'];?>
  </div></div>
  

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
