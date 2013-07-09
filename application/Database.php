<?php  

class DB
{
	protected $_conexion;
	protected $_tabla;

	public function __construct(){
		$this->_conexion = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	}
	public function close(){
		$this->_conexion->close();
	}
	public function conectar(){
		$this->_conexion = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	}
	public function setTable($tabla){
		$this->_tabla = $tabla;
	}
	public function create_table($tabla,$fields){
		$this->_conexion->query("CREATE TABLE IF NOT EXISTS $tabla($fields)");
	}
	public function all(){
		$statement = $this->_conexion->query("SELECT * FROM $this->_tabla ");
		return $statement->fetch_all(MYSQLI_ASSOC);
	}
	public function insert($datos){
		$fields = implode(',', array_keys($datos));
		$values = "'".implode("','", $datos)."'";
		$this->_conexion->query("INSERT INTO $this->_tabla ($fields) VALUES($values)");
		return $this->_conexion->affected_rows;
	}
}

?>