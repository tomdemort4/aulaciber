
<?php

class QueryBuilder{

	protected $pdo;

	public function __construct($pdo){
		$this->pdo = $pdo;
	}


	public function getTable($table){

		$query = $this->pdo->prepare("Select * from {$table}");

		$query->execute();

		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getSpecificField($table,$id,$field){
		
        $query = $this->pdo->query("Select * from {$table} where {$field}=$id");

        $query->execute();
        
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


}


?>