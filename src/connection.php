<?php

require __DIR__.'/vendor/autoload.php';

interface IConnection {
  public function __construct(string $serverName, string $tableName, string $user, string $password);
  public function connect(IDatabase $database);
}

interface IDatabase {
  public function connect(string $database, string $tableName, string $user, string $password): string;
}

class Mysql implements IDatabase {
  public function connect(string $database, string $tableName, string $user, string $password): string{
    return 'Conectado com o MySQL';
  }
}

class Connection implements IConnection {
  public function __construct(string $serverName, string $tableName, string $user, string $password) {
    $this->serverName = $serverName;
    $this->tableName = $tableName;
    $this->user = $user;
    $this->password = $password;
  }

  public function connect(IDatabase $database) {
    echo $database->connect($this->serverName, $this->tableName, $this->user, $this->password);
  }
}

$connection = new Connection('localhost', 'tabela_curso', 'root', '');
$connection->connect(new Mysql());