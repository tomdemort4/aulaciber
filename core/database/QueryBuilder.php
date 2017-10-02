
<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getTableNoticias() {

        $query = "Select * from noticias";


        try {
            $statement = $this->pdo->prepare($query);

            $statement->execute();
        } catch (Exception $ex) {
            die($ex->getMessage());
        }

        return $statement;
    }

    public function getTableActividades($categoria) {

        $query = "Select * from actividades where categoria_actividad = ?";


        try {
            $statement = $this->pdo->prepare($query);

            $statement->execute(array($categoria));
        } catch (Exception $ex) {
            die($ex->getMessage());
        }

        return $statement;
    }
    
    

    public function getTableVacaciones() {

        $query = "Select * from noticias_vacaciones";


        try {
            $statement = $this->pdo->prepare($query);

            $statement->execute();
        } catch (Exception $ex) {
            die($ex->getMessage());
        }

        return $statement;
    }

}
