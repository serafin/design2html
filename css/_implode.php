<?php

header('Content-Type: text/css');
foreach (glob("*.css") as $file) {
    echo file_get_contents($file);
    
}