<?php
echo "<h1>Print Matching Options Run</h1>";
$output = shell_exec("python print_matching_options.py 2>&1");
echo "<pre>$output</pre>";
?>
