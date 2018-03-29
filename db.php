<?php 

require_once('item.php');


class DBConnection{

	private $connection;

	private function getConnection(){
		if( !$this->connection ){
			$this->connection=new PDO('mysql:host=localhost;dbname=shop;charset=utf8mb4', 'root', 'root');
		}else{
			return $this->connection;		
		}
	}

	//get array items
	 public function getAllItemsReturnArr(){
		$this->getConnection();
		
		$stmt=$this->connection->query("SELECT * FROM Item");
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	//get object items
	 public function getAllItemsReturnObj(){
		$this->getConnection();
		$sql="SELECT * FROM Item";
		$stmt=$this->connection->query($sql);
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		$items=array();
		foreach ($result as $row) {
			$item= new Item();
			$items[]=$item->arrayAdapter($row);
			
		}
		return $result;

	}
	


		
}

?>
 

