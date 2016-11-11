<?php

        $HOSTINGER=1;
	
	if ($HOSTINGER==1)
        {//En hostinger
	$host = "mysql.hostinger.es";
	$user = "u102281824_migel";
	$password = "miguel3";
	$dbname = "u102281824_sw";
        }
        else
        {//En local
        $host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "preguntas";
        }
	
	$mysqli = mysqli_connect($host, $user, $password, $dbname);
	
	if ($mysqli->connect_errno)
	{
		die ( 'Error al conectar con la Base de Datos' . mysqli_connect_error() . PHP_EOL);	
	}
?>