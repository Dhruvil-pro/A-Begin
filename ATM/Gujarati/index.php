<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background: gray;
        }

        .pin_enter {
            color: white;
            font-style: italic;
            font-size: 27px;
            position: absolute;
            top: 39%;
            left: 40%;
            font-weight: 400;
            /* text-shadow: 2px 2px 5px wheat; */

        }

        .for_form {
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);

        }

        .for_input {
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            color: white;
            border: transparent;
            background: black;
            box-shadow: 4px 4px 8px black;
            opacity: 0.5;
            border-radius: 25px;
            font-size: 20px;
            padding: 15px 51px;

        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .for_submit {
            border: transparent;
            background: white;
            box-shadow: 3px 3px 6px white;
            opacity: 0.5;
            height: 40px;
            width: 57px;
            border-radius: 72%;
            position: relative;
            left: 122px;
            top: 0px;
            /* background: black; */
            color: black;
            font-style: italic;
            cursor: pointer;
        }

        /* .captcha {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
        } */
        .alert{
            margin: 10px
        }
    </style>
</head>

<body>

    <!-- <?php
    

    // Display the CAPTCHA text
    $captcha_text = 'aU3u2u';
    ?> -->
   

    <!-- <div class="captcha">
            <?php echo "CAPTCHA Code: ".$captcha_text; ?>
        </div> -->

    <b class="pin_enter">16-Digit Code Verification</b>
    <form method="post" class="for_form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input class="for_input" type="text" name="pin">
        <input class="for_submit" type="submit" name="myButton" value="Submit">


    </form>
    <div>
        <?php

        // session_start();
// echo $_POST['pin'];
        if (isset($_POST['myButton'])) {
            session_start();
            // Show successful message
            $pin = $_POST['pin'];
            $conn = mysqli_connect("localhost","root","","emp");
            $sql = "SELECT * FROM `bank_acc` WHERE `digit_code` = '$pin' ";

            $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_assoc($result))
            {
                $_SESSION['ID'] = $row['ID'];
                $_SESSION['Name'] = $row['Name'];
                $_SESSION['aadhar_card'] = $row['aadhar_card'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['number'] = $row['number'];
                $_SESSION['money'] = $row['money'];
                $_SESSION['saving_money'] = $row['saving_money'];
                $_SESSION['pin'] = $row['pin'];
                $_SESSION['digit_code'] = $row['digit_code'];
            }
            

            if ($result) {
                echo "<p class='alert alert-success';>Successful,You will be Redirect to your page.</p>";

                echo "<script>
            setTimeout(function() {
                window.location.href = 'language_check.php';
            }, 5000);
          </script>";
            } else {

                echo "<p class='alert alert-danger';>Sorry, Please Enter a valid Number.!</p>";

            }

            // Redirect after 5 seconds
        
        }
        ?>
    </div>
</body>

</html>