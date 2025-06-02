<?php

interface Database {
    public function connect($host, $username, $password, $database);
    public function query($sql);
}

class MySQLDatabase implements Database {
    public function connect($host, $username, $password, $database) {
        echo "Connected to MySQL database '{$database}'<br>";
    }

    public function query($sql) {
        echo "Executing MySQL query: {$sql}<br>";
    }
}

class PostgreSQLDatabase implements Database {
    public function connect($host, $username, $password, $database) {
        echo "Connected to PostgreSQL database '{$database}'<br>";
    }

    public function query($sql) {
        echo "Executing PostgreSQL query: {$sql}<br>";
    }
}

class SQLiteDatabase implements Database {
    public function connect($path, $username = null, $password = null, $database = null) {
        echo "Connected to SQLite database '{$path}'<br>";
    }

    public function query($sql) {
        echo "Executing SQLite query: {$sql}<br>";
    }
}

$mysql = new MySQLDatabase();
$mysql->connect("localhost", "root", "password", "test_db");
$mysql->query("SELECT * FROM users");

echo "<br>";

$pgsql = new PostgreSQLDatabase();
$pgsql->connect("localhost", "postgres", "password", "test_db");
$pgsql->query("SELECT * FROM users");

echo "<br>";

$sqlite = new SQLiteDatabase();
$sqlite->connect("test.db");
$sqlite->query("SELECT * FROM users");