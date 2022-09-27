<?PHP
$app->AddHook('header_info','DisplayTitle');
function DisplayTitle() {
    echo "<title>Amazing Hooks</title>";
}
?>
