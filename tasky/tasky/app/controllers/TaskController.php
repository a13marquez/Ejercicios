<?php
  class TaskController extends BaseController{
    public function getLista(){
      $tareas = Task::where('user_id', '=', Auth::id())->get();
      return View::make('lista')->with('tareas', $tareas);
    }
  }
 ?>
