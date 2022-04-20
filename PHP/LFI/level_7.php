<?php

if(isset($_GET['file']))
{
$file_to_download = $_GET['file'];
$client_file = 'mybook.pdf';

$download_rate = 200; // 200Kb/s

$f = null;

try {

        if(strpos($file_to_download, '/') != false || strpos($file_to_download, '.pdf') == false)
        {
                print("File not authorized");
                exit();
        }

        header('Cache-control: private');
        header('Content-Type: application/octet-stream');
        header('Content-Length: ' . filesize($file_to_download));
        header('Content-Disposition: filename=' . $client_file);

        // flush the content to the web browser
        flush();


        $f = fopen($file_to_download, 'r');

        while (!feof($f)) {
                // send the file part to the web browser
                print fread($f, round($download_rate * 1024));

                // flush the content to the web browser
                flush();

                // sleep one second
                sleep(1);
        }
} catch (\Throwable $e) {
        echo $e->getMessage();
} finally {
        if ($f) {
                fclose($f);
        }
}
}

?>
