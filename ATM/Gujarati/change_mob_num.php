<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change MN</title>
    <style>
        body{
            background:url('dd.jpg') no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* Full viewport height */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }
        .container form {
            display: flex;
            flex-direction: column;
            align-items: center; /* Center horizontally */
        }
        input[type="number"] {
            font-size: 25px;
            height: 48px;
            width: 300px;
            border-radius: 24px;
            background: yellow;
            box-shadow: 4px 4px 7px black;
            text-align: center;
            color: black;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            font-size: 20px;
            height: 50px;
            width: 200px;
            border: none;
            border-radius: 25px;
            background-color: #4CAF50; /* Green */
            color: white;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>
<div class="container">
    <form method="post" action="change_mob_num.php">
        <input type="number" name="new_MN" placeholder="નવો મોબાઈલ નંબર દાખલ કરો" required>
        <input type="submit" name="submit" value="Change MN">
    </form>
</div>
<?php 
session_start();
if(isset($_POST['submit']))
{

$new_MN = $_POST['new_MN'];
$digit = $_SESSION['digit_code'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "emp";


$conn = mysqli_connect($servername,$username,$password,$database);

$sql = "UPDATE `bank_acc` SET `number`= $new_MN WHERE `digit_code` = $digit ";
$result = mysqli_query($conn,$sql);

echo "<script>
setTimeout(function() {
    window.location.href = 'after_pin.php';
}, 2000);
</script>";
}

?>
</body>
</html>
