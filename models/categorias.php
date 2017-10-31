<?php
/**
 * Created by:
 * @User: Miguel Ángel Ramírez López
 * @Email: mikeangeloo87@outlook.com
 * Date: 31/10/2017
 * Time: 03:32 PM
 */

class Categorias
{
    private static $nombre = "categorias";

    public static function obtenerTodos(){
        $categorias = Database::obtenerInstancia();


        $slq = "SELECT id, nombre FROM ".self::$nombre;



        $resultado = $categorias->query($slq);

        $resultados = $resultado->fetchAll();


        return $resultados;
    }
}