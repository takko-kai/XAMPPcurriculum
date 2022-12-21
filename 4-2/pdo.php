<?php
    define('DB_DATABASE', 'checktest4');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

    function connect() {
      try {
          $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
          return $pdo;
      } catch (PDOException $e) {
          echo 'Error:' . $e->getMessage();
          die();
      }
    }
    ?>