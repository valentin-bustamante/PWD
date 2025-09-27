<?php
include_once __DIR__. '/../BaseDatos.php';
class Persona{
    private $nrodni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;

    public function __construct($dni,$ap,$nom,$nac,$tel,$dom){
        $this->nrodni= $dni;
        $this->apellido=$ap;
        $this->nombre= $nom;
        $this->fechaNac= $nac;
        $this->telefono= $tel;
        $this->domicilio= $dom;
    }

    public function getDni(){
        return $this->nrodni;
    }

    public function setDni($nuevo){
        $this->nrodni=$nuevo;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($nuevo){
        $this->apellido=$nuevo;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nuevo){
        $this->nombre=$nuevo;
    }

    public function getFechaNac(){
        return $this->fechaNac;
    }

    public function setFechaNac($nuevo){
        $this->fechaNac=$nuevo;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($nuevo){
        $this->telefono=$nuevo;
    }

    public function getDomicilio(){
        return $this->domicilio;
    }

    public function setDomicilio($nuevo){
        $this->domicilio=$nuevo;
    }

    public function seleccionar(){
        $res= false;
        $base= new BaseDatos();
        $sql= "SELECT * FROM persona WHERE NroDni = '" . $this->getDni() . "';";

        if( $base->Iniciar()){
            $res= $base->Ejecutar($sql);
            if($res>0){
                $row= $base->Registro();
                $res= true;
                $this->setDni($row['NroDni']);
                $this->setApellido($row['Apellido']);
                $this->setNombre($row['Nombre']);
                $this->setTelefono($row['Telefono']);
                $this->setDomicilio($row['Domicilio']);
                $this->setFechaNac($row['fechaNac']);
            }
        }
        return $res;
    }

    public function ingresar(){
        $res= false;
        $base= new BaseDatos();
        $sql= "INSERT INTO persona (NroDni,  Apellido , Nombre , fechaNac , Telefono , Domicilio) 
            VALUES ('" .$this->getDni() . 
            "' , '" . $this->getApellido() . "' , 
            '" . $this->getNombre() . "' , 
            '" . $this->getFechaNac() . "' , 
            '" . $this->getTelefono() . "' , 
            '" . $this->getDomicilio() . "' ) ;";
        
        if( $base->Iniciar()){
            $elid= $base->Ejecutar($sql);
            if( $elid != 0){
                $res=true;
            }
        }
        return $res;
     }

     public function modificar(){
        $res=false;
        $base= new BaseDatos();
        $sql= "UPDATE persona SET 
            Apellido= '" . $this->getApellido() . "' , 
            Nombre= '" . $this->getNombre() . "' , 
            fechaNac= '" . $this->getFechaNac() . "' , 
            Telefono= '" . $this->getTelefono() . "' ,
            Domicilio= '" . $this->getDomicilio() . "' 
            WHERE NroDni= '" . $this->getDni() . "' ;";

        if( $base->Iniciar()){
            if($base->Ejecutar($sql)){
                $res=true;
            }
        }
        return $res;
     }

     public function eliminar(){
        $res=false;
        $base= new BaseDatos();
        $sql= "DELETE FROM persona WHERE NroDni= '" . $this->getDni() . "'";

        if( $base->Iniciar()){
            if($base->Ejecutar($sql)){
                $res=true;
            }
        }
        return $res;
     }
     

     
}
?>