<?PHP
$app->AddHook('body_top','loadBody');
$app->AddHook('body_bottom','textload');

function loadBody() {
    echo "<h2>Das sollte vor allem Stehen</h2>";
}

function textload() {
    echo "<h2>Das sollte am ende sein</h2>";
}
?>
