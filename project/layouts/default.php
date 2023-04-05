<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?= $title ?></title> <!-- выводим тайтл страницы -->
		<link rel="stylesheet" href="/project/webroot/styles.css">
	</head>
	<body>
		<header>
			хедер сайта
		</header>
		<div class="container">
			<aside class="sidebar_left">
				левый сайдбар
			</aside>
			<main>
				<?= $content ?>
				<p><a href="https://www.Youtube.com/"><img src="https://www.tutorialspoint.com/assets/questions/media/426142-1668760872.png" style="width:50px;height:50px;"></a></p>
			</main>
			<aside class="sidebar_right">
				правый сайдбар
			</aside>
		</div>
		<footer>
			футер сайта
		</footer>
	</body>
</html>
