<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Suendri">

	<title>Eid Mubarak Blog | PBWL Project10</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/logo2.png" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
	<script src="<?php echo AST; ?>/datatables/datatables.min.js"></script>
	<!-- Bootsrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

	<aside style="background-color : #232946">
		<header>
			<img src="<?php echo AST; ?>/img/logo2.png" class="brand">
			<div class="user text-white"><?php echo $_SESSION['user_name']; ?></div>
		</header>

		<nav>
			<ul class="text-white">
				<li>
					<a href="<?php echo URL; ?>/dashboard">
						<i class="fas fa-home"></i> Home
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/categories">
						<i class="fas fa-list-alt"></i> Golongan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/posts">
						<i class="fas fa-users"></i> Pelanggan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/users">
						<i class="fas fa-user"></i> Users
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/dashboard/logout">
						<i class="fas fa-sign-out-alt"></i> Logout
					</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article class="p-3">
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2022 - <?php echo date('Y'); ?>. Designed by Mr. Sue
		</footer>
	</main>

	<script>
		new DataTable('#dtb', {
			info: false,
			ordering: true,
			paging: true
		});
	</script>

	<!-- Bootsrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>