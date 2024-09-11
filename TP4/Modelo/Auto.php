<?php
class Auto{
    private $patente;
    private $marca;
    private $modelo;
    private $objDuenio;
    private $msjOperacion;

    public function __construct()
    {
        $this->patente = '';
        $this->marca = '';
        $this->modelo = '';
        $this->objDuenio = new Persona();
        $this->msjOperacion = '';
    }

	public function getPatente() {
		return $this->patente;
	}

	public function setPatente($newPatente) {
		$this->patente = $newPatente;
	}

	public function getMarca() {
		return $this->marca;
	}

	public function setMarca($newMarca) {
		$this->marca = $newMarca;
	}

	public function getModelo() {
		return $this->modelo;
	}

	public function setModelo($newModelo) {
		$this->modelo = $newModelo;
	}

	public function getObjDuenio() {
		return $this->objDuenio;
	}

	public function setObjDuenio($newObjDuenio) {
		$this->objDuenio = $newObjDuenio;
	}

	public function getMsjOperacion() {
		return $this->msjOperacion;
	}

	public function setMsjOperacion($newMsjOperacion) {
		$this->msjOperacion = $newMsjOperacion;
	}

    public function setear($patente, $marca, $modelo, $objDuenio){
        $this->setPatente($patente);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setObjDuenio($objDuenio);
    }

    //Funcion para realizar Consultas
	public function buscar(){
        $resp = false;
        $base = new BaseDatos();
        $consulta = "SELECT * FROM auto WHERE patente = ".$this->getPatente();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($consulta);
            if($res>-1){
                if($res>0){
                    $row2 = $base->Registro();
                    $objDuenio = new Persona();
                    $objDuenio->setNroDni($row2['DniDuenio']);
                    $objDuenio->buscar();
                    $this->setear($row2['Patente'], $row2['Marca'], $row2['Modelo'], $objDuenio->getNroDni());
                    
                }
            }
        } else {
            $this->setMsjOperacion($base->getError());
        }
        return $resp;
     
    }

    public function listar($condicion = ""){
        $array = array();
        $base = new BaseDatos();
        $consultaAuto = "SELECT * FROM auto ";
        if ($condicion != "") {
            $consultaAuto .= 'WHERE ' . $condicion;
        }
        $res = $base->Ejecutar($consultaAuto);
        if($res>-1){
            if($res>0){
                while ($row2 = $base->Registro()){
                    $auto= new Auto();
                    $objDuenio = new Persona();
                    $objDuenio->setNroDni($row2['DniDuenio']);
                    $objDuenio->buscar();
                    $auto->setear($row2['Patente'], $row2['Marca'], $row2['Modelo'], $objDuenio);      
                    array_push($arreglo, $auto);
                }
               
            }
            
        } else {
            $this->setMsjOperacion($base->getError());
        }
 
        return $array;
    }

	//Funcion para añadir datos
    public function insertar(){
        $base = new BaseDatos();
        $resp = false;
        $consultaInsert = "INSERT INTO auto(patente,marca, modelo, dniduenio) VALUES 
		('".$this->getPatente()."','".$this->getMarca()."','".$this->getModelo()."','".$this->getObjDuenio()->getNroDni()."')";
        
        if($base->Iniciar()){
            if($base->Ejecutar($consultaInsert)){
                $resp = true;
            } else {
                $this->setMsjOperacion($base->getError());
            }
        } else {
            $this->setMsjOperacion($base->getError());
        }
        return $resp;
    }

	//Funcion para modificar la BD según el documento de la persona
    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $consultaUpdate = "UPDATE auto SET marca ='".$this->getMarca()."', modelo= '".$this->getModelo()."', dniduenio = '".$this->getObjDuenio()->getNroDni()."' 
        WHERE patente= '".$this->getPatente()."'";
        
        if($base->Iniciar()){
            if($base->Ejecutar($consultaUpdate)){
                $resp = true;
            } else {
                $this->setMsjOperacion($base->getError());
            }
        } else {
            $this->setMsjOperacion($base->getError());
        }
        return $resp;
    }

	//Funcion para eliminar
    public function eliminar(){
        $resp = false;
        $base =new BaseDatos();
        $consulta = "DELETE FROM auto WHERE patente=".$this->getPatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($consulta)) {
                $resp = true;
            } else {
                $this->setMsjOperacion($base->getError());
            }
        } else {
            $this->setMsjOperacion($base->getError());
        }
        return $resp;
    }

    public function leerArray($array){
        $msj = "";
        foreach ($array as $elemento){
            $msj .= $elemento."\n";
        }
        return $msj;
    }

    public function __toString()
    {
        return "\nPatente: " . $this->getPatente().
        "\nMarca: " . $this->getMarca().
        "\nModelo: " . $this->getModelo().
        "\nDni Dueño: " . $this->getObjDuenio()->getNroDni();
    }

}