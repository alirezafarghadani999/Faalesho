<?php
$file_url = dirname($_SERVER['PHP_SELF']);
if ($file_url != "\\"){

    define('File_URL', $file_url);
}else{
    define('File_URL', null);

}