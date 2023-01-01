<?php

class Database
{
    public $connection;
    public $statment;

    public function __construct($config, $username = 'mohamad', $password = '76612235')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function querry($query, $params = [])
    {
        $this->statment = $this->connection->prepare($query);
        $this->statment->execute($params);
        return $this;
    }

    public function getOne()
    {
        return $this->statment->fetch();
    }

    public function getAll()
    {
        return $this->statment->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->getOne();
        if (!$result) {
            abort();
        }
        return $result;
    }
}
