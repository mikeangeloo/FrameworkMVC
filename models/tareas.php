<?php
/**
 *
 */
class tareas{
  private static $nombre = "tareas";

  public static function obtenerTodos(){

    $tareas = Database::obtenerInstancia();

//    $sql = "SELECT * FROM ".self::$nombre."
//    INNER JOIN categorias
//    ON tareas.categoria_id = categorias.id";

    $sql = "SELECT * FROM ".self::$nombre."
    INNER JOIN categorias
    ON tareas.categoria_id = categorias.id";

    $resultado = $tareas->query($sql);



    foreach (range(0, $resultado->columnCount()-1) as $column_index) {
      $meta[] = $resultado->getColumnMeta($column_index);

    }

    $resultados = $resultado->fetchAll(PDO::FETCH_NUM);

    for ($i=0; $i < count($resultados); $i++) {
      $j=0;
      foreach($meta as $value) {
        $rows[$i][$value["table"]][$value["name"]] = $resultados[$i][$j];
        $j++;
      }
    }

//    print_r($rows);
//
//    exit;
    return $rows;
  }
 }

 ?>
