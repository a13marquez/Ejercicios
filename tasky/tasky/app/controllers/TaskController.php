<?php
  class TaskController extends BaseController{
    public function getLista(){
      $items = Input::get('items');
      if(!isset($items)){
          $items = 10;
        }
      #$tareas = Task::where('user_id', '=', Auth::id())->orderBy('created_at', 'desc')->paginate($items);
      $tareas = User::find(Auth::id())->tasks()->orderBy('created_at', 'desc')->paginate($items);
      $tasks = User::find(Auth::id())->tasks();
      return View::make('lista')->with('tareas', $tareas)->with('items', $items)->with('tasks', $tasks);
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

    public function getApi($appid = null, $id = null){
      if(!isset($id)){
          $id = Auth::id();
      }
      if(!isset($appid)){
        $usuario = User::find(Auth::id());
        $appid = $usuario->appid;
      }
      if(isset($appid)){
        $usuario = User::where('appid', '=', $appid)->count();
        if($usuario == 1){
          $tasks = Task::where('user_id', '=', $id)->get();
          if (Input::has('callback')) {
            return Response::json($tasks)->setCallback(Input::get('callback'));
          }else{
            return Response::json($tasks)
          }
        }else{
          return 'APPID no válido';
        }
      }else{
        return 'No se puede realizar la consulta sin un APPID';
      }
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
