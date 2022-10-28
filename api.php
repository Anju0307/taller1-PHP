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

            $res = match($this->mes){
                "enero" => fn($dia) => ($dia>0 && $dia<=20) ? "Capricornio" : (($dia>20 && $dia<=31) ?  "Acuario" : "Coloque un dia valido"),
                "febrero" => fn($dia) => ($dia>0 && $dia<=19) ? "Acuario" : (($dia>19 && $dia<=29) ?  "Piscis" : "Coloque un dia valido"),
                "marzo" => fn($dia) => ($dia>0 && $dia<=20) ? "Piscis" : (($dia>20 && $dia<=31) ?  "Aries" : "Coloque un dia valido"),
                "abril" => fn($dia) => ($dia>0 && $dia<=19) ? "Aries" : (($dia>19 && $dia<=30) ?  "Tauro" : "Coloque un dia valido"),
                "mayo" => fn($dia) => ($dia>0 && $dia<=20) ? "Tauro" : (($dia>20 && $dia<=31) ?  "Geminis" : "Coloque un dia valido"),
                "junio" => fn($dia) => ($dia>0 && $dia<=21) ? "Geminis" : (($dia>19 && $dia<=30) ?  "Cancer" : "Coloque un dia valido"),
                "julio" => fn($dia) => ($dia>0 && $dia<=22) ? "Cancer" : (($dia>19 && $dia<=31) ?  "Leo" : "Coloque un dia valido"),
                "agosto" => fn($dia) => ($dia>0 && $dia<=22) ? "Leo" : (($dia>19 && $dia<=31) ?  "Virgo" : "Coloque un dia valido"),
                "septiembre" => fn($dia) => ($dia>0 && $dia<=22) ? "Virgo" : (($dia>19 && $dia<=30) ?  "Libra" : "Coloque un dia valido"),
                "octubre" => fn($dia) => ($dia>0 && $dia<=22) ? "Libra" : (($dia>19 && $dia<=30) ?  "Escorpio" : "Coloque un dia valido"),
                "noviembre" => fn($dia) => ($dia>0 && $dia<=21) ? "Escorpio" : (($dia>19 && $dia<=30) ?  "Sagitario" : "Coloque un dia valido"),
                "diciembre" => fn($dia) => ($dia>0 && $dia<=21) ? "Sagitario" : (($dia>19 && $dia<=31) ?  "Capricornio" : "Coloque un dia valido"),
                default => "Coloque un mes valido"
            };
            return $res($this->dia);
        }
    }
    $obj = new zodiaco(mes:$_DATA['mes'],dia:$_DATA['dia']);
    echo($obj->obtener());
?>