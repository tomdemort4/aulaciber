<?php

class Connection{
	public static function getConnection($config){
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
}

?>