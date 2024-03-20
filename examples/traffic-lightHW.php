<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic Light</title>
    <style>
        .container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 100vh;
        }
        .light {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 2px solid #000;
        }
        .red {
            background-color: red;
        }
        .yellow {
            background-color: yellow;
        }
        .green {
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="light <?= isset($_GET['color']) && $_GET['color'] === 'red' ? 'red active' : '' ?>" id="red"></div>
        <div class="light <?= isset($_GET['color']) && $_GET['color'] === 'yellow' ? 'yellow active' : '' ?>" id="yellow"></div>
        <div class="light <?= isset($_GET['color']) && $_GET['color'] === 'green' ? 'green active' : '' ?>" id="green"></div>
    </div>

    <div>
        <a href="?color=red">Red</a>
        <a href="?color=yellow">Yellow</a>
        <a href="?color=green">Green</a>
    </div>
</body>
</html>
