<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Display</title>
</head>
    <style>
        div{
            margin: 50px auto 0;
            text-align: center;
            border: 1px solid black;
            width: 250px;
        }
    </style>
<body>
    <div>
        <h4>The current time and date</h4>
    </div>
    <div>
        <h1><?= $time; ?></h1>
    </div>
</body>
</html>