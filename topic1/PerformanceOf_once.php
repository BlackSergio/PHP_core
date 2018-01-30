<?php
/**
 * The reason not to use include_once or require_once every time is that PHP
 *  tracks list of included files to support the functionality this requires
 *  memory.
 */

include __DIR__ . DIRECTORY_SEPARATOR . 'GetSetIncludePath.php';

echo 'Memory:' . memory_get_usage(true);

include_once 'variables.php';

echo 'Memory:' . memory_get_usage(true);

echo $a;