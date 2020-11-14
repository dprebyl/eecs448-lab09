<!DOCTYPE html>
<html class="h-100">
	<head>
		<meta charset="utf-8">
		<title>Multiplication Table - EECS 448 Lab 9</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!--Bootstrap styles-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body class="h-100 d-flex flex-column">
		<nav class="navbar navbar-expand navbar-dark bg-dark border-bottom">
			<a class="navbar-brand" href="index.html">EECS 448 Lab 9</a>
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="exercise-1.php">1: Multiplication Table</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="exercise-2/Quiz.html">2: Quiz</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="exercise-3/customerFrontend.html">3: Web Store</a>
				</li>
			</ul>
		</nav>
		<div class="container" style="flex: 1 0 auto">
			<h1 class="mt-3">1. Multiplication Table</h1>
			<table class="table table-bordered table-sm">
				<thead class='thead-dark'>
					<?php
						// Print header row
						echo "<tr>";
						for ($i = 0; $i <= 100; $i++) {
							echo "<th>" . ($i == 0 ? "" : $i) . "</th>";
						}
						echo "</tr>";
						
						// Print main part of table
						for ($i = 1; $i <= 100; $i++) {
							echo "<tr><th>$i</th>";
							for ($j = 1; $j <= 100; $j++) {
								echo "<td>" . ($i*$j) . "</td>";
							}
							echo "</tr>";
						}
					?>
				</thead>
			</table>
		</div>
		<footer class="mt-2 py-2 border-top text-center">
			&copy; 2020 Drake Prebyl
		</footer>
	</body>
</html>