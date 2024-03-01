<?php

$config = require "config.php";

$pdo = Connection::make($config['database']);

CreateUsersTable::UsersTable($pdo);
CreatePostsTable::PostsTable($pdo);

require Router::load('./routes.php')->show(Request::uri());
