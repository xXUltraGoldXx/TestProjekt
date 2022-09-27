<?php
class app {
  public function RunHooks($hook, $value = NULL) {
      global $x_events;
      if (isset($x_events[$hook])) {
          foreach($x_events[$hook] as $function) {
              if (function_exists($function)) { call_user_func($function, $value); }
          }
      }
  }
  public function AddHook($hook, $func, $val = NULL) {
      global $x_events;
      $x_events[$hook][] = $func;
  }
}
?>
