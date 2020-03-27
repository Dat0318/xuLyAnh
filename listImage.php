<?php 
$url=$_POST["name"];
// echo $url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List images</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="list-img holder">
	<h3 class="display-3">Danh sách ảnh: </h3>
	<div class="img" >
		<h4 class="display-4">Ảnh gốc: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
	<div class="img blur">
		<h4 class="display-4">Ảnh blur: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
	<div class="img brightness">
		<h4 class="display-4">Ảnh brightness: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
	<div class="img contrast">
		<h4 class="display-4">Ảnh contrast: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
	<div class="img grayscale">
		<h4 class="display-4">Ảnh grayscale: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
	<div class="img huerotate">
		<h4 class="display-4">Ảnh huerotate: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
	<div class="img invert">
		<h4 class="display-4">Ảnh invert: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
	<div class="img opacity">
		<h4 class="display-4">Ảnh opacity: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
	<div class="img saturate">
		<h4 class="display-4">Ảnh saturate: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
	<div class="img sepia">
		<h4 class="display-4">Ảnh sepia: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
	<div class="img shadow">
		<h4 class="display-4">Ảnh shadow: </h4>
		<?php echo "<img src=".$url." >"; ?>
	</div>
</div>
</body>
</html>