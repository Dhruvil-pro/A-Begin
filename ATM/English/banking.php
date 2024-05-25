<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding: 20px;
            background: blue;
        }

        h1 {
            color: yellow;
            /* margin: 30px; */
            font-size: 30px;
            text-shadow: 5px 7px 5px #000000;
        }

        .container {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 369px;
            height: 300px;
            /* border: 6px solid black; */
            display: grid;
            gap: 23px;
            padding: 18px;
        }

        .container>button {
            font-size: 25px;
            margin-bottom: 80px;
            height: 75px;
            width: 369px;
            border-bottom-left-radius: 38%;
            text-shadow: 1px 1px 1px black;
            border-top-right-radius: 38%;
            background: yellow;
            box-shadow: 4px 4px 7px black;
            cursor: pointer;
            border: transparent;
        }

        .f {
            font-size: 25px;
            margin-bottom: 80px;
            height: 75px;
            width: 369px;
            border-bottom-left-radius: 38%;
            text-shadow: 1px 1px 1px black;
            border-top-right-radius: 38%;
            background: yellow;
            box-shadow: 4px 4px 7px black;
            /* border: transparent; */
            cursor: pointer;
        }

        .s {
            position: absolute;
            top: 400px;
            left: 500px;
            font-size: 25px;
            width: 40px;
            height: 35px;
            background-color: black;
            color: yellow;
            border: 0px solid transparent;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        p {
            font-weight: 900;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>



    <b>
        <h1>ENTER ANY NUMBER</h1>
        <h1>BETWEEN 10 AND 99</h1>
        <h1>FOR eg. "25"</h1>
        <br><br>
        <h1>PRESS "YES" IF THE</h1>
        <h1>NUMBER IS DISPLAYED</h1>
        <br><br>
        <h1>PRESS "NO" IF THE</h1>
        <h1>NUMBER IS NOT</h1>
        <h1>DISPLAYED</h1>
    </b>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input class="s" type="number" name="num" maxlength="2">

        <div class="container">

            <input class="f" type="submit" name="submit" value="YES">

            <button>
                <a href="hac.php">
                    <?php echo "NO"; ?>
                </a>
            </button>
        </div>
    </form>


    <?php

    if (isset($_POST['submit'])) {
        // Show successful message
    
        if ($_POST['num'] < 99) {
            echo "<p style='color:green;'>Successful,You will be Redirect to your page.</p>";

            echo "<script>
            setTimeout(function() {
                window.location.href = 'pin_done.php';
            }, 5000);
          </script>";
        } else {
            echo "<p style='color:red;'>Sorry,You Have Enter Wrong</p>";
            echo "<script>
            setTimeout(function() {
                window.location.href = 'language_check.php';
            }, 5000);
          </script>";
        }

        // Redirect after 5 seconds
    }
    ?>


</body>

</html>