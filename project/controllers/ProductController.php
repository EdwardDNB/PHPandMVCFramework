<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Product; // подключаем нашу модель

	class ProductController extends Controller
	{
		public $title;
		public function one($params)
		{
			$product = (new Product) -> getById($params['id']);
			
			$this->title = $product['title'];
			return $this->render('products/one', [
				
				'h1' => $this->title,
				'price' => $product['price'],
				'quantity' => $product['quantity'],
				'description' => $product['description']
			]);
		}
		
		public function all()
		{
			$this->title = 'Список всех Products';
			
			$products = (new Product) -> getAll();
			return $this->render('products/all', [
				'products' => $products,
				'h1' => $this->title,
				
			]);
		}
		
		private $products;
		
		public function __construct()
		{
			$this->products = [
				1 => [
					'name'     => 'product1',
					'price'    => 100,
					'quantity' => 5,
					'category' => 'category1',
				],
				2 => [
					'name'     => 'product2',
					'price'    => 200,
					'quantity' => 6,
					'category' => 'category2',
				],
				3 => [
					'name'     => 'product3',
					'price'    => 300,
					'quantity' => 7,
					'category' => 'category2',
				],
				4 => [
					'name'     => 'product4',
					'price'    => 400,
					'quantity' => 8,
					'category' => 'category3',
				],
				5 => [
					'name'     => 'product5',
					'price'    => 500,
					'quantity' => 9,
					'category' => 'category3',
				],
			];
		}
	
		public function show($params)
		{
			var_dump($this->products[ $params['n'] ]);
		}
		public function product($params)
		{
			return $this->render('products/product', $this->products[$params['n']]);
		}
		public function productsAll()
		{
			$sank=['key'=>$this->products];
			return $this->render('products/productsAll', $sank);
		}
		}
		?>
