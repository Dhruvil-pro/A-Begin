<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: url('dd.jpg') no-repeat;
            background-size: 100%;
        }

        body {
            font-family: Verdana;
        }

        .SOD {
            width:  ;
            text-shadow: 1px 1px 13px black;
            color: white;
            text-align: center;
            font-size: 88px;
            position: relative;
            top: -33px;
        }

        .container {
            width: 699px;
            height: 79px;
            border: 1px solid black;
            background-color: blue;
            color: yellow;
            position: absolute;
            left: 10px;
            border-radius: 15px;
            font-size: 60px;
            font-weight: 500;
        }

        .container-1 {
            width: 699px;
            height: 79px;
            position: absolute;
            left: 350px;
            /* border: 1px solid black; */
            padding: 38px;
        }

        .yt {
            text-decoration: none;
            position: absolute;
            right: 1px;
            background-color: lightblue;
            border-radius: 10px;
            color: black;
            padding-left: 15px;
            padding-right: 15px;
            bottom: 1px;
        }
    </style>
</head>

<body>
    <h1 class="SOD">State Bank Of Dhruvil</h1>
    <div class="container-1">

        <div class="container">
            <?php
            if (11 == 11) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "emp";

                $conn = mysqli_connect($servername, $username, $password, $database);
                $gc = $_SESSION['digit_code'];
                $goat = $_SESSION['num82'];
                // echo $goat;
                if($goat===1){

                    $sql = "SELECT `money` FROM `bank_acc` WHERE `digit_code` = $gc ";
                    $result = mysqli_query($conn,$sql);
                    
                    
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        echo $row['money'];
                    }  
                }

                elseif($goat===2){
                    $sql = "SELECT `saving_money` FROM `bank_acc` WHERE `digit_code` = $gc ";
                    $result = mysqli_query($conn,$sql);
                    
                    
                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        echo $row['saving_money'];
                    }  
                }
                else{
                    echo "not returned";
                }
            }
            ?>
        </div>
        <button class="yt"><a href="<?php

        if ($_SESSION['num1'] == 0) {
            echo "after_pin.php";
        } elseif ($_SESSION['num1'] == 1) {
            echo "english.php";
        }

        ?>"><--</a></button>
    </div>
</body>

</html>