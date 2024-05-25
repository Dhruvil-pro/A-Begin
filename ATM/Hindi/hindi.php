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
    </style>
</head>
<body>
<b><h1 class="SOD">State Bank Of Dhruvil</h1></b>
<h2 class="SOD1">के लिए<h2>
<h2 class="SOD1">नकद "निकासी"<h2>

<div class="container">
<div><?php echo "सेवा";?></div>
<div><?php echo "मिनी स्टेटमेंट";?></div>
<div><?php echo "मोबाइल पंजीकरण";?></div>
</div>
<div class="container1">
<div><?php echo "बैंकिंग";?></div>
<div><?php echo "संतुलन पूछताछ";?></div>
<div><?php echo "स्थानांतरण";?></div>
</div>
</body>
</html>