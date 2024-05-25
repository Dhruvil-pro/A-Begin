<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RAISERS Data Display</title>
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
    .data-table {
      margin-top: 20px;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="Home.php">RAISERS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="put_profile.php">Data Display</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Data Display Section -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-4">Data Display Section</h2>
    <div class="table-responsive data-table">
      <table class="table table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Aadhar Card</th>
            <th>Email</th>
            <th>Number</th>
            <th>Current Money</th>
            <th>Saving Money</th>
            <th>Pin</th>
            <th>Digit Code</th>
          </tr>
        </thead>
        <tbody>
          <!-- Data will be dynamically inserted here -->
          <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "emp";

        $conn = mysqli_connect($servername,$username,$password,$database);
        $coded = $_SESSION['get'];
        $sql = "SELECT * FROM `bank_acc` WHERE `digit_code` = ".$coded."";
        $result = mysqli_query($conn,$sql);

        $i=1;
        while($row = mysqli_fetch_assoc($result))
        {
          echo "<tr>
          <td>".$i."</td>
          <td>".$row['Name']."</td>
          <td>".$row['aadhar_card']."</td>
          <td>".$row['email']."</td>
          <td>".$row['number']."</td>
          <td>$".$row['money']."</td>
          <td>$".$row['saving_money']."</td>
          <td>".$row['pin']."</td>
          <td>".$row['digit_code']."</td>
          </tr>";
        }
          ?>
          <!-- Additional rows can be added dynamically -->
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-light text-center py-4">
  <p>&copy; 2024 RAISERS. All Rights Reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
