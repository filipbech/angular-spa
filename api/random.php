<?php

sleep(1);

$max = $_GET['max'];
if(!$max) { $max=10000; }

echo rand(0,$max);