<!DOCTYPE html>
<html lang="en">
<sty>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select Features - RAISERS</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
   
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
        <li class="nav-item">
          <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item active">
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

<!-- Feature Selection -->
<div class="container mt-5">
  <h2 class="mb-4">Select Features</h2>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Add Account</h5>
          <p class="card-text">Click here to add an account.</p>
          <a href="add_account.php" class="btn btn-primary">Go to Add Account</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">ATM</h5>
          <p class="card-text">Click here to Get into ATM.</p>
          <a href="/ex/ATM/index.php" class="btn btn-primary">Go to ATM</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Check Account</h5>
          <p class="card-text">Click here to check your account.</p>
          <a href="check_account.php" class="btn btn-primary">Go to Check Account</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Delete Account</h5>
          <p class="card-text">Click here to delete an account.</p>
          <a href="delete_account.php" class="btn btn-primary">Go to Delete Account</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Copyright Section -->
<footer class="bg-dark text-light text-center py-4">
  <p>Copyright &copy; 2024 RAISERS. All Rights Reserved.</p>
</footer>
<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
