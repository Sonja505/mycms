<?php
	include_once('includes/connection.php');
	include_once('includes/article.php');
	

	$article = new Article;
	$articles = $article->fetch_all();

?>

<!DOCTYPE html>

<html>

<head>
	<title>CMS </title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<div class="container">
		<a href="index.php" id="logo">CMS</a>

		<ol>
			<?php foreach($articles as $article) 
				{?>
					<li>
						<a href="article.php?id=<?php echo $article['article_id']; ?>">
							<?php echo $article['article_title'];  ?>
						</a>
						-<small> posted
							<?php echo date('d/m/Y', $article['article_timestamp']);  ?>
						</small>
					</li>
				<?php 
			}  ?>
		</ol>

		<br>
		<small><a href="admin">admin</a></small>
	</div>

</body>
</html>