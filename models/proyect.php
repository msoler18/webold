<?php



	Class ProyectModel extends Db {



		protected static $table_name = 'proyecto';


		public static  function linies($tipo, $city)
		{


			$query = 'SELECT l.* FROM linea as l LEFT JOIN '.static::$table_name.' as p ON l.id=p.id_linea WHERE p.ciudad='.$city.' AND p.id_tipo='.$tipo.' AND p.estado!="realizado"  AND p.publicado="1" GROUP BY  l.nombre_linea';

			// echo $query;

			$result = static::__query($query);

			return $result;
		}

		public static function our_proyects()
		{
          
			$query = 'SELECT t.*, p.ciudad FROM '.static::$table_name.' as p LEFT JOIN tipo as t ON t.id=p.id_tipo Where p.publicado="1" and p.estado="nuevo" GROUP BY p.ciudad';

			 //echo $query;

			$result = static::__query($query);

			return $result;

		}


		public static function proyects_type($type, $city)
		{

			$query = 'SELECT p.id, p.slug, p.nombre_proyecto, p.logo, p.teaser, p.estado, l.nombre_linea as linea_nombre, l.logo as linea_logo, l.linea_desc as linea_desc  FROM '.static::$table_name.' as p LEFT JOIN linea as l  ON l.id=p.id_linea  

			WHERE p.id_tipo = '.$type.' AND p.ciudad = '.$city.' AND  p.publicado="1" ORDER BY l.id';

			$result = static::__query($query);

			return $result;

		}

		public static function proyects_line($line, $city)
		{

			$query = 'SELECT p.id, p.slug, p.nombre_proyecto, p.logo, p.teaser, l.nombre_linea as linea_nombre, l.logo as linea_logo, l.linea_desc as linea_desc  FROM '.static::$table_name.' as p LEFT JOIN linea as l  ON l.id=p.id_linea  

			WHERE l.slug = "'.$line.'" AND p.ciudad = '.$city.' AND p.publicado="1" ORDER BY l.id, p.order_';

			//echo $query;

			$result = static::__query($query);

			return $result;

		}

		public static function all_active()
		{

			$query = 'SELECT * FROM '.static::$table_name.' WHERE estado = "nuevo" and publicado="1" ORDER BY order_ ';

			$result = static::__query($query);

			return $result;

		}


		public static function proyects_off()
		{

			$query = 'SELECT * FROM '.static::$table_name.' WHERE estado = "realizado" ';

			$result = static::__query($query);

			return $result;

		}


		public static function all_proyects()
		{  

			$query  = 'SELECT a.*, b.id as tipo_i, b.nombre_tipo as nombre_tipo, b.logo as tipo_logo, c.id as linea_i, c.nombre_linea as nombre_linea, c.logo as linea_logo ';
			$query .= 'FROM '.static::$table_name.' as a INNER JOIN tipo as b ON b.id=a.id_tipo ';
			$query .= 'INNER JOIN linea as c ON c.id=a.id_linea';
			$query .= ' ORDER BY order_';
			$result = static::__query($query);

			return $result;	

		}	

		

	}

?>