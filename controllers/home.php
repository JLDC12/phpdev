<?php  

	class home extends controller{
		protected function index(){
			$viewModel = new homeModel();
			$this -> ReturnView($viewModel -> index(), true);
		}
	}

?>