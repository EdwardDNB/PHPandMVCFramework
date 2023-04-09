<?php
	use \Core\Route;
	
	return [
		new Route('/hello/', 'hello', 'index'), // роут для приветственной страницы, можно удалить
		new Route('/act1/', 'test', 'act1'),
		new Route('/act2/', 'test', 'act2'),
		new Route('/act3/', 'test', 'act3'),
		new Route('/act/', 'test', 'act'),
		new Route('/my-page1/', 'page', 'show1'),
		new Route('/my-page2/', 'page', 'show2'),
		new Route('/test/:var1/:var2/', 'page', 'act'),
		new Route('/page/:id/', 'page', 'show'),
		new Route('/user/:id/', 'user', 'show'),
		new Route('/user/:id/:key/', 'user', 'info'),
		new Route('/user/first/:n/', 'user', 'first'),
		new Route('/act_/', 'page', 'act_'),
		new Route('/test/', 'page', 'test'),
		new Route('/page/:n/', 'page', 'showPage'),
		new Route('/product/:n/', 'product', 'product'),
		new Route('/products/all/', 'product', 'productsAll'),
	];
	?>
