<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: url('wal.jpg');
            background-size:1445px 700px;
            background-repeat:no-repeat ;


        }
        .text-check{
            position: absolute;
    font-size: 84px;
    text-align: center;
    top: -63px;
    left: 21%;
    color: white;
    text-shadow: 4px 4px 8px black;
        }

        .f {
        display: inline-block;
    font-size: 25px;
    margin-bottom: 0px;
    height: 48px;
    width: 300px;
    border-bottom-left-radius: 38%;
    text-shadow: 2px 2px 5px white;
    border-top-right-radius: 38%;
    background: yellow;
    box-shadow: 4px 4px 7px black;
    /* border: transparent; */
    cursor: pointer;
    text-align: center;
    color: black;
        }

        .container{
            display: grid;
    padding: 60px;
    gap: 43%;
    /* border: 2px solid black; */
    align-content: center;
    position: absolute;
    bottom: 10px;
    right: 10px;
        }

        .block{
            display: inline-block;
    /* border: 1px solid black; */
    position: absolute;
    right: 10px;
    top: 37%;
    color: white;
    width: 26%;
}
.block>pre{
        font-size: 25px;
        text-align: center;

    }
    h3{
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 40px;
        text-align: center;
    }
    h5{
    position: absolute;
    top: 10%;
    color: white;
    left: 35%;
    font-size: 44px;
    text-shadow: 4px 2px 6px black;
}

form>input{
    box-shadow: 4px 2px 6px black;
    position: absolute;
    top: 50%;
    right: 44%;
    width: 13%;
    font-size: 20px;
    color: white;

    height: 5%;
    border: 1px solid black;
    border-radius: 22px;
    /* border-radius: 25px; */
    background: black;
    opacity: 0.5;
}

input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <h1 class="text-check">State Bank Of Dhruvil</h1>
    <h5>Please Enter Amount</h5>
      
    
<form method="post" action="after_kcc.php">

    <input type="number" class="amount" name="amount" type="submit" name="submit" required>
    
    <span class="container">
    <div class="f"><a href="transaction.php">PRESS IF YES</a></div>
    <div class="f"><a href="after_pin.php">PRESS IF NO</a></div>
    </span>
</form>

    <?php 
    session_start();
        echo $_SESSION['money'];
    if(isset($_POST['amount']))
    {

        $amount = $_POST['amount'];

        if($_SESSION['y7']===1)
        {
        if($amount<$_SESSION['money'])
        {

            $total = $_SESSION['money'] - $amount;
            $digit = $_SESSION['digit_code'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "emp";
    
            $conn = mysqli_connect($servername,$username,$password,$database);
    
            $sql = "UPDATE `bank_acc` SET `money`= $total WHERE `digit_code` = $digit ";
            $result = mysqli_query($conn,$sql);

            if($result)
            {
                $o=date("d/m");
                
                $sql = "INSERT INTO `mini_statement` (`id`, `date`, `amount`, `descrip`, `digit_code`) VALUES ('', '$o', '$amount', 'By_Transfer', '$digit')";
                $result1 = mysqli_query($conn,$sql);
            
            }
        }
        else{
            echo "<p style='color:red;'>Sorry,You Don`t Have Money</p>";
            echo "<script>
            setTimeout(function() {
                window.location.href = 'after_pin.php';
            }, 2000);
            </script>";
        }
    }

    elseif($_SESSION['y7']===2)
    {
        if($amount<$_SESSION['saving_money'])
        {

            $total = $_SESSION['saving_money'] - $amount;
            $digit = $_SESSION['digit_code'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "emp";
    
            $conn = mysqli_connect($servername,$username,$password,$database);
    
            $sql = "UPDATE `bank_acc` SET `saving_money`= $total WHERE `digit_code` = $digit ";
            $result = mysqli_query($conn,$sql);

            if($result)
            {
                $o=date("d/m");
                
                $sql = "INSERT INTO `mini_statement_s` (`id`, `date`, `amount`, `descrip`, `digit_code`) VALUES ('', '$o', '$amount', 'By_Transfer', '$digit')";
                $result1 = mysqli_query($conn,$sql);
            
            }

        }
        else{
            echo "<p style='color:red;'>Sorry,You Don`t Have Money</p>";
            echo "<script>
            setTimeout(function() {
                window.location.href = 'after_pin.php';
            }, 2000);
            </script>";
        }
    }

    }
    

    
    ?>
</body>
</html>