<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>2. periood 1. harjutus, 1. leht</title>
</head>
<body>
	 <h2>1. leht</h2>
	 	<a href="http://localhost/2-periood-1-harjutus/second_page.php?name=juku&age=99&hobi=jalgrattad">Teine leht</a>
	 		</br>
		 <?php 
			 //echo "<h1>" . $_GET["name"] . "</h1>";
			 $link_file = "second_page.php";
			 $name = "Merili";
			 $age = 21;
		 ?>
		 <a href="
		 	<?php echo $link_file . '?name=' . $name . '&age=' . $age; ?>">Teine leht
		 </a>

</body>
</html>
	