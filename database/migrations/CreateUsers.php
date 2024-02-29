<?php

class CreateUsersTable
{
    public static function UsersTable($pdo)
    {
        try {
            $query = "CREATE TABLE IF NOT EXISTS Users ( 
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) NOT NULL UNIQUE,
                email VARCHAR(255) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )";
            $rslt = $pdo->prepare($query);
            $rslt->execute();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
