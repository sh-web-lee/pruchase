<?php
/**
 * file check
 */
set_time_limit(0);
date_default_timezone_set('PRC');
clearstatcache();
print str_repeat(" ", 4096);
$dir = "./";
function listDir($dir)
{
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            $i = 0;
            while (($file = readdir($dh)) !== false) {
                if ((is_dir($dir . "/" . $file)) && $file != "." && $file != ".." && $file!='.git' && $file!='.idea') {
                    listDir($dir . "/" . $file . "");
                } else {
                    if ($file != "." && $file != "..") {
                        $file_path = $dir . '/' . $file;
                        $file_time = filemtime($file_path);
                        if ($file_time > 1516032000) {
                            $log = $file_path . "=====>" . date('y-m-d H:i:s', $file_time) . PHP_EOL;
                            file_put_contents('checkLog20180129.txt', $log, FILE_APPEND);
                            echo $file_path . date('y-m-d H:i:s', $file_time) . '<br/><br/>';
                            flush();
                            ob_flush();
                        }
                    }
                }
                $i++;
                if ($i % 100 == 0) {
                    echo 'continue' . '<br>';
                    flush();
                    ob_flush();
                }
            }
            closedir($dh);
        }
    }
}

listDir($dir);