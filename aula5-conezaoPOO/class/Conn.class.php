<?php

class Conn {
    //declaração dos atributos
    //static - em qualquer lugar
    public static $host = HOST;
    public static $user = USER;
    public static$pass = PASS;
    public static $db = DBNAME;

    private static $connect = null;

    //método conectar
    private static function Conectar(){
        //try e catch- tente e senão, faça o catch
        try {
            //efetuar a conexão com o bd
            //PDO('HPST',dbname',USER,PASS)
            if(self::$connect == null):
                new PDO('mysql:host=' . self::$host . ';dbname=' . self::$db, self::$user, self::$pass);

            endif;
        } catch (Exception $e) {
            //caso falhe faça isto
            echo "Mensagem ".$e -> getMessage();
            die();
       }
       return self::$connect;
    }

    //método q executa o método Conectar
    function getConn(){
        return self::Conectar();
    }
}