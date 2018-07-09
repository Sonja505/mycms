<?php

session_start();
	include_once('../includes/connection.php');
	include_once('../includes/article.php');

	$article = new Article;

if (isset($_SESSION['logged_in'])) {
	$articles= $article->fetch_all();
?>

<!DOCTYPE html>
		<html>
		<head>
			<title>CMS </title>
			<link rel="stylesheet" type="text/css" href="../assets/style.css">
		</head>
		<body>
			<div class="container">
				<a href="index.php" id="logo">CMS</a>
				<br>
			<form action="delete.php" method="get">
				<select onchange="this.form.submit();">
					<?php foreach ($articles as $article){ ?> 
						<option value=" <?php echo $article['article_id'];?>">	<?php echo $article['article_title'];?>
							
						</option>
				<?php	} ?>
				</select>
							</form>
		</div>
		</body>
		</html>


<?php
}
else{
	header('Location: index.php');
}

?>
