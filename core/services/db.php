<?php defined('APP_PATH') || exit('Direct Access is Prohibited.');

class db {
    public $builder;
    private $connection;

    public function __construct() {
        $db_conf = Flame::ConfigItem('db');
        $enabled = $db_conf['enabled'];
        $fetch_mode = $db_conf['fetch_objects'] ? PDO::FETCH_OBJ : PDO::FETCH_ASSOC;
        $username = $db_conf['username'];
        $password = $db_conf['password'];
        $db_name = $db_conf['db_name'];
        $db_host = $db_conf['db_host'];

        if(!$enabled) $this->builder = null;
        else {
            $connection = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $username, $password);
            $row_count = 0;
            $this->builder = new \ClanCats\Hydrahon\Builder('mysql', function($query, $queryString, $queryParameters) use($connection, $fetch_mode) {
                $statement = $connection->prepare($queryString);
                $statement->execute($queryParameters);
                if ($query instanceof \ClanCats\Hydrahon\Query\Sql\FetchableInterface) {
                    return array('rows' => $statement->fetchAll($fetch_mode), 'row_count' => $statement->rowCount());
                }
            });

            $this->connection = $connection;
        }
    }
    
    public function error_info() {
        return $this->connection->errorInfo();
    }

    public function error_code() {
        return $this->connection->errorCode();
    }

    public function insert_id() {
        return $this->connection->lastInsertId();
    }
}