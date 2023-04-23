<?php

$compiler->addFunction(
    'repeat',
    function ($resolvedArgs, $exprArgs) use ($compiler) {
        $firstArgument = $compiler->expression($exprArgs[0]['expr']);

        if (isset($exprArgs[1])) {
            $secondArgument = $compiler->expression($exprArgs[1]['expr']);
        } else {
            $secondArgument = '10';
        }

        return 'str_repeat(' . $firstArgument . ', ' . $secondArgument . ')';
        
    }
);
?>
<!-- In Volt -->
{{ repeat('Mercedes', 'Toyota') }}

