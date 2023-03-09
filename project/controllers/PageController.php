<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller
	{
		public function show1()
		{
			echo '1';
		}
		
		public function show2()
		{
			echo '2';
		}
		public function act($params)
		{
			##var_dump($params); // ['var1' => 'eee', 'var2' => 'bbb']
			echo "$params[var1] + $params[var2] =  ";
		echo  array_sum($params) ;
		}
		private $pages;
		
		public function __construct()
		{
			$this->pages = [
				1 => 'страница 1',
				2 => 'страница 2',
				3 => 'страница 3',
			];
		}
	
		public function show($params)
		{
			echo $this->pages[ $params['id'] ]; // выводим страницу по номеру
		}
		}
		?>
