<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Webshop</title>	
	<link rel="stylesheet" href="<?= URL ?>">
</head>
<body>
	<nav>
		<li> <?php foreach ($categories as $category) { ?>
			<ul>		
				<a href="<?= URL ?>categories/index/<?php echo $category['category_id']?><?php echo $category['category_description']; ?></a>
			</ul>
		<?php } ?> </li>
	</nav>