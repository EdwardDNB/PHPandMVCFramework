<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class UserController extends Controller
	{
		private $users;
		public function __construct()
		{
			$this->users = [
				1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
				2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
				3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
				4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
				5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
			];
		}
	
		public function show($params)
		{
			if ($params['id']==='all') {
				foreach($this->users as $result) {
					echo implode(" ",$result), '<br>';
				}
			} else {
				echo implode(" ",$this->users[ $params['id'] ]);
			}
			
		}
		public function info($params)
		{
			if ($params['id']==='first') {
				for($result=1;$result <=$params['key'] ; $result++) {
					echo implode(" ",$this->users[ $result ]), '<br>';
				}
			} else {
				$sank= $this->users[ $params['id'] ];
			echo $sank[$params['key']];
			}
			
		
		}
		
		}
		?>