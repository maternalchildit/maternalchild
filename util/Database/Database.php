<?php

namespace Database;

class Database {
  private $dbname;
  private $dbhost;
  private $dbuser;
  private $dbpassword;
  private $connected;
  private $cxn = null;

  function __construct() {
    $this->dbname = $_ENV['DATABASE_NAME'];
    $this->dbhost = $_ENV['DATABASE_HOST'];
    $this->dbuser = $_ENV['DATABASE_USER'];
    $this->dbpassword = $_ENV['DATABASE_PASSWORD'];
  }

  private function tableExists(string $table) {
    $sql = "SHOW TABLES LIKE '$table'";
    $query = @mysqli_query($this->cxn, $sql);
    if ($query) {
      if (mysqli_num_rows($query) === 1) {
        return true;
      } else {
        return false;
      }
    }
  }

  function connect() {
    if ($this->connected === true) {
      return true;
    }
    $cxn = @mysqli_connect($this->dbhost, $this->dbuser, $this->dbpassword);
    if ($cxn) {
      $dbcxn = @mysqli_select_db($cxn, $this->dbname);
      if ($dbcxn) {
        $this->cxn = $cxn;
        $this->connected = true;
      } else {
        $this->connected = false;
      }
    } else {
      $this->connected = false;
    }
    unset($cxn);
    return $this->connected;
  }

  function disconnect() {
    if ($this->cxn) {
      @mysqli_close($this->cxn);
      $this->cxn = null;
      $this->connected = false;
      return true;
    }
    $this->cxn = null;
    $this->connected = false;
    return true;
  }

  function select(string $table, string $rows = null, string $where = null, int $limit = null) {
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

      $query = @mysqli_query($this->cxn, $sql);
      if ($query) {
        if (mysqli_num_rows($query) === 1) {
          return [mysqli_fetch_assoc($query)];
        }

        if (mysqli_num_rows($query) > 1) {
          $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
          return $rows;
        }

        if (mysqli_num_rows($query) < 1) {
          return [];
        }
      }
    }
  }

  function insertOne(string $table, array $rowval): bool {
    if ($this->tableExists($table)) {
      $sql = "INSERT INTO $table";
      if ($rowval) {
        $rows = implode(",", array_keys($rowval));
        $values = array_values($rowval);
        $str_values = [];
        foreach ($values as $value) {
          $str_values[] = "'$value'";
        }

        $values = implode(',', $str_values);

        $sql .= " ($rows) VALUES ($values)";

        $query = @mysqli_query($this->cxn, $sql);

        if (mysqli_affected_rows($this->cxn) > 0) {
          return true;
        }
        return false;
      }
      return false;
    }
    return false;
  }

  function getError() {
    return mysqli_error($this->cxn);
  }

}