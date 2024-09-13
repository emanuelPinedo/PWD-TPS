<?php
class ABMPersona
{
  /**
   * Cargar objeto solo con la clave primaria (nroDni)
   * @param array $param
   * @return Persona
   */
  private function cargarObjetoConClave($param)
  {
    $obj = null;

    if (isset($param['NroDni'])) {
      $obj = new Persona();
      $obj->setNroDni($param['NroDni']);
      $obj->cargar();
    }
    return $obj;
  }

  /**
   * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
   * @param array $param
   * @return Persona
   */
  private function cargarObjeto($param)
  {
    $obj = null;
    if (
      array_key_exists('NroDni', $param) && array_key_exists('Apellido', $param) &&
      array_key_exists('Nombre', $param) && array_key_exists('fechaNac', $param) &&
      array_key_exists('Telefono', $param) && array_key_exists('Domicilio', $param)
    ) {
      $obj = new Persona();
      $obj->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['fechaNac'], $param['Telefono'], $param['Domicilio']);
    }
    return $obj;
  }

  /**
   * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
   * @param array $param
   * @return boolean
   */

  private function seteadosCamposClaves($param)
  {
    $resp = false;
    if (isset($param['NroDni']))
      $resp = true;
    return $resp;
  }

  /**
   * 
   * @param array $param
   */
  public function alta($param)
  {
    $resp = false;
    $elObjtTabla = $this->cargarObjeto($param);
    if ($elObjtTabla != null and $elObjtTabla->insertar()) {
      $resp = true;
    }
    return $resp;
  }

  /**
   * Baja de persona
   * @param array $param
   * @return boolean
   */
  public function baja($param)
  {
    $resp = false;
    if ($this->seteadosCamposClaves($param)) {
      $elObjtPersona = $this->cargarObjetoConClave($param);
      if ($elObjtPersona != null && $elObjtPersona->eliminar()) {
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
  public function modificacion($param)
  {
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
   * @return array
   */
  public function buscar($param) {
    $where = " true ";
    if ($param <> NULL) {
        if (isset($param['NroDni']))
            $where .= " AND NroDni = '" . $param['NroDni'] . "'";

        if (isset($param['Apellido']))
            $where .= " AND Apellido = '" . $param['Apellido'] . "'";

        if (isset($param['Nombre']))
            $where .= " AND Nombre = '" . $param['Nombre'] . "'";

        if (isset($param['fechaNac']))
            $where .= " AND fechaNac = '" . $param['fechaNac'] . "'";

        if (isset($param['Telefono']))
            $where .= " AND Telefono = '" . $param['Telefono'] . "'";

        if (isset($param['Domicilio']))
            $where .= " AND Domicilio = '" . $param['Domicilio'] . "'";
    }
    $arreglo = Persona::listar($where);

    $resultado = [];
    foreach ($arreglo as $objPersona) {
        $resultado[] = [
            'NroDni' => $objPersona->getNroDni(),
            'Apellido' => $objPersona->getApellido(),
            'Nombre' => $objPersona->getNombre(),
            'fechaNac' => $objPersona->getFechaNac(),
            'Telefono' => $objPersona->getTelefono(),
            'Domicilio' => $objPersona->getDomicilio()
        ];
    }

    return $resultado; // Retorna el arreglo de personas en lugar de objetos
  }

}
