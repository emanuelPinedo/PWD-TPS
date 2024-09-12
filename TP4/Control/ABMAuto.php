<?php
class ABMAuto{

    
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto

    
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
     * 
     * @param array $param
     */
    public function alta($datos) {
        $resp =false;
        $auto = new Auto();
        $persona = new Persona();
        $persona->setNroDni($datos['DniDuenio']);
        $auto->setear($datos['Patente'], $datos['Marca'], $datos['Modelo'], $persona);
    
        // Intentar insertar el auto
        if ($auto->insertar()) {
            $resp = true;
        } else {
            echo "Error al insertar el auto: " . $auto->getMensajeoperacion();
        }
        return $resp;
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $elObjtTabla = $this->cargarObjeto($param);
            if ($elObjtTabla != null and $elObjtTabla->eliminar()) {
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
        // echo 'estoy buscando'; 
        $where = " true ";
        if ($param <> NULL) {
            if (isset($param['Patente']))
                $where .= ' and Patente = ' ."'". $param['Patente']."'";

            if (isset($param['Marca']))
                $where .= ' and Marca =' . $param['Marca'] . "'";

            if (isset($param['Modelo']))
                $where .= ' and Modelo = ' . $param['Modelo'] . "'";
            
            if (isset($param['DniDuenio']))
                $where .= ' and DniDuenio = '."'" . $param['DniDuenio'] . "'";
            //preguntar sobre el dniDuenio....
           
             
        }
       
        $arreglo = auto::listar($where);
      
        return $arreglo;
    }
}
?>