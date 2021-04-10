<?php
try
{
    $conn = new PDO( 'mysql:host=' . DBHOSTNAME . ';dbname=' . DBNAME, DBUSER, DBPASSWORD );
}
catch ( PDOException $e )
{
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}