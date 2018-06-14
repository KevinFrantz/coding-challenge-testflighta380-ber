<?php
    require __DIR__. '/vendor/autoload.php';
    print(shell_exec('php ./vendor/bin/phpunit'));
    echo "Hello World!"
?>
