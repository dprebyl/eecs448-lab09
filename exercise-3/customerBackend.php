<?php 
	$products = json_decode(file_get_contents("products.json"), true);
	$shippings = json_decode(file_get_contents("shippings.json"), true);
	$shippingName = str_replace("-", " ", substr($_POST["shippingSpeed"], 5));
	$total = $shippings[$shippingName];
?>
<!DOCTYPE html>
<html class="h-100">
	<head>
		<meta charset="utf-8">
		<title>Web Store - EECS 448 Lab 9</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--Bootstrap styles-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		
		<link rel="stylesheet" href="style.css">
		<script>
			//Bogus order processing
			window.addEventListener("DOMContentLoaded", () => {
				setTimeout(() => {
					document.getElementById("loading").style.display = "none";
					document.getElementById("receipt-container").style.display = "";
				}, 1500);
			});
		</script>
	</head>
	<body class="h-100 d-flex flex-column">
		<nav class="navbar navbar-expand navbar-dark bg-dark border-bottom" style="flex-shrink: none">
			<a class="navbar-brand" href="index.html">EECS 448 Lab 9</a>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../exercise-1.php">1: Multiplication Table</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../exercise-2/Quiz.html">2: Quiz</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="../exercise-3/customerFrontend.html">3: Web Store</a>
				</li>
			</ul>
		</nav>
		<div class="container" style="flex: 1 0 auto">
			<h1 class="mt-3">3. Web Store Results</h1>
			<hr>
			<h2>Welcome, <?=$_POST["username"]?></h2>
			<p>Your password is: <?=$_POST["password"]?></p>
			<div id="loading">
				<h3>Processing purchase...</h3>
				<div class="spinner-border"></div>
			</div>
			<div id="receipt-container" style="display:none">
				<h3>Purchase Receipt</h3>
				<table class="receipt">
					<tr>
						<th></th><th>Quantity</th><th>Cost Per Item</th><th>Sub Total</th></tr>
						<?php foreach ($products as $name => $price): 
							$quantity = $_POST["prod-".str_replace(" ", "-", $name)]; 
							$total += $price*$quantity; ?>
							<tr><th><?=$name?></th><td><?=$quantity?></td><td>$<?=number_format($price, 2)?></td><td>$<?=number_format($price*$quantity, 2)?></td></tr>
						<?php endforeach; ?>
						<tr><th>Shipping</th><td colspan=2><?=$shippingName?></td><td>$<?=number_format($shippings[$shippingName], 2)?></td></tr>
						<tr><th colspan=3>Total Cost</th><th>$<?=number_format($total, 2)?></th></tr>
					</tr>
				</table>
			</div>
			
		</div>
		<footer class="mt-2 py-2 border-top text-center" style="flex-shrink: none">
			&copy; 2020 Drake Prebyl
		</footer>
	</body>
</html>