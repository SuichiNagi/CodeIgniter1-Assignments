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
            width: 400px;
            margin: 10px auto;
        }

        h2{
            padding: 5px;
            text-align: center;
        }

        table{
            width: 380px;
            margin: 10px;
        }

        td  {
            padding: 2px;
        }

        p{
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Product <?= $product['id']?></h2>
        <table>
            <tr>
                <td>Name: </td><td><?= $product['name']?></td>
            </tr>
            
            <tr>
                <td>Description: </td><td><?= $product['description']?></td>
            </tr>
            
            <tr>
                <td>Price: </td><td>$<?= $product['price']?></td>
            </tr>
        </table>
        <p>
            <a href='<?= base_url()?>products/edit/<?= $product['id']?>'>Edit</a> |
            <a href='<?= base_url()?>products'>Back</a>
        </p>
    </div>
</body>
</html>