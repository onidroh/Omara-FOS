<?php
class Database {
    public static function Conectar() {
        $db = new PDO('mysql:host=localhost;dbname=usuarios;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $db;
    }
}