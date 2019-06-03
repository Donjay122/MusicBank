<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $pageTitle ?></title>
		<meta name="viewport" content="width=device-width , initial-scale=1">
		<meta name="author" content="Adediran Ayodeji">
		<meta name="description" content="Ayodeji's Online CV">
		<meta name="keywords" content="Ayodeji Adediran , Online CV , Codespace challenge ">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/musibank.css">
		<script src="https://use.fontawesome.com/a54ae1243a.js"></script>
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</head>
		<body>
			<div class="wrapper">
				<nav>
						<div class="main-nav">
							<a href="index.php" id="logo">MusicBANK<i class="fab fa-bitcoin flash faicon"></i></a>
							<ul class="nav-list">
								<li><a href="category.php?app=contact" class="greenborder <?php if($pageTitle == 'Contact') echo 'orange'; ?> ">Contact</a></li>
								<li><a href="category.php?app=withdraw" class="greenborder <?php if($pageTitle == 'Withdraw') echo 'orange'; ?>">Withdraw</a></li>
								<li><a href="category.php?app=balance" class="greenborder <?php if($pageTitle == 'Balance') echo 'orange'; ?>"> Balance</a></li>
								<li><a href="category.php?app=login" class="greenborder <?php if($pageTitle == 'Login') echo 'orange'; ?>">Login</a></li>
								<li><a href="category.php?app=signup" class="greenborder <?php if($pageTitle == 'Signup') echo 'orange'; ?>">Signup</a></li>
							</ul>
						</div><!--main-nav-->
					</nav>