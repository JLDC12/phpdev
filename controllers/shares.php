<?php  

	class shares extends controller{
		protected function index(){
			$viewModel = new shareModel();
			$this -> ReturnView($viewModel -> index(), true);
		}
		protected function add(){
			$viewModel = new shareModel();
			$this -> ReturnView($viewModel -> add(), true);
		}
	}

?>