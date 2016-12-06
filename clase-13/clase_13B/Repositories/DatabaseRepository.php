<?php

abstract class DatabaseRepository {
    private $connection;
    protected function getConnection() {
        if (!$this->connection) {
            $this->connection = new PDO ('mysql:host=localhost;dbname=registracion;charset=UTF8mb4',
                'root',
                '123456',
                [
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        }

        return $this->connection;

    }
}
 ?>
