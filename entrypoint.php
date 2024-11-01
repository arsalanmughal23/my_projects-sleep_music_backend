<?php
$content             = file_get_contents(".env");
$SERVER_ID           = getenv("SERVER_ID");
$SERVER_TYPE         = getenv("SERVER_TYPE");
$MYSQL_DATABASE_HOST = getenv("MYSQL_HOST");
$MYSQL_DATABASE      = getenv("MYSQL_DATABASE");
$MYSQL_USER          = getenv("MYSQL_USER");
$MYSQL_PASSWORD      = getenv("MYSQL_PASSWORD");
$REDIS_HOST          = getenv("REDIS_HOST");

$content = preg_replace("/^DB_HOST=.+$/m", "DB_HOST=$MYSQL_DATABASE_HOST", $content);
$content = preg_replace("/^DB_DATABASE=.+$/m", "DB_DATABASE=$MYSQL_DATABASE", $content);
$content = preg_replace("/^DB_USERNAME=.+$/m", "DB_USERNAME=$MYSQL_USER", $content);
$content = preg_replace("/^DB_PASSWORD=.+$/m", "DB_PASSWORD=$MYSQL_PASSWORD", $content);
$content = preg_replace("/^SERVER_ID=.+$/m", "SERVER_ID=$SERVER_ID", $content);
$content = preg_replace("/^SERVER_TYPE=.+$/m", "SERVER_TYPE=$SERVER_TYPE", $content);
$content = preg_replace("/^REDIS_HOST=.+$/m", "REDIS_HOST=$REDIS_HOST", $content);

file_put_contents(".env", $content);