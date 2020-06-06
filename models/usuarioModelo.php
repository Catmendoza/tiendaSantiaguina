<?php
class usuarioModelo
{
  private $db;
  private $usuario;
  public function __construct()
  { 
    require_once("conectar.php"); 
    $this->db = conectar::conexion(); 
    $this->usuario = array();
  }
  public function get_users()
  {
    $query = $this->db->query("SELECT *FROM usuarios");
    while ($rows = $query->fetch(PDO::FETCH_ASSOC)) {
      $this->usuario[] = $rows;
    }
    return $this->usuario;
  }
}