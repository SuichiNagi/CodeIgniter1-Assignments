<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<style>
		*{
			padding: 0px;
			margin: 0px;
            font-family: sans-serif;  
		}
		
		.container{
			margin: 10px auto;
			width: 750px;
			padding: 25px;
		}

		table{
			width: 750px;
			margin: 10px 0px;
			border: 1px solid black;
			border-collapse: collapse;
		}

		th{
			padding: 5px;
			border: 1px solid black;
		}

		td{
			padding: 2px 4px;
			border: 1px solid black;
		}

		td a{
			margin: 0px 5px;
		}

	</style>
</head>
<body>
	<div class="container">
		<h2>Products</h2>
		<table>
			<tr>
				<th>Name</th><th>Description</th><th>Price</th><th>Actions</th>
			</tr>
			<?php foreach($products as $product) { ?>
				<tr>
					<td><?= $product['name']?></td>
					<td><?= $product['description']?></td>
					<td>$<?= $product['price']?></td>
					<td style='width: 250px; text-align: center;'>
						<a href='<?= base_url()?>products/show/<?= $product['id']?>'>Show </a>|
						<a href='<?= base_url()?>products/edit/<?= $product['id']?>'>Edit</a>|
						<a href='<?= base_url()?>products/destroy/<?= $product['id']?>'> Remove</a>
					</td>
				</tr>
			<?php }?>
		</table>	
		<a href='<?= base_url()?>products/new'>Add a new product</a>
	</div>
	
</body>
</html>