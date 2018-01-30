<?php
class Controller extends Db{
  public static function CreateView($view_name){
    if (file_exists("./View/$view_name.php")) {
      require_once("./View/$view_name.php");
      static::doSomething();
    }
  }
}
?>
