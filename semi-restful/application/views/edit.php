<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        *{
            padding: 0px;
            margin: 0px;
            font-family: sans-serif;     
        }

        .container{
            width: 320px;
            margin: 10px auto;
        }

        h2{
            padding: 10px;
            text-align: center;
        }

        form{
            padding: 10px 10px 0px;
        }

        input[type='text'], textarea{
            width: 295px;
            border: 2px solid black;
            margin: 5px 0;
            padding: 5px;
        }

        input[type='submit']{
            display: block;
            margin: 15px 0 0;
            width: 80px;
            padding: 5px;
            border: 2px solid black;
            box-shadow: 3px 3px black;
            cursor: pointer;
        }
        p{
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Edit product <?= $product['id']?></h2>
        <form action='/products/update/<?= $product['id']?>' method='post'>
            <label>Name:</label>
            <input type='text' name='name' value='<?= $product['name']?>'>
            <label>Description:</label>
            <textarea name='description' rows='3' cols='35'><?= $product['description']?></textarea> 
            <label>Price:</label>
            <input type='text' name='price' value='$<?= $product['price']?>'>
            <input type='submit' value='update'><br>
        </form>
        <p><a href='<?= base_url()?>products/show/<?= $product['id']?>'>Show</a> | <a href='<?= base_url()?>/products'>Back</a></p>
    </div>
</body>
</html>