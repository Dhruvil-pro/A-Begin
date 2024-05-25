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
    a{
        text-decoration: none;
        color: black;
    }
    input{
        background: transparent;
        border: transparent;
        font-size: 20px;
        cursor:pointer;
        padding-top: 10px;
    }
    </style>
</head>
<body>
    <h1 class="text-check">State Bank Of Dhruvil</h1>

        <div class="block">
            <pre>--------------------------
----------<h3>KCC</h3>----------
--------------------------</pre>
        </div>


        <form method="post" class="container" action="kcc.php">
        <div class="f"><input type="submit" name="op" value="FROM CURRENT"></div>
        <div class="f"><input type="submit" name="op" value="FROM SAVING"></div>
    </form>
   
   <?php 

session_start();

if(isset($_POST['op']))
{
    if($_POST['op']=="FROM CURRENT")
    {
        $_SESSION['y7'] = 1;
        echo "<script>
        setTimeout(function() {
            window.location.href = 'after_kcc.php';
        }, 1000);
      </script>";
    }
    elseif($_POST['op']=="FROM SAVING")
    {
        $_SESSION['y7'] = 2;
        echo "<script>
        setTimeout(function() {
            window.location.href = 'after_kcc.php';
        }, 1000);
      </script>";
    }

}
?>



</body>
</html>