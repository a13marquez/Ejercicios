<?php
/**
 *
 */
class TaskController extends AnotherClass
{
  public function getLista(=)
  {
    $tareas = Task::where('user_id', '=', Auth::user()->id);
    return View::make('lista')->with('tareas', $tareas);
  }
}

 ?>
