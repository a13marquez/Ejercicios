<?php

  class Task extends Eloquent{
    protected $table = 'tasks';
    /*
      Si un usuario solo pudiese crear una tarea
      public function user(){
        return $this->belongsTo('User');
      }
      */
      //Relacion many to one
      public function user(){
        return $this->belongsTo('User');
      }
  }

 ?>
