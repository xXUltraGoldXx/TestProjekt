<?php $plugin = new PluginLoader\plugin(); ?>
<div class="accordion" id="accPlugins">
<?php foreach($plugin->getPluginConfig() as $pluginFile) { ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="<?= $plugin->getPlugin($pluginFile).'heading' ?>">
      <button class="acc-btn accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $plugin->getPlugin($pluginFile) ?>" aria-expanded="false" aria-controls="<?= $plugin->getPlugin($pluginFile) ?>">
        <span class="title">
            <h4 style="color:black;"><?= $plugin->getPluginInfo($plugin->getPlugin($pluginFile), 'name') ?></h4>
        </span>
        <span class="status">
        <?php $status = $plugin->getPluginInfo($plugin->getPlugin($pluginFile), 'aktiv'); 
        if($status == 1) { echo '<h4 style="color:green;">Aktiv</h4>';} 
        else { echo '<h4 style="color:red;">Deaktiviert</h4>';}
        ?>
        </span>
      </button>
    </h2>
    <div id="<?= $plugin->getPlugin($pluginFile) ?>" class="accordion-collapse collapse" aria-labelledby="<?= $plugin->getPlugin($pluginFile).'heading' ?>" data-bs-parent="#accPlugins">
      <div class="accordion-body">
        <form method="post">
            <input type="hidden" name="pluginName" value="<?= $plugin->getPlugin($pluginFile) ?>" />
            Plugin: <input type="submit" name="button1" value="<?php 
            if($plugin->getPluginInfo($plugin->getPlugin($pluginFile), 'aktiv') == 1) {echo 'Deaktivieren';} else {echo 'Aktivieren';}
            
            ?>"/>Achtung: Seite wird neugeladen!
        </form>
        <p>Version: <?= $plugin->getPluginInfo($plugin->getPlugin($pluginFile), 'version') ?></br>
        Author: <?= $plugin->getPluginInfo($plugin->getPlugin($pluginFile), 'author') ?></br>
        Beschreibung: <?= $plugin->getPluginInfo($plugin->getPlugin($pluginFile), 'description') ?></p>
        
      </div>
    </div>
  </div>
<?php } 
if(isset($_POST['pluginName'])) {
    $plugin->changePluginStatus($_POST['pluginName']);
    echo("<meta http-equiv='refresh' content='0'>");
}
?>
</div>
