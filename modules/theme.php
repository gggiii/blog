<?php
    class Theme extends App{
        public function __construct(){   

            //DEFAULT META VALUES
            $this->title = 'Blog';
            $this->lang = 'en';
            $this->charset = 'UTF-8';
            $this->description = 'The best website';
            $this->keywords = 'Website, Besst, Top';
            $this->author = 'Patrik Krivulcik';
            
        }

        //PAGE PARTS FUNCTIONS
        public function head(){
            include('template/parts/head.php');
        }
        public function footer(){
            include('template/parts/footer.php');
        }

        //META TAGS FUNCTIONS
        public function title(){
            
            return $this->title;
        }
        public function charset(){
            return $this->charset;
        }
        public function description(){
            return $this->description;
        }
        public function keywords(){
            return $this->keywords;
        }
        public function author(){
            return $this->author;
        }

        //HANDLE URL EXCEPTIONS
        public function exception($callback){
            $changed = call_user_func($callback);
            foreach($changed as $key=>$value){
                $this->$key = $value;
            }
        }
    }
?>