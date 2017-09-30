
<?php

$config = require 'core/database/config.php';


require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

//GET CONNECTION
$pdo = Connection::getConnection($config['database']);
     
$queryBuilder = new QueryBuilder($pdo);


$noticias = $queryBuilder->getTable('noticias');

$actividades = $queryBuilder->getTable('actividades');

$vacaciones = $queryBuilder->getTable('noticias_vacaciones');
