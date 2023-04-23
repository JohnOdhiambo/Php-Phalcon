<!-- This sample binds the function name temp in Volt to the PHP function str_shuffle:-->
<?php

use Phalcon\Mvc\View\Engine\Volt;

$volt = new Volt($view, $container);

$compiler = $volt->getCompiler();

$compiler->addFunction('temp', 'str_shuffle');

?>

<!-- {# in Volt #} -->
{{ temp('abc') }}