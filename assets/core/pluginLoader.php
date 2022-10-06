<?php
  /**
   * Plugin Loader
   * 
   * 
   * @author     Alexander Colga <alexander.colga@gmx.de>
   */


namespace PluginLoader;
$x_events = array();
global $x_events;
class plugin {

  function test() {
    return 'Plugin test';
  }
  function initialisieren() {
    //Lädt alle Plugins die mit eine config mit aktiv drin haben.
    $pluginDir = './plugins/';
    if (is_dir($pluginDir))
    {
      $pluginFiles = glob($pluginDir."*/config.ini");
      foreach($pluginFiles as $pluginFile){
          $link = explode('/', $pluginFile);
          $linkConf = $link[0].'/'.$link[1].'/'.$link[2].'/index.php';
          if(file_exists($linkConf)) {
            $inhalt_datei = parse_ini_file($pluginFile);
            if($inhalt_datei['aktiv'] == 1) {
              include $linkConf;
            }
          }
      }
    }
  }

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

  //Adminstration
  /**
   * Listet alle Datein im Pfad auf ohne der . oder.. verzeichnisse
   * @param String $directory pfad zum Ordner
   * @return Array Liefert alle datein als Array zurück
   */
  function getPluginConfig() {
    $pluginDir = './plugins/';
    $pluginFiles = glob($pluginDir."*/config.ini");
    return $pluginFiles;
  }
  function getPlugin($link) {
      $result = explode('/', $link);
      return $result[2];
  }
  function getPluginInfo($plugin,$opt) {
    $pluginDir = './plugins/'.$plugin.'/config.ini';
    $inhalt_datei = parse_ini_file($pluginDir);
    return $inhalt_datei[$opt];
  }
  function changePluginStatus($plugin)
  {
      $pluginFile = './plugins/'.$plugin.'/config.ini';
      $data = parse_ini_file($pluginFile);
      if($data['aktiv'] == 0) {$data['aktiv']= 1;}
      else {$data['aktiv']= 0;}
      $this->update_ini_file($data, $this->getPlugin($pluginFile));
      return $pluginFile." Plugin geändert";
  }

  function update_ini_file($data, $plugin) {
    $filepath = './plugins/'.$plugin.'/config.ini';
    $content = "";

    $parsed_ini = parse_ini_file($filepath, true);
    foreach($data as $section => $values){
      if($section === "submit"){
        continue;
      }
      $content .= $section ."=". $values . "\n";
    }

    if (!$handle = fopen($filepath, 'w')) {
      return false;
    }
    $success = fwrite($handle, $content);
    fclose($handle);
  }

}

?>
