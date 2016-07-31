<?php
define('host', 'localhost');
define('user', 'root');
define('password', 'croopside91');
define('dbname', 'crud');

function openConnection()
{
	mysql_select_db(dbname, mysql_connect(host, user, password));
}

function closeConnection()
{
	mysql_close(mysql_connect(host, user, password));
}
?>