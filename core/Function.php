<?php 
function showError($errno, $errstr, $errfile, $errline){
    echo 'Error: ' . $errno;
    echo '<br>Error Message: ' . $errstr;
    echo '<br>File:' . $errfile;
    echo '<br>Line:' . $errline;
    echo '<br>';
}

function show404Error(){
    die('Not Found');
}