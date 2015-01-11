<?php

class Config {

    private $host = "127.0.0.1";
    private $user = "root";
    private $senha = "";
    private $db = "vigilancia_epid";
    private $link;

    function __construct() {
        $this->link = mysql_pconnect($this->host, $this->user, $this->senha);
        mysql_select_db($this->db, $this->link);
        mysql_query("SET NAMES UTF8", $this->link);
    }

    //If $test == true then the $_POST may contain SQL Injection stuffs...
    public function checkString($query){

        foreach($query as $v) {
            if( strpos($v, '"') === false &&
                strpos($v, ' ') === false &&     
                strpos($v, ';') === false &&    
                strpos($v, '=') === false &&    
                strpos($v, '>') === false &&    
                strpos($v, '<') === false &&    
                strpos($v, '(') === false &&    
                strpos($v, ')') === false &&
                strpos($v, '#') === false &&
                strpos($v, '*') === false &&
                strpos($v, '!') === false)
            {
                
            } else {
                return true;
            }
        }
        return false;
    }
    
    public function executarQuery($query) {
        return mysql_query($query, $this->link);
    }
}

?>