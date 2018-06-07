<?php

class Conexao 
{
	private static $dbName = 'bd_petshop'; 
	private static $dbHost = 'localhost';
    private static $dbUsername = 'root';
    private static $dbUserPassword = '';
    private static $charset = 'utf8';
	
	private static $cont  = null;
	
	public static function conectar()
	{
       if ( null == self::$cont )
       {      
        try 
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName.";"."charset=".self::$charset.";", self::$dbUsername, self::$dbUserPassword);  
        }
        catch(PDOException $e) 
        {
          die($e->getMessage());  
        }
       } 
       return self::$cont;
	}
	
	public static function desconectar()
	{
		self::$cont = null;
	}
}
?>