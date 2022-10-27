<?php
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json; charset=utf-8');
    $_DATA = json_decode(file_get_contents("php://input"),true);

    class zodiaco{
        public $mes;
        public $dia;

        public function __construct(string $mes,int $dia){
            $this->mes = $mes;
            $this->dia = $dia;
        }

        public function obtener() :string{
            switch($this->mes){

                case "enero":
                    if($this->dia>0 && $this->dia<=20){
                        return "Capricornio";
                    } else if ($this->dia>20 && $this->dia<32){
                        return "Acuario";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "febrero":
                    if($this->dia>0 && $this->dia<=19){
                        return "Acuario";
                    } else if ($this->dia>19 && $this->dia<=29){
                        return "Piscis";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "marzo":
                    if($this->dia>0 && $this->dia<=20){
                        return "Piscis";
                    } else if ($this->dia>20 && $this->dia<=31){
                        return "Aries";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "abril":
                    if($this->dia>0 && $this->dia<=19){
                        return "Aries";
                    } else if ($this->dia>19 && $this->dia<=30){
                        return "Tauro";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "mayo":
                    if($this->dia>0 && $this->dia<=20){
                        return "Tauro";
                    } else if ($this->dia>20 && $this->dia<=31){
                        return "Geminis";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "junio":
                    if($this->dia>0 && $this->dia<=21){
                        return "Geminis";
                    } else if ($this->dia>21 && $this->dia<=30){
                        return "Cancer";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "julio":
                    if($this->dia>0 && $this->dia<=22){
                        return "Cancer";
                    } else if ($this->dia>22 && $this->dia<=31){
                        return "Leo";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "agosto":
                    if($this->dia>0 && $this->dia<=22){
                        return "Leo";
                    } else if ($this->dia>22 && $this->dia<=31){
                        return "Virgo";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "septiembre":
                    if($this->dia>0 && $this->dia<=22){
                        return "Virgo";
                    } else if ($this->dia>22 && $this->dia<=30){
                        return "Libra";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "octubre":
                    if($this->dia>0 && $this->dia<=22){
                        return "Libra";
                    } else if ($this->dia>22 && $this->dia<=30){
                        return "Escorpio";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "noviembre":
                    if($this->dia>0 && $this->dia<=21){
                        return "Escorpio";
                    } else if ($this->dia>21 && $this->dia<=30){
                        return "Sagitario";
                    } else {
                        return "Coloque un dia valido";
                    }
                case "diciembre":
                    if($this->dia>0 && $this->dia<=21){
                        return "Sagitario";
                    } else if ($this->dia>21 && $this->dia<=30){
                        return "Capricornio";
                    } else {
                        return "Coloque un dia valido";
                    }
            }
        }
    }
    $obj = new zodiaco(mes:$_DATA['mes'],dia:$_DATA['dia']);
    echo($obj->obtener());
?>