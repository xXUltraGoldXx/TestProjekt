<?php
$plugin = new PluginLoader\plugin();
$plugin->AddHook('befor_main','HeroLoad');
function HeroLoad() {
    require_once "Hero.php";
}
?>
