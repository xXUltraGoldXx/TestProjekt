<?php
  /**
   * Plugin Loader
   * 
   * 
   * @author     Alexander Colga <alexander.colga@gmx.de>
   */
class plugin {
    /**
     * Fügt einen Hook dazu
     * @param String $hook Name des Hooks.
     * @param String $value Optional Ruft es einen Function auf
     */
  public function RunHooks($hook, $value = NULL) {
      global $x_events;
      if (isset($x_events[$hook])) {
          foreach($x_events[$hook] as $function) {
              if (function_exists($function)) { call_user_func($function, $value); }
          }
      }
  }
    /**
     * Implementiert Datein am bestimmten Ort
     * @param String $hook Name des Hooks. Wo es implementiert werden soll.
     * @param String $func Name der Funktion/Was soll include werden.
     * @param String $val Optional
     */
  public function AddHook($hook, $func, $val = NULL) {
      global $x_events;
      $x_events[$hook][] = $func;
  }
}
?>
