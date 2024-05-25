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
    top: -61px;
}
        .SOD1{
   
            text-shadow: 4px 5px 8px black;
    color: white;
    text-align: center;
    font-size: 60px;
    position: relative;
    top: -85px;
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
        .art{
            text-decoration: none;
            color:black;
        }
    </style>
</head>
<body>
<b><h1 class="SOD">State Bank Of Dhruvil</h1></b>

<h2 class="SOD1">Select Transaction<h2>

<div class="container">
<div class="f"><?php echo "DEPOSIT";?></div>
<div class="f"><?php echo "TRANSFER";?></div>
<div class="f"><a class="art" href="current_1.php"><?php echo "PIN CHANGE";?></a></div>
<!-- <div class="f"><?php echo "OTHERS";?></div> -->
</div>
<div class="container1">
<div class="f"><a class="art" href="kcc.php">FAST CASH</a></div>
<!-- <div class="f"><?php echo "CASH WITHDRAWAL";?></div> -->
<div class="f"><a class="art" href="bal_kcc.php"><?php 
session_start();

echo "BALANCE INQUIRY";
$_SESSION['num1'] = 0;

?></a></div>
<div class="f"><a class="art" href="kcc2.php"><?php
$_SESSION['num']=0;
echo "MINI STATEMENT";?></a></div>
</div>
</body>
</html>