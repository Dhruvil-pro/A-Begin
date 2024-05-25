<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Processing</title>
    <style>
        body {
            background: url('dd.jpg') no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }
        .countdown {
            font-size: 1.5em;
            margin: 10px 0;
        }
    </style>
    <script>
        function startCountdown() {
            let countdownElement = document.getElementById('countdown');
            let seconds = 5;
            let interval = setInterval(function() {
                countdownElement.textContent = seconds;
                seconds--;
                if (seconds < 0) {
                    clearInterval(interval);
                    window.location.href = 'english.php'; // Replace with the URL of the page you want to redirect to
                }
            }, 1000);
        }

        window.onload = startCountdown;
    </script>
</head>
<body>
    <div class="container">
        <h1 class="SOD">State Bank Of Dhruvil</h1>
        <div class="countdown">Transaction is being processed.... <span id="countdown">5</span></div>
        <p>You will be redirected to another page</p>
    </div>
</body>
</html>
