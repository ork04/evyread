<?php
    
    class db
    {
        private $link;
        public $sql;
        
        public function __construct(){
            $this->link = new mysqli('localhost','ork04','il0vey0u','evyreader');
            if(!$this->link){
                die($this->link->connect."Err: connect to db");
            }
        }
        
        public function select(array $whatGet, $table){
            $this->sql = 'select '.implode(",", $whatGet).' from '.$table;
        }
        
        public function where()
        
        public function query(){
            $this->link->query($this->sql) or die($link->error().'Err: query mistake');
        }
    
    
    }
?>
