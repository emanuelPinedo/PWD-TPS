<?php
class ABMAuto{
     /**
     * Cargar objeto solo con la clave primaria (Patente)
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param){
        $obj = null;

        if (isset($param['Patente'])){
            $obj = new Auto();
            $obj->setPatente($param['Patente']);
            $obj->cargar(); // Busca el auto con la patente proporcionada
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param){
        $obj = null;
        
        if (
            array_key_exists('Patente', $param) and array_key_exists('Marca', $param) and array_key_exists('Modelo', $param)
            and array_key_exists('DniDuenio', $param)
        ) {
            $obj = new auto();
            $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $param['DniDuenio']);
        }
        return $obj;
    }

    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param)){
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
     * 
     * @param array $param
     */
    /*public function alta($datos) {
        $resp =false;
        $auto = new Auto();
        $persona = new Persona();
        $persona->setNroDni($datos['DniDuenio']);
        $auto->setear($datos['Patente'], $datos['Marca'], $datos['Modelo'], $persona);
    
        // Intentar insertar el auto
        if ($auto->insertar()) {
            $resp = true;
        } else {
            $auto->getMensajeoperacion();
        }
        return $resp;
    }*/

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
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $elObjtTabla = $this->cargarObjeto($param);
            if ($elObjtTabla != null and $elObjtTabla->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }
    
    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param)
    {
        $where = " true ";
        if ($param <> NULL) {
            if (isset($param['Patente']))
                $where .= " AND Patente = '" . $param['Patente'] . "'";

            if (isset($param['Marca']))
                $where .= " AND Marca = '" . $param['Marca'] . "'";

            if (isset($param['Modelo']))
                $where .= " AND Modelo = '" . $param['Modelo'] . "'";
            
            if (isset($param['DniDuenio']))
                $where .= ' and DniDuenio = '."'" . $param['DniDuenio'] . "'";
           
             
        }
       
        $arreglo = auto::listar($where);
      
        return $arreglo;
    }
}
?>