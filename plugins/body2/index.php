<?PHP
$app->AddHook('body_bottom','IntroJS');

function IntroJS() {
    require_once("introjs.php");
}
?>
