<?php
$x_events = array();
global $x_events;

require("app.class.php");
$app = new app();

//Lädt alle Plugins die mit .activ makiert sind.
$pluginDir = __DIR__.'/plugins/';
$pluginFiles = glob($pluginDir."/*.activ/index.php");
foreach($pluginFiles as $pluginFile){
  require_once $pluginFile;
}

//Adminstration
function getPlugins($directory) {
  $verz_inhalt = scandir($directory, 1);
  foreach($verz_inhalt as $value){
    if($value != "." && $value != ".."){
       $results[] = $value;
    }
  }
  return $results;
}
function renamedatei($old_name){
  if(strpos($old_name, '.activ', 0)) {
      $new_dir_name = str_replace('.activ', '', $old_name);
      rename(__DIR__.'/plugins/'.$old_name, __DIR__.'/plugins/'.$new_dir_name);
  }
  else {
    rename(__DIR__.'/plugins/'.$old_name, __DIR__.'/plugins/'.$old_name.'.activ');
  }
}
if (isset($_POST['callFunc1'])) {
        echo renamedatei($_POST['callFunc1']);
    }

//Zeig alle Plugins an und deren Status
foreach(getPlugins(__DIR__.'/plugins/') as $value) {
  echo '<button type="button" value="'.$value.'" onclick="postdata(\''.$value.'\')">'.$value.'</button><br>';
}
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <?php $app->RunHooks('header_info'); ?>
</head>
<body>
  <?php $app->RunHooks('body_top'); ?>
  <h1>Template</h1>

  <p>This is a blank template for a web page.</p>
  <?php $app->RunHooks('body_bottom'); ?>

  <p id="demo"></p>


</body>
</html>
<script>
function postdata(link) {
    $.ajax({
      url: 'index.php',
      type: 'post',
      data: { "callFunc1": link},
      success: function(response) { console.log("Erfolgreich"); }
    });
  };
</script>
