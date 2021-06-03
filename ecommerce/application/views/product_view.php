<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }
    .header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 25px 30px 25px 5px;
    }
        h1, h2{
            display: inline-block;
        }
    table{
        margin: 0 45px;
    }
        th{
            font-size: 20px;
            padding: 0 15px;
        }
        td{
            font-size: 25px;
        }
        input[type=number]{
            height: 25px;
            border: 2px solid black;
            font-size: 20px;
            width: 55px;
        }
        .btn-buy{
            cursor: pointer;
            border: 2px solid black;
            padding: 0 5px;
            text-decoration: none;
            font-size: 20px;
            color: white;
            background: green;
            box-shadow: 2px 2px black;
        }
</style>
<body>
    <div class="header">
        <h1>Products</h1>
        <a href="<?= base_url()?>carts/index"><h2>Your Cart</h1></a>
    </div>
    <table>
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($product as $row){ ?>
            <form action="<?= base_url() ?>carts/add/<?= $row['id'] ?>" method="post">
                <tr>
                    <td><?= $row['description']; ?></th>
                    <td><?= $row['price']; ?></td>
                    <td><input type="number" name="quantity" value ="1" min="1" max="<?= $row['quantity']; ?>"></td>
                    <td><input class="btn-buy" type="submit" value="Buy"></a></td>
                </tr> 
            </form>  
            <?php } ?>      
            </tbody> 
        </table>
</body>
</html>