<?php
class AbmTabla{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param){
        $obj = null;

        if( array_key_exists('nroDni', $param) && array_key_exists('apellido', $param) && array_key_exists('nombre', $param) 
            && array_key_exists('fechaNac', $param) && array_key_exists('telefono', $param) && array_key_exists('domicilio', $param)){
            $obj = new Persona();
            $obj->setear($param['nroDni'], $param['apellido'], $param['nombre'], $param['fechaNac'], $param['telefono'], $param['domicilio']);
        }
        return $obj;
    }

    /**
     * Cargar objeto solo con la clave primaria (nroDni)
     * @param array $param
     * @return Persona
     */
    private function cargarObjetoConClave($param){
        $obj = null;

        if (isset($param['nroDni'])){
            $obj = new Persona();
            $obj->setNroDni($param['nroDni']);
            $obj->buscar(); // Busca la persona con el dni proporcionado
        }
        return $obj;
    }

    /**
     * Verifica que las claves primarias estén seteadas
     * @param array $param
     * @return boolean
     */
    private function seteadosCamposClaves($param){
        return isset($param['nroDni']);
    }

    /**
     * Alta de persona
     * @param array $param
     * @return boolean
     */
    public function alta($param){
        $resp = false;
        $elObjtPersona = $this->cargarObjeto($param);
        if ($elObjtPersona != null && $elObjtPersona->insertar()){
            $resp = true;
        }
        return $resp;
    }

    /**
     * Baja de persona
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtPersona = $this->cargarObjetoConClave($param);
            if ($elObjtPersona != null && $elObjtPersona->eliminar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Modificación de persona
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtPersona = $this->cargarObjeto($param);
            if($elObjtPersona != null && $elObjtPersona->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Búsqueda de personas
     * @param array $param
     * @return array
     */
    public function buscar($param){
        $where = " true "; // Condición por defecto
        if ($param != null){
            if (isset($param['nroDni']))
                $where .= " and nrodni = '".$param['nroDni']."'";
            if (isset($param['apellido']))
                $where .= " and apellido = '".$param['apellido']."'";
            if (isset($param['nombre']))
                $where .= " and nombre = '".$param['nombre']."'";
            if (isset($param['fechaNac']))
                $where .= " and fechanac = '".$param['fechaNac']."'";
            if (isset($param['telefono']))
                $where .= " and telefono = '".$param['telefono']."'";
            if (isset($param['domicilio']))
                $where .= " and domicilio = '".$param['domicilio']."'";
        }

        $persona = new Persona();
        $arreglo = $persona->listar($where);  
        return $arreglo;
    }
}
?>