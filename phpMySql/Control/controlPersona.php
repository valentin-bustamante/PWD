<?php
    include_once __DIR__. '/../Modelo/persona.php';
    class ControlPersona{
        public function cargarObj($param){
            $obj=null;

            if(array_key_exists('NroDni',$param) and array_key_exists('Apellido',$param) and array_key_exists('Nombre',$param) and array_key_exists('fechaNac',$param) and array_key_exists('Telefono',$param) and array_key_exists('Domicilio',$param)){
                $obj= new Persona($param['NroDni'],$param['Apellido'],$param['Nombre'],$param['fechaNac'],$param['Telefono'],$param['Domicilio']);
            }
            return $obj;
        }

        public function cargarObjConClave($param){
            $obj=null;
            if(isset($param['NroDni'])){
                $obj= new Persona($param['NroDni'],'','','','','');
            }
            return $obj;
        }

        public function seteadosCampoClave($param){
            return isset($param['NroDni']);
        }

        public function buscarXdni($param){
            $res=null;
            if($this->seteadosCampoClave($param)){
                $obj=$this->cargarObjConClave($param);
                if($obj && $obj->seleccionar()){
                    $res= $obj;
                }
            }
            return $res;
        }

        public function alta($param){
            $obj=$this->cargarObj($param);
            $res=false;
            if($obj && $obj->ingresar()){
                $res=true;
            }
            return $res;
        }

        public function baja($param){
            $obj=$this->cargarObj($param);
            $res=false;
            if($obj && $obj->eliminar()){
                $res= true;
            }
            return $res;
        }

        public function modificacion($param){
            $obj=$this->cargarObj($param);
            $res=false;
            if($obj && $obj->modificar()){
                $res=true;
            }
            return $res;
        }

        public static function listar($where= ''){
            $arreglo=[];
            $base= new BaseDatos();
            if($base->Iniciar()){
                $sql= "SELECT * FROM persona";
                if($where != ""){
                    $sql .= " WHERE ". $where;
                }
                $res= $base->Ejecutar($sql);
                if($res>-1){
                    if($res>0){
                        while ($row = $base->Registro()){
                            $obj= new Persona( $row['NroDni'],$row['Apellido'],$row['Nombre'],$row['fechaNac'],$row['Telefono'],$row['Domicilio']);
                            array_push($arreglo, $obj);
                        }
                    
                    }
                    
                }
            }
            return $arreglo;
        }
    }
?>