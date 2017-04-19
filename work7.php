<!doctype html>
<?php 
	$appid="web592group17.appspot.com";
	$page="home";
	if(isset($_GET['p'])) $page=$_GET['p'];
	if(strpos($page,".")) $page="error";
	$bodyfile = "work7_$page.php";
	?>
<html lang="en">
<head>
 <meta charset="UTF-8"><title><?= $page ?></title>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body background = "24.jpg"></body>
<<header class="page-header text-center">
<?php
 readfile("gs://$appid/header.html");
?> </header>
 <div class="container">
 <div class="col-xs-12 col-sm-6 col-md-3" style="background:#FFF0F5" id="menudiv">
	<div style="color:#000080;background:#FF6347">ส่วนเมนู </div>
	<?php include("work7menu.php"); ?>
	<a href="work7.php?p=edit&file=menu.txt" class="btn btn-default">แก้ไขเมนู</a>
 </div>
 <div class="col-xs-12 col-sm-6 col-md-9" style="background:#FFF0F5" id="bodydiv">
	<div style="color:#000080;background:#FF6347">ส่วนเนื้อหา
	</div>
	<?php
		if(file_exists($bodyfile)){
		include($bodyfile);
		 }
	else {
	 echo "<h2>$title</h2>";
	 $htmlfile = "gs://$appid/$page.html";
	 if(file_exists($htmlfile)){
		readfile($htmlfile);
	 }
	 echo "<br><a href='work7.php?p=edit&file=$page.html' class='btn btn-default'>Edit</a>";
	 }
	?>
</div>
	</div>
<footer class="text-center page-footer">
			<?php
			 readfile("gs://$appid/footer.html");
			 echo "<br><a href='?p=edit&file=header.html' class='btn btn-default'>แก้ไข header</a>";
			 echo "<a href='?p=edit&file=footer.html' class='btn btn-default'>แก้ไข footer</a>";
			?><br>ภาควิชาวิทยาการคอมพิวเตอร์ คณะวิทยาศาสตร์ มหาวิทยาลัยขอนแก่น
 </footer>
	</b>
	</font>
	</font>
</body></html>