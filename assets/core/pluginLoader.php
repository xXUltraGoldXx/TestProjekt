<?php
  /**
   * Plugin Loader
   * 
   * 
   * @author     Alexander Colga <alexander.colga@gmx.de>
   */

$x_events = array();
global $x_events;

require("pluginLoader/plugin.class.php");
$plugin = new plugin();

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
    update_ini_file($data, getPlugin($pluginFile));
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
?>
