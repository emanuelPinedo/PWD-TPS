<?php
class AbmAuto{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param){
        $obj = null;

        if( array_key_exists('patente', $param) && array_key_exists('marca', $param) && array_key_exists('modelo', $param) && array_key_exists('dniDuenio', $param)){
            $obj = new Auto();
            $duenio = new Persona();
            $duenio->setNroDni($param['dniDuenio']);
            $duenio->buscar(); // Carga los datos del dueño
            $obj->setear($param['patente'], $param['marca'], $param['modelo'], $duenio);
        }
        return $obj;
    }
    
    /**
     * Cargar objeto solo con la clave primaria (Patente)
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param){
        $obj = null;

        if (isset($param['patente'])){
            $obj = new Auto();
            $obj->setPatente($param['patente']);
            $obj->buscar(); // Busca el auto con la patente proporcionada
        }
        return $obj;
    }
    
    /**
     * Verifica que las claves primarias estén seteadas
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['patente'])){
            $resp = true;
        }
        return $resp;
    }

    /**
     * Alta de auto
     * @param array $param
     * @return boolean
     */
    public function alta($param){
        $resp = false;
        $elObjtAuto = $this->cargarObjeto($param);
        if ($elObjtAuto != null && $elObjtAuto->insertar()){
            $resp = true;
        }
        return $resp;
    }

    /**
     * Baja de auto
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtAuto = $this->cargarObjetoConClave($param);
            if ($elObjtAuto != null && $elObjtAuto->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Modificación de auto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtAuto = $this->cargarObjeto($param);
            if($elObjtAuto != null && $elObjtAuto->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Búsqueda de autos
     * @param array $param
     * @return array
     */
    public function buscar($param){
        $where = " true "; // condición por defecto
        if ($param != null){
            if (isset($param['patente']))
                $where .= " and patente = '".$param['patente']."'";
            if (isset($param['marca']))
                $where .= " and marca = '".$param['marca']."'";
            if (isset($param['modelo']))
                $where .= " and modelo = ".$param['modelo'];
            if (isset($param['dniDuenio']))
                $where .= " and dniduenio = '".$param['dniDuenio']."'";
        }

        $auto = new Auto();
        $arreglo = $auto->listar($where);  
        return $arreglo;
    }
}
?>