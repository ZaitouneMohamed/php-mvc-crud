<?php

class CreatePostsTable
{
    public static function PostsTable($pdo)
    {
        try {
            $query = "CREATE TABLE IF NOT EXISTS Posts ( 
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(255) NOT NULL UNIQUE,
                slug VARCHAR(255) NOT NULL UNIQUE,
                body TEXT NOT NULL,
                status INT DEFAULT 1,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                )";

            $rslt = $pdo->prepare($query);
            $rslt->execute();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
