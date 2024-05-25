<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    body{
        background: url('flower_pic.jpg');
    }
    .SOD{
    width: ;
    text-shadow: 1px 1px 13px black;
    color: white;
    text-align: center;
    font-size: 88px;
    position: relative;
    top: -56px;
}

.container{
    width: 900px;
    /* border: 2px solid black; */
    height: 300px;
    position: absolute;
    bottom: -25px;
}
h5{
    position: absolute;
    top: 10%;
    color: white;
    left: 35%;
    font-size: 44px;
    text-shadow: 4px 2px 6px black;
}

    .container>div{
        font-size: 45px;
        color: blue;
    }

    input{
        border-radius: 10px;
    position: absolute;
    top: 300px;
    right: 303px;
    border: transparent;
    background: transparent;
    box-shadow: 2px 3px 7px black;
    width: 100px;
    height: 50px;
    font-size: 22px;
    font-size: 22px;
    border: 9px crimson;
    }

    p{
        position: absolute;
    top: 201px;
    left: 100px;
    font-size: 20px;
    }
    </style>
</head>
<body>
<h1 class="SOD">State Bank Of Dhruvil</h1>

<h5>Please Enter Your Pin</h5>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

<input type="password" name="pass" placeholder="Enter pin"  type="submit" name="submit" required>

</form>

<div class="container">
    <div style="color:black;"><?php session_start(); echo $_SESSION['Name']?></div>
    <div> <span style="color:red;">*</span> તમારો પિન ગોપનીય છે</div>
    <div>કોઈએ પિન જોવો જોઈએ નહીં</div>
    <div>જ્યારે તમે તેને દાખલ કરી રહ્યાં હોવ
.</div>
    <div>તેને વારંવાર બદલવું
</div>

    </div>
    <?php

if (isset($_POST['pass'])) {
    // Show successful message

    if ($_POST['pass'] == $_SESSION['pin']) {
        echo "<p style='color:green;'>Successful,You will be Redirect to your page.</p>";

        echo "<script>
        setTimeout(function() {
            window.location.href = 'after_pin.php';
        }, 5000);
      </script>";
    } else {
        echo "<p style='color:red;'>Sorry,You Have Enter Wrong</p>";
        echo "<script>
        setTimeout(function() {
            window.location.href = '/ex/Bank_project/get.php';
        }, 5000);
      </script>";
    }

    // Redirect after 5 seconds
}
?>



</body>
</html>