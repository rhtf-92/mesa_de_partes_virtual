<?php
    class Conectar{
        
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar = $this->dbh = new PDO("mysql:local=localhost; dbname=mesadepartes","soporte","HeH8jI6aMi");
            }catch(Exception $e){
                print "Error de BD: ".$e->getMessage()."<br>";
                die();
            }
        }

        public function set_names(){

        }
        
        public static function ruta(){

        }
    }

?>