<?php
    include_once __DIR__. '/../Modelo/auto.php';

    class ControlAuto{
        /**
         * Para crear un objeto completo con todos los datos
         * @param array $param
         * @return Auto|null
         */
        public function cargarObj($param){
            $obj= null;

            if(array_key_exists('Patente', $param) and array_key_exists('Marca', $param) and array_key_exists('Modelo',$param) and array_key_exists('DniDuenio',$param)){
                $obj= new Auto( $param['Patente'] , $param['Marca'] , $param['Modelo'] , $param['DniDuenio']);
            }
            return $obj;
        }

        /**
         * Para crear un objeto solo con la clave
         * @param array
         * @return object | null
         */
        public function cargarObjConClave($param){
            $obj=null;
            if(isset($param['Patente'])){
                $obj= new Auto($param['Patente'],'','','');
            }
            return $obj;
        }
        /**
         * Para comprobar que exista el campo clave
         * @param array $param
         * @return bool
         */
        public function seteadosCamposClaves($param){
            return isset($param['Patente']);
        }

        /**
         * busca segun la patente
         * @param array $param 
         * @return object|null
         */
        public function buscarXpatente($param){
            $res= null;
            if($this->seteadosCamposClaves($param)){
                $obj= $this->cargarObjConClave($param);
                if( $obj && $obj->seleccionar()){
                    $res= $obj;
                }
            }
            return $res;
        }

        /**
         * Ingresa un auto
         * @param array $param
         * @return bool
         */
        public function alta($param){
            $obj= $this->cargarObj($param);
            $res=false;
            if($obj && $obj->ingresar()){
                $res=true;
            }
            return $res;
        }

        /**
         * Elimina un auto
         * @param array $param
         * @return bool
         */
        public function baja($param){
            $obj= $this->cargarObj($param);
            $res=false;
            if($obj && $obj->eliminar()){
                $res=true;
            }
            return $res;
        }

        /**
         * Cambia los datos segun la patente
         * @param array $param
         * @return bool
         */
        public function modificacion($param){
            $obj= $this->cargarObj($param);
            $res=false;
            if($obj && $obj->modificar()){
                $res=true;
            }
            return $res;
        }

        public static function listar($where=""){
            $arreglo=[];
            $base= new BaseDatos();
            if($base->Iniciar()){
                $sql= "SELECT * FROM auto";
                if($where != ""){
                    $sql .= " WHERE " . $where;
                }
                $res = $base->Ejecutar($sql);
                if($res>-1){
                    if($res>0){
                        while ($row = $base->Registro()){
                            $obj= new Auto($row['Patente'] , $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                            array_push($arreglo, $obj);
                        }
                    
                    }
                    
                }
            }
            return $arreglo;
        }
    }

?>