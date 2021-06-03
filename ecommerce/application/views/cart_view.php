<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
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
    .btn-back{
            background: green;
        }
    h1{
        margin: 15px;
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
        a{
            cursor: pointer;
            border: 2px solid black;
            padding: 0 5px;
            text-decoration: none;
            font-size: 20px;
            color: white;  
            box-shadow: 2px 2px black;
        }
        .btn-delete{
            background: red;
        }
</style>
<body>
    <div class="header">
        <h1>Check Out</h1>
        <a class="btn-back" href="<?= base_url() ?>">Go back</a>
    </div>
    <table>
            <thead>
                <tr>
                    <th>Qty</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            $total_qty = 0;
            $total_price = 0;
            foreach($carts as $row){ ?>
                <tr>
                    <td><?= $row['quantity'] ?></th>
                    <td><?= $row['description'] ?></td>
                    <td>$<?= $row['price'] ?></td>
                    <td><a class="btn-delete" href="<?= base_url() ?>carts/delete/<?= $row['id'] ?>">Delete</a></td>
                    <?php $total_qty += $row['quantity']; ?>
                    <?php $total_price += $row['price']; ?>
                </tr> 
            <?php } ?>
                <tr>
                    <td>Total & Price:</td>
                    <td><?= $total_qty ?></td>
                    <td>$<?= $total_price ?></td>
                </tr>
            </tbody> 
            </table>
</body>
</html>