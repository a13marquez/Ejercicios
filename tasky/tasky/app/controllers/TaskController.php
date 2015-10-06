<?php
  class TaskController extends BaseController{
    public function getLista(){
      $tareas = Task::where('user_id', '=', Auth::id())->orderBy('created_at', 'desc')->get();
      return View::make('lista')->with('tareas', $tareas);
    }

    public function postNueva(){
      $tarea = new Task();
      $tarea->tarea= Input::get('tarea');
      $tarea->user_id = Auth::id();
      $tarea->save();

      return Redirect::to('lista');
    }
  }
 ?>
