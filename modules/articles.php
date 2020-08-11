<?php
    class Articles extends App{
        public function __construct($db){   

        $this->db = $db;
            
        }
        public function getAll(){
            return $this->db->query('SELECT * from posts')->fetchAll();
        }
        public function getSingle($id){
            return $this->db->query('SELECT * from posts where id=?', $id)->fetchArray();
        }

    }
