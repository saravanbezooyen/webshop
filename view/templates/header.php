<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Webshop</title>	
	<link rel="stylesheet" href="<?= URL ?>public/css/style.css">
</head>
<body>
	 <?php  
		 foreach ($categories as $category) { ?>
			<ul>		
				<li><a href="<?= URL ?>product/index/<?= $category['category_id']?>"><?= $category['category_description']; ?></a></li>
			</ul>
		<?php } ?> 