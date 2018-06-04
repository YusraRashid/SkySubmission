<?php

header("Content-type: application/json");

$content = file_get_contents('uploads/programmes.json');

echo $content;
