<?php
class Conexion  // se declara una clase para hacer la conexion con la base de datos
{
	var $con;
	function Conexion()
	{
		// se definen los datos del servidor de base de datos 
		$conection['server']="localhost";  //host
		$conection['user']="alumno";         //  usuario
		$conection['pass']="alumnodaw";             //password
		$conection['base']="neuro";           //base de datos
		
		// crea la conexion pasandole el servidor , usuario y clave
		$conect= mysql_connect($conection['server'],$conection['user'],$conection['pass']);

		if ($conect) // si la conexion fue exitosa , selecciona la base
		{
			mysql_select_db($conection['base']);			
			$this->con=$conect;
		}
	}
	function getConexion() // devuelve la conexion
	{
		return $this->con;
	}
	function Close()  // cierra la conexion
	{
		mysql_close($this->con);
	}	

}
class sQuery   // se declara una clase para poder ejecutar las consultas, esta clase llama a la clase anterior
{

	var $coneccion;
	var $consulta;
	var $resultados;
	function sQuery()  // constructor, solo crea una conexion usando la clase "Conexion"
	{
		$this->coneccion= new Conexion();
	}
	function executeQuery($cons)  // metodo que ejecuta una consulta y la guarda en el atributo $pconsulta
	{
		$this->consulta= mysql_query($cons,$this->coneccion->getConexion());
		return $this->consulta;
	}	
	function getResults()   // retorna la consulta en forma de result.
	{return $this->consulta;}
	
	function Close()		// cierra la conexion
	{$this->coneccion->Close();}	
	
	function Clean() // libera la consulta
	{mysql_free_result($this->consulta);}
	


    function fetchAll()
    {
        $rows=array();
		if ($this->consulta)
		{
			while($row=  mysql_fetch_array($this->consulta))
			{
				$rows[]=$row;
			}
		}
        return $rows;
    }
}




class Usuario
{
	var $nombre;     //se declaran los atributos de la clase, que son los atributos del usuario
	var $apellido;
	Var $id;


	function Usuario($id) 
	{
	
			$obj_cliente=new sQuery();
			$result=$obj_cliente->executeQuery("select * from usuarios where id = '$id'"); // ejecuta la consulta para traer al usuario
			$row=mysql_fetch_array($result);
			$this->id=$row['id'];
			$this->nombre=$row['Nombre'];
			$this->apellido=$row['Apellidos'];
	}
		
		// metodos que devuelven valores
	function getID()
	 { return $this->id;}
	function getNombre()
	 { return $this->nombre;}
	function getApellido()
	 { return $this->apellido;}
	 
		// metodos que setean los valores
	function setID($val)
	 {  $this->id=$val;}
	function setNombre($val)
	 { $this->nombre=$val;}
	function setApellido($val)
	 {  $this->apellido=$val;}


    function save()
    {

        $this->insertUsuario();
    }

	private function insertUsuario()	// inserta el Usuario cargado en los atributos
	{
			$obj_cliente=new sQuery();
			$query="insert into usuarios( id, Nombre, Apellidos) values ('$this->id','$this->nombre', '$this->apellido')";
		
			$obj_cliente->executeQuery($query); // ejecuta la consulta para insertar al usuario 
			header("location:Ej2.html"); 
	
	}	

	
}
function cleanString($string)
{
    $string=trim($string);
    $string=mysql_escape_string($string);
	$string=htmlspecialchars($string);
	
    return $string;
}
