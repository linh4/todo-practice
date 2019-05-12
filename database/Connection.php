<?php

class Connection {

  public static function make($config) {
    try {
      return new PDO(
        $config['connection'].';port='.$config['port'].';dbname='.$config['name']
      );
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

}
