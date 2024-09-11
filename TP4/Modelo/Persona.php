<?php
class Persona{
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;
    private $msjOperacion;

    public function __construct()
    {
        $this->nroDni = '';
        $this->apellido = '';
        $this->nombre = '';
        $this->fechaNac = '';
        $this->telefono = '';
        $this->domicilio = '';
        $this->msjOperacion = '';
    }

	public function getNroDni(){
        return $this->nroDni;
    }

    public function setNroDni($newNroDni){
        $this->nroDni = $newNroDni;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setApellido($newApellido){
        $this->apellido = $newApellido;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($newNombre){
        $this->nombre = $newNombre;
    }

    public function getFechaNac(){
        return $this->fechaNac;
    }

    public function setFechaNac($newFechaNac){
        $this->fechaNac = $newFechaNac;
    }

    public function getTelefono(){
        return $this->telefono;
    }

    public function setTelefono($newTelefono){
        $this->telefono = $newTelefono;
    }

    public function getDomicilio(){
        return $this->domicilio;
    }

    public function setDomicilio($newDomicilio){
        $this->domicilio = $newDomicilio;
    }

	public function getMsjOperacion() {
		return $this->msjOperacion;
	}

	public function setMsjOperacion($newMsjOperacion) {
		$this->msjOperacion = $newMsjOperacion;
	}

    public function setear($dni, $apellido, $nombre, $fechaNac, $telefono, $domicilio){
        $this->setNroDni($dni);
        $this->setApellido($apellido);
        $this->setNombre($nombre);
        $this->setFechaNac($fechaNac);
        $this->setTelefono($telefono);
        $this->setDomicilio($domicilio);
    }

    //Funcion para realizar Consultas
	public function buscar(){
        $resp = false;
        $base = new BaseDatos();
        $consulta = "SELECT * FROM persona WHERE nrodni = ".$this->getNroDni();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($consulta);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio'], '');
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
        $consultaAuto = "SELECT * FROM persona ";
        if ($condicion != "") {
            $consultaAuto .= 'WHERE ' . $condicion;
        }
        $res = $base->Ejecutar($consultaAuto);
        if($res>-1){
            if($res>0){
                while ($row2 = $base->Registro()){
                    $perso = new Persona();
                    $perso->setear($row2['NroDni'], $row2['Apellido'], $row2['Nombre'], $row2['fechaNac'], $row2['Telefono'], $row2['Domicilio']);     
                    array_push($array, $perso);
                }
               
            }
            
        } else {
            $this->setMsjOperacion($base->getError());
        }
 
        return $array;
    }

	//Funcion para añadir datos
    public function insertar(){
        $resp = false;
        $base = new BaseDatos();
        $consulta = "INSERT INTO persona(nrodni, apellido, nombre, fechanac, telefono, domicilio)  
        VALUES('".$this->getNroDni()."', '".$this->getApellido()."', '".$this->getNombre()."', '".$this->getFechaNac()."', '".$this->getTelefono()."', '".$this->getDomicilio()."');";
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

	//Funcion para modificar la BD según el documento de la persona
    public function modificar(){
        $resp = false;
        $base = new BaseDatos();
        $consulta = "UPDATE persona SET apellido='".$this->getApellido()."', nombre = '".$this->getNombre().
        "', fechaNac = '".$this->getFechaNac()."', telefono = '". $this->getTelefono()."', domicilio = '". $this->getDomicilio().
        "' WHERE nroDni= '".$this->getNroDni()."'";
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

	//Funcion para eliminar
    public function eliminar(){
        $resp = false;
        $base = new BaseDatos();
        $consulta = "DELETE FROM persona WHERE nrodni = ".$this->getNroDni();
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
        return "\Nro Dni: " . $this->getNroDni().
        "\Apellido: " . $this->getApellido().
        "\Nombre: " . $this->getNombre().
        "\nFecha de Nacimeinto: " . $this->getFechaNac().
        "\nTelefono: " . $this->getTelefono().
        "\nDomicilio: " . $this->getDomicilio();
    }

}