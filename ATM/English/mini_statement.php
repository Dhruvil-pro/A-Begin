<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-color: gray;
            background-image: radial-gradient(circle, #5c0067 0%, #00d4ff 100%);
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 2%, rgba(2, 19, 22, 1) 48%, rgba(0, 0, 0, 0.745843625536152) 100%);
        }

        .container {
            width: 500px;
            height: 600px;
            position: relative;
            background-color: white;
            border: 1px solid white;
            box-shadow: 1px 1px 12px 14px white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 20px;
        }

        .tet {
            font-weight: 500;
            font-size: 17px;
            position: relative;
            left: 21%;
            top: 4%;

        }

        .tet-1 {
            position: absolute;
            left: 177px;
            top: 65px;
            font-size: 20px;
            font-weight: 600;
        }

        .tet-2 {
            font-size: 20px;
            position: absolute;
            left: 121px;
            top: 98px;
            font-size: 30px;
            font-weight: 700;
        }

        .container-3 {
            /* border: 1px solid black; */
            margin: 30px;
            margin-top: -5px;
            /* padding-bottom: 363px;   */
        }

        table {
            margin: 10px;
            color: blue;
        }

        .dd>td,
        th {
            padding: 10px;
        }

        .B {
            font-weight: 600;
        }

        .container-4 {
            margin: 30px;
            margin-left: 80px;
        }

        .dg {
            margin-bottom: 30px;
        }

        .ff {
            position: absolute;
            right: 1px;
            bottom: 1px;

        }

        a {
            text-decoration: none;
            color: black;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="tet">ए टी एम ग्राहक साधना/ATM Customer Advice</div>
        <div class="container-2">
            <br>
            <span><img src="R.png" alt="Raisers_logo" width="100px" height="100px"></span>
            <span class="tet-1">भारतीय स्टेट बैंक</span>
            <span class="tet-2">State Bank of Dhruvil</span>
        </div>
        <div class="container-3">

            <table class="dd">
                <tr class="dg">
                    <th class="A">DATE</th>
                    <th class="A">TIME</th>
                </tr>
                <tr>
                    <td><?php echo date("d/m/Y"); ?></td>
                    <td><?php echo date("H:i"); ?></td>
                </tr>
                <tr>
                    <?php $i = $_SESSION['digit_code'];
                    $o = (string) $i;
                    ?>
                    <td class="B"><?php echo "Card Number"; ?></td>
                    <td><?php echo substr($o, 0, 4) . "XXXXXXXX" . substr($o, 12, 16); ?></td>
                </tr>
                <tr>
                    <td class="B"><?php echo "Tel No"; ?></td>
                    <td><?php echo "701"; ?></td>
                </tr>
                <tr>
                    <td class="B"><?php echo "Statement For"; ?></td>
                    <td><?php echo "XXXXXXXXXXXX" . substr($o, 12, 16); ?></td>
                </tr>
            </table>
            <table class="container-4">
                <?php
                // session_start();
                $digit = $_SESSION['digit_code'];
                if($_SESSION['y17']===1)
                { 
                $conn = mysqli_connect("localhost","root","","emp");
                $sql = "SELECT * FROM `mini_statement` WHERE `digit_code` = $digit";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>
                    <td>".$row['date']."</td>
                    <td>".$row['amount']."  .</td>
                    <td>00+".$row['descrip']."</td>
                    </tr>";
                }
            }
            elseif($_SESSION['y17']===2)
                { 
                $conn = mysqli_connect("localhost","root","","emp");
                $sql = "SELECT * FROM `mini_statement_s` WHERE `digit_code` = $digit";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>
                    <td>".$row['date']."</td>
                    <td>".$row['amount']."</td>
                    <td>00+".$row['descrip']."</td>
                    </tr>";
                }
            }
            
                ?>
                <tr>
                    <td>AVAIL BAL</td>
                    <td></td>
                    <td>34434.62+</td>
                </tr>
            </table>
            <button class="ff"><a href="<?php
             
            if ($_SESSION['num'] == 0) {
                echo "after_pin.php";
            } elseif ($_SESSION['num'] == 1) {
                echo "english.php";
            }
            ?>"><--</a></button>
        </div>
    </div>
</body>

</html>