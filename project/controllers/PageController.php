<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller
	{
		public function show1()
		{
			$this->title = 'Действие show1 контроллера page';
			echo '1';
			return $this->render('test/act_', []);
		}
		
		public function show2()
		{
			$this->title = 'Действие show2 контроллера page';
			echo '2';
			return $this->render('test/act_', []);
		}
		public function act($params)
		{
			$this->title = 'Действие act контроллера page';
			echo "$params[var1] + $params[var2] =  ";
		echo  array_sum($params) ;
		return $this->render('test/act_', []);
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
			$this->title = 'Действие show контроллера page';
			echo $this->pages[ $params['id'] ]; // выводим страницу по номеру
			return $this->render('test/act_', []);
		}
		public function act_()
		{
			$this->title = 'Действие act_ контроллера page';
			return $this->render('page/act_', [
				'var1' => 'eee',
				'var2' => 'bbb',
				'var3' => 'kkk',
				'header' => 'список юзеров',
				'users'  => ['user1', 'user2', 'user3'],
			]);
		}

		}
		?>
