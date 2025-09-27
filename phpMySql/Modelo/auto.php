<?php
include_once __DIR__. '/../BaseDatos.php';
class Auto {
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;

    public function __construct( $p , $marca, $modelo, $dni){
        $this->patente = $p;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->dniDuenio = $dni;
    }

    public function getPatente(){
        return $this->patente;
    }

    public function setPatente ($nuevo){
        $this->patente = $nuevo;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($nuevo){
        $this->marca = $nuevo;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($nuevo){
        $this->modelo=$nuevo;
    }

    public function getDniDuenio(){
        return $this->dniDuenio;
    }

    public function setDniDuenio($nuevo){
        $this->dniDuenio= $nuevo;
    }

    public function seleccionar(){
        $res= false;
        $base= new BaseDatos();

        if( $base->Iniciar()){
            $sql= "SELECT * FROM auto WHERE patente = '" . $this->getPatente() . "'";
            $res= $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row= $base->Registro();
                    $res= true;
                    $this->setDniDuenio($row['DniDuenio']);
                    $this->setMarca($row['Marca']);
                    $this->setModelo($row['Modelo']);
                    $this->setPatente($row['Patente']);

                }
            }
        }
        return $res;
    }

    public function ingresar(){
        $res= false;
        $base= new BaseDatos();
        $sql= "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) VALUES('" . $this->getPatente() . "' , '" . $this->getMarca() . "' , '" . $this->getModelo() . "' , '" . $this->getDniDuenio() . "');";
        if($base->Iniciar()){
            $elid= $base->Ejecutar($sql);
            if( $elid != 0 ){
                $res=true;
            }
        }
        return $res;
    }

    public function modificar(){
        $res=false;
        $base= new BaseDatos();
        $sql= "UPDATE auto SET 
            Marca = '" . $this->getMarca() . "' ,   
            Modelo = '" . $this->getModelo() . "' , 
            DniDuenio = '" . $this->getDniDuenio() . "' 
            WHERE Patente = '" . $this->getPatente() ."' ";
        
        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $res=true;
            }
        }
        return $res;
    }

    public function eliminar(){
        $res=false;
        $base= new BaseDatos();
        $sql= " DELETE FROM auto WHERE Patente = '" . $this->getPatente() . "'";

        if($base->Iniciar()){
            if($base->Ejecutar($sql)){
                $res=true;
            }
        }
        return $res;
    }

    public static function listar($where = ""){
        $arreglo= [];
        $base= new BaseDatos();
        if($base->Iniciar()){
            $sql= "SELECT * FROM auto";
            if($where != ""){
                $sql .= " WHERE ". $where;
            }
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    
                    while ($row = $base->Registro()){
                        $obj= new Auto($row['Patente'],$row['Marca'],$row['Modelo'],['DniDuenio']);
                        array_push($arreglo, $obj);
                    }
                }
            }
        }
        return $arreglo;
    }
}
?>