<?php  

class shareModel extends model{
	public function index(){
		$this -> query('SELECT * FROM shares');
		$rows = $this -> resultSet();
		return $rows;
	}
	public function add(){
		return;
	}
}

?>