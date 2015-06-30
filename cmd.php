<?php
header('Content-Type: text/plain');

echo fileowner('/var/log/php');

print_r(scandir('/var/log/php'));
