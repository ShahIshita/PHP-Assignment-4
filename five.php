<?php

namespace MyNamespace;

abstract class DatabaseConnector
{
    abstract public function connect();
    abstract public function disconnect();
}

class MySQLConnector extends DatabaseConnector
{
    public function connect()
    {
        echo "Connected to MySQL Database<br />";
    }

    public function disconnect()
    {
        echo "Disconnected from MySQL Database<br />";
    }
}

class PostgreSQLConnector extends DatabaseConnector
{
    public function connect()
    {
        echo "Connected to PostgreSQL Database<br />";
    }

    public function disconnect()
    {
        echo "Disconnected from PostgreSQL Database<br />";
    }
}

$mysqlConnector = new MySQLConnector();
$postgreSQLConnector = new PostgreSQLConnector();

$mysqlConnector->connect();
$mysqlConnector->disconnect();

$postgreSQLConnector->connect();
$postgreSQLConnector->disconnect();

?>
