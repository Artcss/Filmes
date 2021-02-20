<?php

class Sql {

    public __FUNCTION__construct(){

          return $this->conn = mysqli_connect("127.0.0.1", "root", "root", "hcode_shop")

    }
    public __FUNCTION__destruct(){

         public function query($string_query){
             return mysqli_query($this->conn, $string_query);
         }

        msqli_close($this->coon;)
    }
}

?>