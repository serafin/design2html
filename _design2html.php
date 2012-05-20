<?php

function inc($sFile)
{
    $path = "inc/$sFile.php";
    
    $mark = "<div style=\""
          .  "clear:both;margin-top:5px;padding:5px;border-radius:5px;"
          . "background:black;color:#0f0;text-align:left;font-family:monospace;"
          . "\">%s</div>";
    
    if (! is_file($path)) {
        echo sprintf($mark, "No file $path");
        return;
    }
    
    if (isset($_GET['debug'])) {
        echo sprintf($mark, "Begin $path");
    }
        
    include $path;
        
    if (isset($_GET['debug'])) {
        echo sprintf($mark, "End $path");
    }
}
