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
    .container{

        position: absolute;
    right: 10px;
    bottom: 10px;
    height: 450px;
    width: 400px;
    /* border: 2px solid black; */

    display: grid;
    grid-template-rows: auto auto auto;
    gap: 10px;
    padding: 10px;
    }
    .container>button{
    /* top: 10px; */
    height: 56px;
    width: 321px;
    background: orange;
    margin: 30px;
    border-top-right-radius: 40%;
    border-bottom-right-radius: 40%;
    box-shadow: 5px 5px 10px black;
    font-size: 28px;
    text-shadow: 1px 1px 3px black;
    font-family: Arial, Helvetica, sans-serif;
    cursor: pointer;
    }
    
    body { font-family: Verdana; }
.gujarati { font-family: shruti; }

.SOD{
    width: ;
    text-shadow: 1px 1px 13px black;
    color: white;
    text-align: center;
    font-size: 88px;
    position: relative;
    top: -33px;
}
a{
    text-decoration: none;
    color: black;
}
    </style>
</head>
<body>
    <h1 class="SOD">State Bank Of Dhruvil</h1>
    <div class="container">
        <button class="">
            <a href="English/english.php">ENGLISH</a>
        </button>
        <button class="bt-2">
        <a href="Gujarati/gujarati.php">ગુજરાતી</a>
        </button>
        <button class="bt-3">
        <a href="Hindi/hindi.php"> हिंदी</a>
        </button>
    </div>
</body>
</html>