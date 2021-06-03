<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random World Generator</title>
</head>
<body>
    <p>Random Word (attempt #<?= $count ?>)</p>
    <h2>
        <?php foreach($random as $rand_letter){
            echo $rand_letter;
        } ?>
    </h2>
    <h3><a href='<?= base_url() ?>'>Generate</a></h3>
</body>
</html>