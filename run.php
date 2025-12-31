<?php
$iterations_env = getenv('ITERATIONS');
$iterations = $iterations_env === false ? 1000000000 : (int)$iterations_env;

$start_time = microtime(true);

$res = 0;
for ($i = 0; $i < $iterations; $i++) {
  $res += $i;
}

$end_time = microtime(true);
printf('%.2f', $end_time - $start_time);
