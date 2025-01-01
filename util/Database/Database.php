<?php

namespace Database;

use Exception;
use Logger\Logger;
use PDO;

class Database
{
  private $dbname;
  private $dbhost;
  private $dbuser;
  private $dbpassword;
  private $connected;
  private ?PDO $cxn = null;

  function __construct()
  {
    $this->dbname = env('DATABASE_NAME');
    $this->dbhost = env('DATABASE_HOST');
    $this->dbuser = env('DATABASE_USER');
    $this->dbpassword = env('DATABASE_PASSWORD');
  }

  private function tableExists(string $table)
  {
    $query = $this->cxn->prepare("SHOW TABLES LIKE ?");
    $query->execute([$table]);

    $result = $query->fetch();

    if (!$result) {
      return false;
    }

    return $result[0] == $table;
  }

  function connect()
  {
    if ($this->connected === true) {
      return true;
    }

    $p = new PDO($_ENV['DATABASE_URL']);

    $this->cxn = $p;

    unset($p);
  }

  function disconnect()
  {
    if ($this->cxn) {
      // @mysqli_close($this->cxn);
      // $this->cxn = null;
      unset($this->cxn);
      $this->connected = false;
      return true;
    }

    $this->cxn = null;
    $this->connected = false;
    return true;
  }

  function select(string $table, string $rows = null, string $where = null, int $limit = null, int $skip = 0)
  {
    if ($this->tableExists($table)) {
      if (!$rows) {
        $rows = "*";
      }
      $sql = "SELECT $rows FROM $table ";
      if ($where) {
        $sql .= "WHERE $where ";
      }
      if ($limit) {
        $sql .= "LIMIT $limit";
      }
      if ($skip) $sql .= " OFFSET $skip ";

      $query = $this->cxn->query($sql);

      return $query->fetchAll(PDO::FETCH_ASSOC);
    } else {
      throw new Exception("Table $table does not exist");
    }
  }

  function insertOne(string $table, array $rowval): bool
  {
    if ($this->tableExists($table)) {
      if ($rowval) {
        $sql = "INSERT INTO $table";
        $rows = implode(",", array_keys($rowval));
        $values = array_values($rowval);
        $str_values = [];
        foreach ($values as $value) {
          $str_values[] = "?";
        }

        $str_values = implode(',', $str_values);

        $sql .= " ($rows) VALUES ($str_values)";

        return $this->cxn->prepare($sql)->execute($values);
      }

      return false;
    }

    return false;
  }
}
