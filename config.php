<?php
// pgsql:host=localhost;port=5432;dbname=linh"
return [
  'database' => [
    'name' => 'linh',
    'connection' => 'pgsql:host=localhost',
    'port' => 5432,
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]
  ]
];
