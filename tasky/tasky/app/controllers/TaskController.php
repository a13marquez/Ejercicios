<?php
  class TaskController extends BaseController{
    public function getLista(){
      $tareas = Task::where('user_id', '=', Auth::id())->orderBy('created_at', 'desc')->paginate(5);
      return View::make('lista')->with('tareas', $tareas);
    }
    public function getIniciar($id = null){
      if(isset($id)){
        $tarea = Task::find($id);
        $tarea->estado = 'En proceso';
        $tarea->save();
      }
        return Redirect::to('lista');
    }
    public function getCompletar($id = null){
      if(isset($id)){
        $tarea = Task::find($id);
        $tarea->estado = 'Completada';
        $tarea->save();
      }
        return Redirect::to('lista');
    }
    public function getEliminar($id = null){
      if(isset($id)){
        $tarea = Task::find($id);
        $tarea->delete();
      }
        return Redirect::to('lista');
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
