<div class="accordion" id="accPlugins">
<?php foreach(getPluginConfig() as $pluginFile) { ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="<?= getPlugin($pluginFile).'heading' ?>">
      <button class="acc-btn accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= getPlugin($pluginFile) ?>" aria-expanded="false" aria-controls="<?= getPlugin($pluginFile) ?>">
        <span class="title">
            <h4 style="color:black;"><?= getPluginInfo(getPlugin($pluginFile), 'name') ?></h4>
        </span>
        <span class="status">
        <?php $status = getPluginInfo(getPlugin($pluginFile), 'aktiv'); 
        if($status == 1) { echo '<h4 style="color:green;">Aktiv</h4>';} 
        else { echo '<h4 style="color:red;">Deaktiviert</h4>';}
        ?>
        </span>
      </button>
    </h2>
    <div id="<?= getPlugin($pluginFile) ?>" class="accordion-collapse collapse" aria-labelledby="<?= getPlugin($pluginFile).'heading' ?>" data-bs-parent="#accPlugins">
      <div class="accordion-body">
        <form method="post">
            <input type="hidden" name="pluginName" value="<?= getPlugin($pluginFile) ?>" />
            Plugin: <input type="submit" name="button1" value="<?php 
            if(getPluginInfo(getPlugin($pluginFile), 'aktiv') == 1) {echo 'Deaktivieren';} else {echo 'Aktivieren';}
            
            ?>"/>Achtung: Seite wird neugeladen!
        </form>
        <p>Version: <?= getPluginInfo(getPlugin($pluginFile), 'version') ?></br>
        Author: <?= getPluginInfo(getPlugin($pluginFile), 'author') ?></br>
        Beschreibung: <?= getPluginInfo(getPlugin($pluginFile), 'description') ?></p>
        
      </div>
    </div>
  </div>
<?php } 
if(isset($_POST['pluginName'])) {
    changePluginStatus($_POST['pluginName']);
    echo("<meta http-equiv='refresh' content='0'>");
}
?>
</div>