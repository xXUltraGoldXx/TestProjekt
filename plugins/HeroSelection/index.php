<?php
$plugin->AddHook('befor_main','HeroLoad');
function HeroLoad() {
    require_once "Hero.php";
}
?>
