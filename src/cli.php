<?php
    use scenario\TestflightA380Ber\TestflightA380Ber;

    require __DIR__. '/vendor/autoload.php';
    print(shell_exec('php -d memory_limit=128M vendor/bin/phpunit'));
    $standartScenario = new TestflightA380Ber();
    $standartScenario->play();
?>
