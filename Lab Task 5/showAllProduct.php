<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProduct();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Buying_Price</th>
			<th>Selling_Price</th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>
				<td><?php echo $product['Name'] ?></td>
				<td><?php echo $product['Buying_Price'] ?></td>
				<td><?php echo $product['Selling_Price'] ?></td>
				<td><a href="editProduct.php?Name=<?php echo $product['Name'] ?>">Edit</a>&nbsp<a href="controller/deleteProduct.php?Name=<?php echo $product['Name'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>