<?php 

require 'config.php';

class BD_PDO
{
	//public $tot_reg;
	//public $ultimo_id;

	public function getConection ()	
	{
		try 
		{
			$conexion = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME.";",DB_USER,DB_PASS);			       	
		}
		catch(PDOException $e)
		{
	        echo "Failed to get DB handle: " . $e->getMessage();
	        exit;    
	    }
	    return $conexion;
	}

	public function Ejecutar_Instruccion($consulta_sql)
	{
		# code...
		$conexion = $this->getConection();
        $rows = array();        
		$query=$conexion->prepare($consulta_sql);
		if(!$query)
		{
         	return "Error al mostrar";
        }
		else
		{			
        	$query->execute();   
           	//$this->tot_reg = $query->rowCount();     	
        	while ($result = $query->fetch())
			{
            	$rows[] = $result;
          	}			
            return $rows;
        }
	}


	public function listados($consulta_primaria,$consulta_foranea)
	{
		$datos = "";
		$datos_primaria = $this->Ejecutar_Instruccion($consulta_primaria);
		if ($consulta_foranea != "") 
		{
			$datos_foranea = $this->Ejecutar_Instruccion($consulta_foranea);
		}
		
		$selected = "";
		foreach ($datos_primaria as $renglon) 
		{
			if (@$datos_foranea[0][0]==$renglon[0]) 
			{
				$selected = "Selected";
			}
			else
			{
				$selected = "";
			}
			$datos=$datos.'<option value="'.$renglon[0].'" '.$selected.'>'.$renglon[1].'</option>';
		}
		return $datos;
	}

}