<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class TestController extends Controller
	{
		public $title;
		public function act1()
		{
			$this->title = 'Действие act1 контроллера test';
			echo '1';
			return $this->render('test/act_', []);
		}
		
		public function act2()
		{
			$this->title = 'Действие act2 контроллера test';
			echo '2';
			return $this->render('test/act_', []);
		}

		public function act3()
		{
			$this->title = 'Действие act3 контроллера test';
			echo '3';
			return $this->render('test/act_', []);
		}
		public function act()
		{
			// Зададим тайтл:
			$this->title = 'Действие act контроллера test';
			
			// Отрендерим представление, передав какие-то данные:
			return $this->render('test/act', [
				'var1' => 'eee',
				'var2' => 'bbb',
				'var3' => 'kkk',
			]);
		}
		}
		?>
