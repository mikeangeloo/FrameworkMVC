<?php

include ROOT."models".DS."tareas.php";
include ROOT."models".DS."categorias.php";
/**
 *
 */
class TareasController  extends AppController{
  public function __construct(){
    parent::__construct();

  }
  public function index()
  {
      $tareas = Tareas::obtenerTodos();

      $this->set("tareas", $tareas);
  }

    public function agregar(){

        if($_POST){

        }else{
            $categorias = Categorias::obtenerTodos();
            $this->set("categorias", $categorias);
        }
    }

    public function editar($id){
        echo "editar".$id;

    }







}


 ?>
