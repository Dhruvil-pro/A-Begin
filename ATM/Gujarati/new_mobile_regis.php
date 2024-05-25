<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:url('dd.jpg') no-repeat;
        background-size: 100%;
        }
        .SOD{
            margin-bottom: -27px;
    text-shadow: 1px 1px 13px black;
    color: white;
    text-align: center;
    font-size: 88px;
    position: relative;
    top: -33px;
}
        .SOD1{
   
    text-shadow: 1px 1px 13px black;
    color: white;
    text-align: center;
    /* font-size: 88px; */
    position: relative;
    top: -33px;
}
    .container{
        /* border: 1px solid black; */
        width: 420px;
    height: 363px;
color: white;
position: absolute;
left: 10px;
bottom: 10px;
display: grid;
        font-size: 35px;
        text-shadow: 2px 2px 5px black;
    }

   
   div{
        cursor: pointer;
    }

    .container1{
        color: white;
        display: grid;
        text-shadow: 2px 2px 5px black;
        position: absolute;
        right: 10px;
        bottom: 10px;
        width: 395px;
    height: 363px;
text-align: right;
font-size: 35px;
        /* border: 1px solid black; */
    }
    .art{
        text-decoration: none;
        color: white;
    }

    .num1{
        position: absolute;
    left: 45%;
    top: 42%;
    background-color: gray;
    padding: 11px;
    border-radius: 20px;
    width: 14%;
    height: 18px;
    box-shadow: 0px 1px 6px 5px gray;
    border: 0px solid transparent;
    color: white;
    font-size: 20px;
    }
    </style>
</head>
<body>
<b><h1 class="SOD">State Bank Of Dhruvil</h1></b>

<form method="post" action="new_mobile_regis.php">
<input type="number" class="num1" name="num1" type="submit" >
</form>

<div class="container1">
    <div><a class="art" href="transaction.php">CORRECT ----------- ></a></div>
</div>
    
    

<?php 
session_start();
echo '<script>alert($name);</script>';

if(isset($_POST['num1']))
{


$servername = "localhost";
$username = "root";
$password = "";
$database = "emp";
$num1 = $_POST['num1'];
$conn = mysqli_connect($servername,$username,$password,$database);
$name = $_SESSION['digit_code'];

$sql = " UPDATE `bank_acc` SET `number` = '$num1' WHERE `digit_code` = $name ";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "DONE";
}
else{
    echo "NOT DONE";
}

}

?>
</body>
</html>

